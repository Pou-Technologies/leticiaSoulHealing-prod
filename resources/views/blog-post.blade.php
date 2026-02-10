@extends('layouts.web')

@section('content')
    <!-- 1. Post Header -->
    <section class="relative pt-32 pb-20 md:pt-48 md:pb-24 px-6 bg-white border-b border-gray-100">
        <div class="container mx-auto text-center max-w-4xl">
            @if(!empty($post['category']))
                <span
                    class="text-brand-gold text-sm font-bold uppercase tracking-widest mb-4 block">{{ $post['category'] }}</span>
            @endif
            <h1 class="text-4xl md:text-5xl lg:text-6xl font-light text-gray-900 mb-8 font-serif leading-tight">
                {{ $post['title'] }}
            </h1>
            <div class="flex items-center justify-center text-gray-400 text-sm uppercase tracking-wide gap-4">
                <span>{{ \Carbon\Carbon::parse($post['created_at'])->format('M d, Y') }}</span>
                @if(!empty($post['user']['name']))
                    <span class="w-1 h-1 bg-gray-300 rounded-full"></span>
                    <span>By {{ $post['user']['name'] }}</span>
                @endif
            </div>
        </div>
    </section>

    <!-- 2. Featured Image & Content -->
    <section class="py-12 md:py-20 px-6 bg-gray-50">
        <div class="container mx-auto max-w-4xl">

            @if(!empty($post['image_url']))
                <div class="rounded-[2rem] overflow-hidden shadow-lg mb-12 md:mb-16">
                    <img src="{{ $post['image_url'] }}" alt="{{ $post['title'] }}"
                        class="w-full h-auto object-cover max-h-[600px]">
                </div>
            @endif

            <article class="prose prose-lg md:prose-xl prose-stone mx-auto font-light text-gray-700 leading-loose">
                {!! $post['content'] !!}
            </article>

            <!-- Back Link -->
            <div class="mt-16 pt-12 border-t border-gray-200 text-center">
                <a href="{{ route('blog') }}"
                    class="inline-flex items-center text-brand-teal hover:text-brand-gold transition duration-300 font-medium">
                    <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M10 19l-7-7m0 0l7-7m-7 7h18" />
                    </svg>
                    Back to Journal
                </a>
            </div>

        </div>
    </section>
@endsection