@extends('layouts.web')

@section('content')
    <!-- 1. Page Header (Intro) -->
    <section class="relative pt-32 pb-20 md:pt-48 md:pb-32 px-6 bg-white border-b border-gray-100">
        <div class="container mx-auto text-center max-w-4xl">
            <h1 class="text-4xl md:text-6xl font-light text-gray-900 mb-6 font-serif">
                The Journal
            </h1>
            <div class="w-24 h-1 bg-brand-gold mx-auto mb-8 rounded-full"></div>
            <p class="text-xl md:text-2xl text-gray-600 font-light leading-relaxed">
                Wisdom, insights, and stories from the path of returning home.
            </p>
        </div>
    </section>

    <!-- 2. Blog Posts Grid (Dynamic from Pou Technologies API) -->
    <section class="py-20 md:py-32 px-6 bg-gray-50">
        <div class="container mx-auto max-w-7xl">

            @if(count($posts) > 0)
                <!-- Grid -->
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8 mb-16">
                    @foreach($posts as $post)
                        <div
                            class="bg-white rounded-[2rem] overflow-hidden shadow-sm hover:shadow-lg transition duration-300 border border-gray-100 flex flex-col h-full">
                            <div class="h-64 bg-gray-200 relative group overflow-hidden">
                                @if(!empty($post['image_url']))
                                    <img src="{{ $post['image_url'] }}" alt="{{ $post['title'] }}"
                                        class="w-full h-full object-cover transition duration-700 group-hover:scale-105">
                                @else
                                    <div class="w-full h-full bg-gradient-to-br from-brand-teal/20 to-brand-gold/20 flex items-center justify-center">
                                        <svg class="w-16 h-16 text-brand-teal/30" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                                                d="M19.5 14.25v-2.625a3.375 3.375 0 00-3.375-3.375h-1.5A1.125 1.125 0 0113.5 7.125v-1.5a3.375 3.375 0 00-3.375-3.375H8.25m0 12.75h7.5m-7.5 3H12M10.5 2.25H5.625c-.621 0-1.125.504-1.125 1.125v17.25c0 .621.504 1.125 1.125 1.125h12.75c.621 0 1.125-.504 1.125-1.125V11.25a9 9 0 00-9-9z" />
                                        </svg>
                                    </div>
                                @endif
                                <div class="absolute inset-0 bg-brand-teal/0 group-hover:bg-brand-teal/10 transition duration-300">
                                </div>
                            </div>
                            <div class="p-8 flex flex-col flex-grow">
                                @if(!empty($post['category']))
                                    <span class="text-brand-gold text-xs font-bold uppercase tracking-widest mb-3">{{ $post['category'] }}</span>
                                @endif
                                <h3 class="text-2xl font-serif text-gray-900 mb-4 hover:text-brand-teal transition duration-300">
                                    {{ $post['title'] }}
                                </h3>
                                <p class="text-gray-600 font-light text-sm leading-relaxed mb-6 flex-grow">
                                    {{ Str::limit(strip_tags($post['content']), 150) }}
                                </p>
                                <div class="flex items-center justify-between border-t border-gray-100 pt-6">
                                    <span class="text-gray-400 text-xs uppercase tracking-wide">
                                        {{ \Carbon\Carbon::parse($post['created_at'])->format('M d, Y') }}
                                    </span>
                                    <span class="text-brand-teal text-sm font-medium cursor-pointer hover:underline">
                                        Read Article &rarr;
                                    </span>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            @else
                <!-- Empty State -->
                <div class="text-center py-20">
                    <div class="w-20 h-20 bg-brand-teal/10 rounded-full flex items-center justify-center mx-auto mb-6">
                        <svg class="w-10 h-10 text-brand-teal" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                                d="M12 6.042A8.967 8.967 0 006 3.75c-1.052 0-2.062.18-3 .512v14.25A8.987 8.987 0 016 18c2.305 0 4.408.867 6 2.292m0-14.25a8.966 8.966 0 016-2.292c1.052 0 2.062.18 3 .512v14.25A8.987 8.987 0 0018 18a8.967 8.967 0 00-6 2.292m0-14.25v14.25" />
                        </svg>
                    </div>
                    <h3 class="text-2xl font-serif text-gray-900 mb-4">Stories are coming soon</h3>
                    <p class="text-gray-500 font-light max-w-md mx-auto">
                        New journal entries will appear here as they are published. Check back soon for wisdom and insights.
                    </p>
                </div>
            @endif

        </div>
    </section>
@endsection