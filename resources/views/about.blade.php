@extends('layouts.web')

@section('content')
    <!-- Page Header (Intro) -->
    <section class="relative pt-32 pb-20 md:pt-48 md:pb-32 px-6 bg-white border-b border-gray-100">
        <div class="container mx-auto text-center max-w-4xl">
            <h1 class="text-4xl md:text-6xl font-light text-gray-900 mb-6 font-serif">
                The Heart Behind the Healing
            </h1>
            <div class="w-24 h-1 bg-brand-gold mx-auto mb-8 rounded-full"></div>
            <p class="text-xl md:text-2xl text-gray-600 font-light leading-relaxed">
                Meet Leticia D. Jones — A guide for those returning home to themselves.
            </p>
        </div>
    </section>

    <!-- Section 1: The Awakening (Her Story) -->
    <section class="py-20 md:py-32 px-6 bg-white">
        <div class="container mx-auto max-w-5xl">
            <div class="flex flex-col md:flex-row gap-12 lg:gap-20 items-center">
                <div class="w-full md:w-1/2">
                    <!-- Placeholder for Image -->
                    <div class="aspect-[3/4] bg-gray-100 rounded-[3rem] overflow-hidden relative shadow-lg">
                        <div
                            class="absolute inset-0 flex items-center justify-center text-gray-400 font-light uppercase tracking-widest text-center p-4">
                            Leticia Portrait Placeholder
                        </div>
                    </div>
                </div>
                <div class="w-full md:w-1/2">
                    <h2 class="text-3xl md:text-4xl font-light text-gray-900 mb-6 font-serif">My life is my message.</h2>
                    <div class="space-y-6 text-lg text-gray-600 font-light leading-relaxed">
                        <p>
                            Leticia is a Natural Health Practitioner, Spiritual Teacher, and Intuitive Healer. But beyond
                            the titles, she is a dedicated mother, an entrepreneur, and a soul who guides others through the
                            wisdom gained from her own awakening path.
                        </p>
                        <p>
                            Rooted in her early journey in Mexico, her life was shaped by her family and university studies.
                            However, it was through her personal growth and lived experiences that she discovered the most
                            important relationship of her life: the one with herself.
                        </p>
                        <p>
                            With over two decades on the holistic path, Leticia has cultivated a deep connection with the
                            Divine, inner intuition, and the beautiful healing power of Mother Nature.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Section 2: The Core (Meditation) -->
    <section class="py-24 md:py-32 px-6 bg-stone-50 relative overflow-hidden">
        <!-- Decoration -->
        <div class="absolute top-0 left-0 w-full h-full opacity-30 pointer-events-none">
            <!-- Abstract shape or pattern could go here -->
        </div>

        <div class="container mx-auto max-w-4xl text-center relative z-10">
            <h2 class="text-3xl md:text-5xl font-light text-gray-900 mb-8 font-serif">Meditation Saved My Life.</h2>
            <div class="space-y-8 text-lg md:text-xl text-gray-600 font-light leading-relaxed">
                <p>
                    Leticia has walked many paths—through theology, energy work, ancestral medicine, and deep
                    self-discovery. Each one has shown her a piece of the puzzle, teaching her that healing is not a
                    straight line; it is a process of integration, clarity, and growth.
                </p>
                <p>
                    At the center of it all is <span class="text-brand-teal font-medium">Meditation</span>. For Leticia, it
                    isn’t just a practice—it’s the foundation. It is the tool that allowed her to reclaim her true potential
                    and what she now uses to help others find their center.
                </p>
            </div>
        </div>
    </section>

    <!-- Section 3: The Philosophy (Mission & Goal) -->
    <section class="py-20 md:py-32 px-6 bg-white">
        <div class="container mx-auto max-w-6xl">
            <div class="grid grid-cols-1 md:grid-cols-2 gap-12 lg:gap-24">
                <!-- Mission -->
                <div
                    class="p-8 md:p-12 bg-white border border-gray-100 rounded-[3rem] shadow-sm hover:shadow-md transition duration-500">
                    <h3 class="text-brand-teal uppercase tracking-[0.2em] font-semibold mb-6">Our Mission</h3>
                    <p class="text-xl md:text-2xl text-gray-800 font-serif leading-relaxed">
                        To support you in creating an abundant and harmonious life—one grounded in well-being,
                        self-awareness, inner peace, and healthy relationships.
                    </p>
                </div>

                <!-- Goal -->
                <div class="p-8 md:p-12 bg-brand-teal text-white rounded-[3rem] shadow-lg shadow-brand-teal/20">
                    <h3 class="text-brand-gold uppercase tracking-[0.2em] font-semibold mb-6">Our Goal</h3>
                    <p class="text-xl md:text-2xl text-white/90 font-serif leading-relaxed">
                        To walk alongside you, offering practical tools and spiritual insight so you can build a loving
                        relationship with yourself and feel healthy, joyful, and empowered.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- Section 4: A Note from Leticia -->
    <section class="py-24 md:py-32 px-6 bg-white text-center">
        <div class="container mx-auto max-w-3xl">
            <blockquote class="text-2xl md:text-3xl text-gray-800 font-light leading-relaxed italic font-serif mb-10">
                "I believe in the magic within you—the kind activated by one mindful breath. Your transformation begins the
                moment you say: 'I’m ready to grow. I’m ready to heal.' If you are ready for renewal, I am honored to walk
                this path with you."
            </blockquote>
            <div class="text-3xl md:text-4xl text-brand-gold font-serif transform -rotate-2">
                — Leticia D. Jones
            </div>
        </div>
    </section>

    <!-- Footer CTA -->
    <section class="py-20 px-6 bg-gray-50 border-t border-gray-100">
        <div class="container mx-auto text-center">
            <h2 class="text-3xl md:text-4xl font-light text-gray-900 mb-8 font-serif">Are you ready to begin?</h2>
            <div class="flex flex-col md:flex-row justify-center gap-4">
                <a href="{{ route('register') }}"
                    class="px-10 py-4 bg-brand-teal text-white rounded-full font-medium hover:bg-opacity-90 transition shadow-lg shadow-brand-teal/20">
                    Book a Session
                </a>
                <a href="{{ route('services') }}"
                    class="px-10 py-4 border border-gray-300 text-gray-600 rounded-full font-medium hover:border-brand-gold hover:text-brand-gold transition">
                    View All Services
                </a>
            </div>
        </div>
    </section>

@endsection