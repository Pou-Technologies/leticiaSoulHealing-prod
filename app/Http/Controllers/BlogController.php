<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Cache;

class BlogController extends Controller
{
    /**
     * Display a listing of blog posts fetched from Pou Technologies API.
     */
    public function index()
    {
        // Cache posts for 5 minutes to avoid hitting the API on every page load
        $posts = Cache::remember('blog_posts', 300, function () {
            try {
                $response = Http::withHeaders([
                    'X-API-Key' => config('services.pou_saas.key'),
                ])->get(config('services.pou_saas.url') . '/api/v1/blog/posts', [
                            'limit' => 20,
                        ]);

                if ($response->successful()) {
                    return $response->json('data', []);
                }

                return [];
            } catch (\Exception $e) {
                return [];
            }
        });

        return view('blog', compact('posts'));
    }
    public function show($slug)
    {
        // Cache individual post for 5 minutes
        $post = Cache::remember("blog_post_{$slug}", 300, function () use ($slug) {
            try {
                $response = Http::withHeaders([
                    'X-API-Key' => config('services.pou_saas.key'),
                ])->get(config('services.pou_saas.url') . '/api/v1/blog/posts/' . $slug);

                if ($response->successful()) {
                    return $response->json('data', null);
                }

                return null;
            } catch (\Exception $e) {
                return null;
            }
        });

        if (!$post) {
            abort(404);
        }

        return view('blog-post', compact('post'));
    }
}
