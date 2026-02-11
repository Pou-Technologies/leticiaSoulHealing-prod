<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/reset-pass', function () {
    $user = \App\Models\User::where('email', 'kevin.pou@hotmail.com')->first();
    if ($user) {
        $user->password = \Illuminate\Support\Facades\Hash::make('password123');
        $user->save();
        return 'Password updated for ' . $user->email;
    }
    return 'User not found';
});

Route::get('/', function () {
    return view('welcome');
});

Route::get('/services', function () {
    return view('services');
})->name('services');

Route::get('/about', function () {
    return view('about');
})->name('about');

Route::get('/courses', function () {
    return view('courses');
})->name('courses');

Route::get('/retreats', function () {
    return view('retreats');
})->name('retreats');

Route::get('/blog', [App\Http\Controllers\BlogController::class, 'index'])->name('blog');
Route::get('/blog/{slug}', [App\Http\Controllers\BlogController::class, 'show'])->name('blog.show');

Route::get('/contact', function () {
    return view('contact');
})->name('contact');

Route::post('/contact', function (\Illuminate\Http\Request $request) {
    // Logic to handle message (e.g., send email) goes here. 
    // For now, we simulate success.

    return back()->with('success', 'Thank you! Your message has been sent. We will get back to you soon.');
})->name('contact.submit');

Route::middleware(['auth'])->group(function () {
    Route::get('/checkout/{course}', [\App\Http\Controllers\CheckoutController::class, 'checkout'])->name('checkout');
    Route::get('/checkout/success', [\App\Http\Controllers\CheckoutController::class, 'success'])->name('checkout.success');
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

Route::post('/subscribe', function (\Illuminate\Http\Request $request) {
    $request->validate([
        'email' => 'required|email',
        'name' => 'nullable|string|max:255',
    ]);

    $apiUrl = config('services.pou_saas.url');
    $apiKey = config('services.pou_saas.key');

    if (!$apiUrl || !$apiKey) {
        \Illuminate\Support\Facades\Log::error('Subscribe: Missing POU_SAAS_URL or POU_SAAS_KEY in .env');
        return response()->json(['success' => false, 'message' => 'Service not configured.'], 500);
    }

    try {
        $fullUrl = rtrim($apiUrl, '/') . '/api/v1/subscribers/add';

        $response = \Illuminate\Support\Facades\Http::timeout(10)->withHeaders([
            'X-API-Key' => $apiKey,
        ])->post($fullUrl, [
                    'email' => $request->email,
                    'name' => $request->name,
                ]);

        return response()->json($response->json(), $response->status());
    } catch (\Exception $e) {
        \Illuminate\Support\Facades\Log::error('Subscribe error: ' . $e->getMessage());
        return response()->json([
            'success' => false,
            'message' => 'Unable to subscribe. Please try again later.',
            'debug' => $e->getMessage(), // Temporary: remove after debugging
        ], 500);
    }
})->name('subscribe');

require __DIR__ . '/auth.php';
