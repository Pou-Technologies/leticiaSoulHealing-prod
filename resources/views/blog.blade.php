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

    <!-- 2. Blog Posts Grid (Placeholder for SaaS Integration) -->
    <section class="py-20 md:py-32 px-6 bg-gray-50">
        <div class="container mx-auto max-w-7xl">

            <!-- Grid -->
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8 mb-16">
                <!-- Post 1 (Placeholder) -->
                <div
                    class="bg-white rounded-[2rem] overflow-hidden shadow-sm hover:shadow-lg transition duration-300 border border-gray-100 flex flex-col h-full">
                    <div class="h-64 bg-gray-200 relative group overflow-hidden">
                        <img src="https://picsum.photos/seed/meditation/800/600" alt="Meditation"
                            class="w-full h-full object-cover transition duration-700 group-hover:scale-105">
                        <div class="absolute inset-0 bg-brand-teal/0 group-hover:bg-brand-teal/10 transition duration-300">
                        </div>
                    </div>
                    <div class="p-8 flex flex-col flex-grow">
                        <span class="text-brand-gold text-xs font-bold uppercase tracking-widest mb-3">Meditation</span>
                        <h3 class="text-2xl font-serif text-gray-900 mb-4 hover:text-brand-teal transition duration-300">
                            Finding Stillness in a Chaotic World</h3>
                        <p class="text-gray-600 font-light text-sm leading-relaxed mb-6 flex-grow">
                            In the midst of modern noise, the ancient practice of silence offers us a refuge. Discover how 5
                            minutes a day can shift your entire reality.
                        </p>
                        <div class="flex items-center justify-between border-t border-gray-100 pt-6">
                            <span class="text-gray-400 text-xs uppercase tracking-wide">Jan 28, 2026</span>
                            <span class="text-brand-teal text-sm font-medium cursor-pointer hover:underline">Read Article
                                &rarr;</span>
                        </div>
                    </div>
                </div>

                <!-- Post 2 (Placeholder) -->
                <div
                    class="bg-white rounded-[2rem] overflow-hidden shadow-sm hover:shadow-lg transition duration-300 border border-gray-100 flex flex-col h-full">
                    <div class="h-64 bg-gray-200 relative group overflow-hidden">
                        <img src="https://picsum.photos/seed/ancestral/800/600" alt="Ancestral Healing"
                            class="w-full h-full object-cover transition duration-700 group-hover:scale-105">
                        <div class="absolute inset-0 bg-brand-teal/0 group-hover:bg-brand-teal/10 transition duration-300">
                        </div>
                    </div>
                    <div class="p-8 flex flex-col flex-grow">
                        <span class="text-brand-gold text-xs font-bold uppercase tracking-widest mb-3">Healing</span>
                        <h3 class="text-2xl font-serif text-gray-900 mb-4 hover:text-brand-teal transition duration-300">The
                            Roots of Ancestral Trauma</h3>
                        <p class="text-gray-600 font-light text-sm leading-relaxed mb-6 flex-grow">
                            We carry more than just our own memories. Learn how family constellations can help release
                            burdens that were never yours to carry.
                        </p>
                        <div class="flex items-center justify-between border-t border-gray-100 pt-6">
                            <span class="text-gray-400 text-xs uppercase tracking-wide">Jan 15, 2026</span>
                            <span class="text-brand-teal text-sm font-medium cursor-pointer hover:underline">Read Article
                                &rarr;</span>
                        </div>
                    </div>
                </div>

                <!-- Post 3 (Placeholder) -->
                <div
                    class="bg-white rounded-[2rem] overflow-hidden shadow-sm hover:shadow-lg transition duration-300 border border-gray-100 flex flex-col h-full">
                    <div class="h-64 bg-gray-200 relative group overflow-hidden">
                        <img src="https://picsum.photos/seed/sacredspace/800/600" alt="Sacred Space"
                            class="w-full h-full object-cover transition duration-700 group-hover:scale-105">
                        <div class="absolute inset-0 bg-brand-teal/0 group-hover:bg-brand-teal/10 transition duration-300">
                        </div>
                    </div>
                    <div class="p-8 flex flex-col flex-grow">
                        <span class="text-brand-gold text-xs font-bold uppercase tracking-widest mb-3">Lifestyle</span>
                        <h3 class="text-2xl font-serif text-gray-900 mb-4 hover:text-brand-teal transition duration-300">
                            Creating a Sacred Space at Home</h3>
                        <p class="text-gray-600 font-light text-sm leading-relaxed mb-6 flex-grow">
                            You don't need a dedicated temple to find peace. Simple tips to turn a corner of your home into
                            a sanctuary for your soul.
                        </p>
                        <div class="flex items-center justify-between border-t border-gray-100 pt-6">
                            <span class="text-gray-400 text-xs uppercase tracking-wide">Dec 10, 2025</span>
                            <span class="text-brand-teal text-sm font-medium cursor-pointer hover:underline">Read Article
                                &rarr;</span>
                        </div>
                    </div>
                </div>

                <!-- Post 4 (Placeholder) -->
                <div
                    class="bg-white rounded-[2rem] overflow-hidden shadow-sm hover:shadow-lg transition duration-300 border border-gray-100 flex flex-col h-full">
                    <div class="h-64 bg-gray-200 relative group overflow-hidden">
                        <img src="https://picsum.photos/seed/breathe/800/600" alt="Breathe"
                            class="w-full h-full object-cover transition duration-700 group-hover:scale-105">
                        <div class="absolute inset-0 bg-brand-teal/0 group-hover:bg-brand-teal/10 transition duration-300">
                        </div>
                    </div>
                    <div class="p-8 flex flex-col flex-grow">
                        <span class="text-brand-gold text-xs font-bold uppercase tracking-widest mb-3">Meditation</span>
                        <h3 class="text-2xl font-serif text-gray-900 mb-4 hover:text-brand-teal transition duration-300">
                            Breathing Into the Present Moment</h3>
                        <p class="text-gray-600 font-light text-sm leading-relaxed mb-6 flex-grow">
                            When anxiety takes over, the breath is our anchor. A simple guide to returning to the now.
                        </p>
                        <div class="flex items-center justify-between border-t border-gray-100 pt-6">
                            <span class="text-gray-400 text-xs uppercase tracking-wide">Nov 22, 2025</span>
                            <span class="text-brand-teal text-sm font-medium cursor-pointer hover:underline">Read Article
                                &rarr;</span>
                        </div>
                    </div>
                </div>
                <!-- Post 5 (Placeholder) -->
                <div
                    class="bg-white rounded-[2rem] overflow-hidden shadow-sm hover:shadow-lg transition duration-300 border border-gray-100 flex flex-col h-full">
                    <div class="h-64 bg-gray-200 relative group overflow-hidden">
                        <img src="https://picsum.photos/seed/courage/800/600" alt="Courage"
                            class="w-full h-full object-cover transition duration-700 group-hover:scale-105">
                        <div class="absolute inset-0 bg-brand-teal/0 group-hover:bg-brand-teal/10 transition duration-300">
                        </div>
                    </div>
                    <div class="p-8 flex flex-col flex-grow">
                        <span class="text-brand-gold text-xs font-bold uppercase tracking-widest mb-3">Inspiration</span>
                        <h3 class="text-2xl font-serif text-gray-900 mb-4 hover:text-brand-teal transition duration-300">The
                            Courage to Heal</h3>
                        <p class="text-gray-600 font-light text-sm leading-relaxed mb-6 flex-grow">
                            Healing is not for the faint of heart. It requires the bravery to look within and the love to
                            embrace what we find.
                        </p>
                        <div class="flex items-center justify-between border-t border-gray-100 pt-6">
                            <span class="text-gray-400 text-xs uppercase tracking-wide">Oct 05, 2025</span>
                            <span class="text-brand-teal text-sm font-medium cursor-pointer hover:underline">Read Article
                                &rarr;</span>
                        </div>
                    </div>
                </div>
                <!-- Post 6 (Placeholder) -->
                <div
                    class="bg-white rounded-[2rem] overflow-hidden shadow-sm hover:shadow-lg transition duration-300 border border-gray-100 flex flex-col h-full">
                    <div class="h-64 bg-gray-200 relative group overflow-hidden">
                        <img src="https://picsum.photos/seed/morningritual/800/600" alt="Morning Ritual"
                            class="w-full h-full object-cover transition duration-700 group-hover:scale-105">
                        <div class="absolute inset-0 bg-brand-teal/0 group-hover:bg-brand-teal/10 transition duration-300">
                        </div>
                    </div>
                    <div class="p-8 flex flex-col flex-grow">
                        <span class="text-brand-gold text-xs font-bold uppercase tracking-widest mb-3">Rituals</span>
                        <h3 class="text-2xl font-serif text-gray-900 mb-4 hover:text-brand-teal transition duration-300">
                            Morning Rituals for Energy</h3>
                        <p class="text-gray-600 font-light text-sm leading-relaxed mb-6 flex-grow">
                            How you start your day defines your vibration. 3 simple rituals to wake up with intention.
                        </p>
                        <div class="flex items-center justify-between border-t border-gray-100 pt-6">
                            <span class="text-gray-400 text-xs uppercase tracking-wide">Sep 12, 2025</span>
                            <span class="text-brand-teal text-sm font-medium cursor-pointer hover:underline">Read Article
                                &rarr;</span>
                        </div>
                    </div>
                </div>

            </div>

            <!-- Pagination (Placeholder) -->
            <div class="flex justify-center items-center gap-4">
                <button
                    class="w-12 h-12 rounded-full border border-gray-200 flex items-center justify-center text-gray-400 hover:border-brand-teal hover:text-brand-teal transition"
                    disabled>
                    &larr;
                </button>
                <div class="flex items-center gap-2">
                    <button
                        class="w-10 h-10 rounded-full bg-brand-teal text-white flex items-center justify-center text-sm font-medium shadow-lg shadow-brand-teal/20">1</button>
                    <button
                        class="w-10 h-10 rounded-full hover:bg-gray-100 text-gray-600 flex items-center justify-center text-sm font-medium transition">2</button>
                    <button
                        class="w-10 h-10 rounded-full hover:bg-gray-100 text-gray-600 flex items-center justify-center text-sm font-medium transition">3</button>
                </div>
                <button
                    class="w-12 h-12 rounded-full border border-gray-200 flex items-center justify-center text-gray-600 hover:border-brand-teal hover:text-brand-teal transition">
                    &rarr;
                </button>
            </div>

        </div>
    </section>
@endsection