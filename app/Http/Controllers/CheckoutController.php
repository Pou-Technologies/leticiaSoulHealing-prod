<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Course;

class CheckoutController extends Controller
{
    public function checkout(Request $request, Course $course)
    {
        $user = $request->user();

        // Ensure user is a Stripe customer
        if (!$user->stripe_id) {
            $user->createAsStripeCustomer();
        }

        // We use Stripe SDK directly for ad-hoc pricing (since we don't have Price IDs in DB)
        \Stripe\Stripe::setApiKey(env('STRIPE_SECRET'));

        $sessionData = [
            'customer' => $user->stripe_id,
            'payment_method_types' => ['card'],
            'line_items' => [
                [
                    'price_data' => [
                        'currency' => 'usd',
                        'product_data' => [
                            'name' => $course->title,
                            'images' => $course->image_url ? [$course->image_url] : [],
                        ],
                        'unit_amount' => (int) ($course->price * 100),
                    ],
                    'quantity' => 1,
                ]
            ],
            'mode' => 'payment',
            'success_url' => route('checkout.success', ['course_id' => $course->id]) . '?session_id={CHECKOUT_SESSION_ID}',
            'cancel_url' => route('courses'),
            'metadata' => [
                'course_id' => $course->id,
                'user_id' => $user->id,
            ],
        ];

        // If using Stripe Connect to send payment to Leticia and take a fee
        if (env('STRIPE_CONNECT_ACCOUNT_ID')) {
            $sessionData['payment_intent_data'] = [
                'transfer_data' => [
                    'destination' => env('STRIPE_CONNECT_ACCOUNT_ID'),
                ],
                // Application fee in cents (e.g., 10% of the price)
                // You can calibrate this percentage as needed
                'application_fee_amount' => (int) ($course->price * 100 * 0.10),
            ];
        }

        $session = \Stripe\Checkout\Session::create($sessionData);

        return redirect($session->url);
    }

    public function success(Request $request)
    {
        $courseId = $request->query('course_id');
        $course = Course::findOrFail($courseId);

        // Enroll user logic: Attach course to user in pivot table
        $user = auth()->user();
        if (!$user->courses()->where('course_id', $course->id)->exists()) {
            $user->courses()->attach($course->id);

            // Notify Main SaaS about the sale
            try {
                $saas = new \App\Services\PouSaaS\SaaSConnector();
                $saas->sendSale([
                    'user_email' => $user->email,
                    'course_id' => $course->id,
                    'course_title' => $course->title,
                    'amount' => $course->price,
                    'commission' => $course->price * 0.10, // Matching the 10% connect fee
                    'stripe_session_id' => $request->query('session_id'),
                ]);
            } catch (\Exception $e) {
                \Illuminate\Support\Facades\Log::error('Failed to notify SaaS of sale: ' . $e->getMessage());
            }
        }

        return redirect()->route('dashboard')->with('success', 'You have successfully enrolled in ' . $course->title);
    }
}
