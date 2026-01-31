@extends('layouts.web')

@section('content')
    <!-- 1. Page Header (Intro) -->
    <section class="relative pt-32 pb-20 md:pt-48 md:pb-32 px-6 bg-white border-b border-gray-100">
        <div class="container mx-auto text-center max-w-4xl">
            <h1 class="text-4xl md:text-6xl font-light text-gray-900 mb-6 font-serif">
                Services & Offerings
            </h1>
            <div class="w-24 h-1 bg-brand-gold mx-auto mb-8 rounded-full"></div>
            <p class="text-xl md:text-2xl text-gray-600 font-light leading-relaxed">
                A holistic blend of ancestral wisdom and modern modalities to support your return to wholeness.
            </p>
        </div>
    </section>

    <!-- 2. Service Categories (The "Menu") -->
    <section class="py-20 md:py-32 px-6 bg-white">
        <div class="container mx-auto">

            <!-- Category A: Deep Healing & Therapy -->
            <div class="mb-24 lg:mb-32">
                <div class="text-center mb-16">
                    <span class="text-brand-teal uppercase tracking-[0.2em] text-sm font-semibold">Category A</span>
                    <h2 class="text-3xl md:text-4xl font-light text-gray-900 mt-2 mb-4">Deep Healing & Therapy</h2>
                    <p class="text-gray-500 font-light max-w-2xl mx-auto">Focus: Emotional and psychological integration.
                    </p>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-2 gap-8 lg:gap-12 max-w-6xl mx-auto">
                    <!-- Service Item -->
                    <div class="p-8 rounded-3xl bg-gray-50 hover:shadow-lg transition duration-300 border border-gray-100">
                        <h3 class="text-2xl font-serif text-gray-900 mb-3">Transpersonal Family Systems Therapy</h3>
                        <p class="text-gray-600 font-light leading-relaxed">Exploring the roots of your story to find
                            systemic peace.</p>
                    </div>
                    <!-- Service Item -->
                    <div class="p-8 rounded-3xl bg-gray-50 hover:shadow-lg transition duration-300 border border-gray-100">
                        <h3 class="text-2xl font-serif text-gray-900 mb-3">Soul-Intuitive Healing</h3>
                        <p class="text-gray-600 font-light leading-relaxed">Deep guidance to reconnect with your inner light
                            and purpose.</p>
                    </div>
                    <!-- Service Item -->
                    <div class="p-8 rounded-3xl bg-gray-50 hover:shadow-lg transition duration-300 border border-gray-100">
                        <h3 class="text-2xl font-serif text-gray-900 mb-3">Non-Verbal Art Therapy with Mandalas</h3>
                        <p class="text-gray-600 font-light leading-relaxed">Expressing the subconscious through creative
                            geometry.</p>
                    </div>
                    <!-- Service Item -->
                    <div class="p-8 rounded-3xl bg-gray-50 hover:shadow-lg transition duration-300 border border-gray-100">
                        <h3 class="text-2xl font-serif text-gray-900 mb-3">Neuro-Movement</h3>
                        <p class="text-gray-600 font-light leading-relaxed">Reorganizing the mind and body through conscious
                            motion.</p>
                    </div>
                </div>
            </div>

            <!-- Category B: Energy & Body Work -->
            <div class="mb-24 lg:mb-32">
                <div class="text-center mb-16">
                    <span class="text-brand-gold uppercase tracking-[0.2em] text-sm font-semibold">Category B</span>
                    <h2 class="text-3xl md:text-4xl font-light text-gray-900 mt-2 mb-4">Energy & Body Work</h2>
                    <p class="text-gray-500 font-light max-w-2xl mx-auto">Focus: Vitality and energetic balance.</p>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-3 gap-8 max-w-6xl mx-auto">
                    <!-- Service Item -->
                    <div
                        class="p-8 rounded-3xl bg-white border border-gray-100 shadow-sm hover:shadow-md transition duration-300 text-center">
                        <div class="w-16 h-16 bg-brand-gold/10 rounded-full flex items-center justify-center mx-auto mb-6">
                            <svg class="w-8 h-8 text-brand-gold" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                                    d="M13 10V3L4 14h7v7l9-11h-7z"></path>
                            </svg>
                        </div>
                        <h3 class="text-xl font-serif text-gray-900 mb-3">Reiki Healing</h3>
                        <p class="text-gray-600 font-light leading-relaxed">Gentle energy transfer to restore balance and
                            reduce stress.</p>
                    </div>
                    <!-- Service Item -->
                    <div
                        class="p-8 rounded-3xl bg-white border border-gray-100 shadow-sm hover:shadow-md transition duration-300 text-center">
                        <div class="w-16 h-16 bg-brand-gold/10 rounded-full flex items-center justify-center mx-auto mb-6">
                            <svg class="w-8 h-8 text-brand-gold" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                                    d="M19.428 15.428a2 2 0 00-1.022-.547l-2.384-.477a6 6 0 00-3.86.517l-.318.158a6 6 0 01-3.86.517L6.05 15.21a2 2 0 00-1.806.547M8 4h8l-1 1v5.172a2 2 0 00.586 1.414l5 5c1.26 1.26.367 3.414-1.415 3.414H4.828c-1.782 0-2.674-2.154-1.414-3.414l5-5A2 2 0 009 10.172V5L8 4z">
                                </path>
                            </svg>
                        </div>
                        <h3 class="text-xl font-serif text-gray-900 mb-3">Quantic Healing</h3>
                        <p class="text-gray-600 font-light leading-relaxed">Working with the field of possibilities for
                            profound shifts.</p>
                    </div>
                    <!-- Service Item -->
                    <div
                        class="p-8 rounded-3xl bg-white border border-gray-100 shadow-sm hover:shadow-md transition duration-300 text-center">
                        <div class="w-16 h-16 bg-brand-gold/10 rounded-full flex items-center justify-center mx-auto mb-6">
                            <svg class="w-8 h-8 text-brand-gold" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                                    d="M16 8v8m-4-5v5m-4-2v2m-2 4h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z">
                                </path>
                            </svg>
                        </div>
                        <h3 class="text-xl font-serif text-gray-900 mb-3">Reflexology</h3>
                        <p class="text-gray-600 font-light leading-relaxed">Activating the body's natural healing through
                            focused pressure points.</p>
                    </div>
                </div>
            </div>

            <!-- Category C: Education & Connection -->
            <div>
                <div class="text-center mb-16">
                    <span class="text-brand-teal uppercase tracking-[0.2em] text-sm font-semibold">Category C</span>
                    <h2 class="text-3xl md:text-4xl font-light text-gray-900 mt-2 mb-4">Education & Connection</h2>
                    <p class="text-gray-500 font-light max-w-2xl mx-auto">Focus: Growth and community.</p>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-3 gap-8 max-w-6xl mx-auto">
                    <!-- Service Item -->
                    <div class="relative group overflow-hidden rounded-3xl shadow-lg h-80">
                        <!-- Placeholder Background -->
                        <div
                            class="absolute inset-0 bg-gray-800 bg-opacity-40 group-hover:bg-opacity-30 transition duration-500">
                        </div>
                        <div
                            class="absolute inset-0 bg-gradient-to-t from-gray-900 via-transparent to-transparent opacity-90">
                        </div>
                        <div class="absolute bottom-0 left-0 p-8 w-full">
                            <h3 class="text-2xl font-serif text-white mb-2">Reiki Certification</h3>
                            <p class="text-gray-200 font-light text-sm">Become a channel for healing yourself and others.
                            </p>
                        </div>
                    </div>
                    <!-- Service Item -->
                    <div class="relative group overflow-hidden rounded-3xl shadow-lg h-80">
                        <!-- Placeholder Background -->
                        <div class="absolute inset-0 bg-brand-teal bg-opacity-90 transition duration-500"></div>
                        <div class="absolute inset-0 flex flex-col items-center justify-center p-8 text-center">
                            <h3 class="text-2xl font-serif text-white mb-2">Retreats & Workshops</h3>
                            <p class="text-white/80 font-light">Immersive experiences for deep renewal and soul discovery.
                            </p>
                        </div>
                    </div>
                    <!-- Service Item -->
                    <div class="relative group overflow-hidden rounded-3xl shadow-lg h-80">
                        <!-- Placeholder Background -->
                        <div
                            class="absolute inset-0 bg-gray-800 bg-opacity-40 group-hover:bg-opacity-30 transition duration-500">
                        </div>
                        <div
                            class="absolute inset-0 bg-gradient-to-t from-gray-900 via-transparent to-transparent opacity-90">
                        </div>
                        <div class="absolute bottom-0 left-0 p-8 w-full">
                            <h3 class="text-2xl font-serif text-white mb-2">Public Speaking</h3>
                            <p class="text-gray-200 font-light text-sm">Inspiring talks on awakening, health, and the
                                holistic path.</p>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>

    <!-- 3. Featured Section: "The core of my work" -->
    <section class="py-24 md:py-32 px-6 bg-brand-teal text-white relative overflow-hidden">
        <!-- Decoration -->
        <div class="absolute top-0 right-0 w-[500px] h-[500px] bg-white/10 rounded-full blur-3xl -mr-32 -mt-32"></div>

        <div class="container mx-auto max-w-5xl text-center relative z-10">
            <span class="text-brand-gold font-medium uppercase tracking-widest text-sm mb-6 block">The core of my
                work</span>
            <h2 class="text-3xl md:text-5xl font-light font-serif mb-8 text-white">Meditation: The Golden Thread</h2>
            <div class="text-xl md:text-2xl font-light leading-relaxed max-w-3xl mx-auto italic text-white/90">
                "In every session, class, or workshop, meditation is the center. It is the tool that allows us to find
                stillness in the chaos and clarity in the unknown."
            </div>
        </div>
    </section>

    <!-- 4. The Process (How it works) -->
    <section class="py-24 md:py-32 px-6 bg-stone-50">
        <div class="container mx-auto max-w-6xl">
            <div class="text-center mb-16">
                <h2 class="text-3xl md:text-4xl font-light text-gray-900 mb-4">The Process</h2>
                <div class="w-16 h-1 bg-brand-teal mx-auto rounded-full"></div>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-8 md:gap-12 relative">
                <!-- Connector Line (Desktop) -->
                <div class="hidden md:block absolute top-12 left-0 w-full h-0.5 bg-gray-200 z-0"></div>

                <!-- Step 1 -->
                <div class="relative z-10 bg-white p-8 rounded-3xl shadow-sm border border-gray-100 text-center">
                    <div
                        class="w-24 h-24 bg-brand-teal text-white rounded-full flex items-center justify-center text-3xl font-serif mx-auto mb-6 shadow-lg shadow-brand-teal/30">
                        1</div>
                    <h3 class="text-xl font-medium text-gray-900 mb-3">Discovery</h3>
                    <p class="text-gray-600 font-light text-sm">We identify the root causes of your distress and map out
                        your unique landscape.</p>
                </div>

                <!-- Step 2 -->
                <div class="relative z-10 bg-white p-8 rounded-3xl shadow-sm border border-gray-100 text-center">
                    <div
                        class="w-24 h-24 bg-brand-gold text-white rounded-full flex items-center justify-center text-3xl font-serif mx-auto mb-6 shadow-lg shadow-brand-gold/30">
                        2</div>
                    <h3 class="text-xl font-medium text-gray-900 mb-3">Integration</h3>
                    <p class="text-gray-600 font-light text-sm">We apply the modalities best suited for your unique path,
                        blending wisdom and energy.</p>
                </div>

                <!-- Step 3 -->
                <div class="relative z-10 bg-white p-8 rounded-3xl shadow-sm border border-gray-100 text-center">
                    <div
                        class="w-24 h-24 bg-gray-900 text-white rounded-full flex items-center justify-center text-3xl font-serif mx-auto mb-6 shadow-lg">
                        3</div>
                    <h3 class="text-xl font-medium text-gray-900 mb-3">Transformation</h3>
                    <p class="text-gray-600 font-light text-sm">You walk away feeling centered, empowered, and truly "home"
                        within yourself.</p>
                </div>
            </div>

            <div class="text-center mt-16">
                <a href="{{ route('register') }}"
                    class="inline-block px-10 py-4 bg-brand-teal text-white rounded-full font-medium hover:bg-opacity-90 transition shadow-lg shadow-brand-teal/30">
                    Schedule Your Discovery Session
                </a>
            </div>
        </div>
    </section>
@endsection