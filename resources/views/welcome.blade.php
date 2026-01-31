@extends('layouts.web')

@section('content')
    <!-- Hero Section -->
    <section class="relative min-h-screen flex items-center pt-24 pb-12 md:pt-0 md:pb-0 overflow-hidden bg-white">
        <!-- Background Decorative Elements -->
        <div class="absolute top-0 right-0 w-2/3 h-full bg-gray-50 rounded-l-[5rem] -z-10 hidden md:block"></div>

        <div class="container mx-auto px-6 relative z-10">
            <div class="flex flex-col md:flex-row items-center">
                <!-- Text Content (Left) -->
                <div class="w-full md:w-1/2 md:pr-12 text-center md:text-left mb-12 md:mb-0">
                    <p class="text-brand-gold uppercase tracking-[0.2em] mb-4 text-sm font-medium animate-fade-in-up">
                        A sacred path returning home
                    </p>
                    <h1
                        class="text-5xl md:text-6xl lg:text-7xl font-light text-gray-900 leading-tight mb-8 font-serif animate-fade-in-up delay-100">
                        Reclaim Your <br> <span class="italic text-brand-teal">Inner Light</span>
                    </h1>
                    <p
                        class="text-gray-600 text-lg md:text-xl font-light leading-relaxed mb-10 max-w-lg mx-auto md:mx-0 animate-fade-in-up delay-200">
                        Welcome to a space of deep healing and intuitive guidance. Rediscover the peace that resides within
                        you.
                    </p>
                    <div
                        class="flex flex-col md:flex-row space-y-4 md:space-y-0 md:space-x-6 justify-center md:justify-start animate-fade-in-up delay-300">
                        <a href="{{ route('register') }}"
                            class="px-8 py-4 bg-brand-teal text-white rounded-full font-medium hover:bg-opacity-90 transition shadow-lg shadow-brand-teal/30">
                            Start Your Journey
                        </a>
                        <a href="#about"
                            class="px-8 py-4 border border-gray-300 text-gray-600 rounded-full font-medium hover:border-brand-gold hover:text-brand-gold transition flex items-center justify-center group">
                            Explore the Path
                            <svg class="w-4 h-4 ml-2 group-hover:translate-x-1 transition-transform" fill="none"
                                stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M17 8l4 4m0 0l-4 4m4-4H3"></path>
                            </svg>
                        </a>
                    </div>
                </div>

                <!-- Hero Image (Right) -->
                <div class="w-full md:w-1/2 relative md:pl-10 animate-fade-in-left delay-300">
                    <div class="relative rounded-[3rem] overflow-hidden shadow-2xl">
                        <img src="{{ asset('images/hero.jpg') }}" alt="Reclaim Your Inner Light"
                            class="w-full h-auto object-cover transform hover:scale-105 transition duration-700 ease-in-out">
                        <!-- Overlay gradient for better text contrast if needed -->
                        <div class="absolute inset-0 bg-gradient-to-t from-black/10 to-transparent pointer-events-none">
                        </div>
                    </div>
                    <!-- Decorative Circle/Graphic -->
                    <div
                        class="absolute -bottom-10 -left-10 w-32 h-32 bg-brand-gold/10 rounded-full blur-2xl -z-10 animate-pulse">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Section 2: The Invitation -->
    <section class="py-32 md:py-48 px-6 bg-gray-50">
        <div class="container mx-auto text-center max-w-4xl">
            <h2 class="text-3xl md:text-5xl font-light text-gray-900 mb-8 leading-tight">
                You don’t have to walk this journey alone.
            </h2>
            <div class="w-24 h-1 bg-brand-gold mx-auto mb-10 rounded-full"></div>
            <p class="text-xl md:text-2xl text-gray-600 font-light leading-relaxed">
                Whether you are feeling overwhelmed, disconnected, or simply seeking a deeper truth, there is a path back to
                balance. Healing is the gentle art of coming home to your own soul.
            </p>
        </div>
    </section>

    <!-- Section 3: The Three Pillars -->
    <section class="py-32 md:py-48 px-6 bg-white relative overflow-hidden">
        <!-- Decoration -->
        <div
            class="absolute top-0 left-1/2 transform -translate-x-1/2 w-[800px] h-[800px] bg-brand-teal/5 rounded-full blur-3xl -z-10">
        </div>

        <div class="container mx-auto">
            <div class="grid grid-cols-1 md:grid-cols-3 gap-12 text-center">
                <!-- Pillar 1: Body -->
                <div class="group p-8 rounded-3xl hover:bg-white hover:shadow-xl transition duration-500">
                    <div
                        class="w-20 h-20 mx-auto mb-8 bg-brand-gold/10 rounded-full flex items-center justify-center group-hover:scale-110 transition duration-300">
                        <svg class="w-10 h-10 text-brand-gold" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                                d="M12 3v1m0 16v1m9-9h-1M4 12H3m15.364 6.364l-.707-.707M6.343 6.343l-.707-.707m12.728 0l-.707.707M6.343 17.657l-.707.707M16 12a4 4 0 11-8 0 4 4 0 018 0z">
                            </path>
                        </svg>
                    </div>
                    <h3 class="text-2xl font-serif text-gray-900 mb-4">Transformative Energy</h3>
                    <p class="text-gray-500 font-light leading-relaxed">
                        Healing sessions designed to release emotional weight and physical tension, restoring your natural
                        vitality.
                    </p>
                </div>

                <!-- Pillar 2: Mind -->
                <div class="group p-8 rounded-3xl hover:bg-white hover:shadow-xl transition duration-500">
                    <div
                        class="w-20 h-20 mx-auto mb-8 bg-brand-gold/10 rounded-full flex items-center justify-center group-hover:scale-110 transition duration-300">
                        <svg class="w-10 h-10 text-brand-gold" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                                d="M9.663 17h4.673M12 3v1m6.364 1.636l-.707.707M21 12h-1M4 12H3m3.343-5.657l-.707-.707m2.828 9.9a5 5 0 117.072 0l-.548.547A3.374 3.374 0 0014 18.469V19a2 2 0 11-4 0v-.531c0-.895-.356-1.754-.988-2.386l-.548-.547z">
                            </path>
                        </svg>
                    </div>
                    <h3 class="text-2xl font-serif text-gray-900 mb-4">Mindful Meditation</h3>
                    <p class="text-gray-500 font-light leading-relaxed">
                        Realigning your focus through the practice that brings clarity to chaos and peace to the restless
                        mind.
                    </p>
                </div>

                <!-- Pillar 3: Spirit -->
                <div class="group p-8 rounded-3xl hover:bg-white hover:shadow-xl transition duration-500">
                    <div
                        class="w-20 h-20 mx-auto mb-8 bg-brand-gold/10 rounded-full flex items-center justify-center group-hover:scale-110 transition duration-300">
                        <svg class="w-10 h-10 text-brand-gold" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                                d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path>
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                                d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z">
                            </path>
                        </svg>
                    </div>
                    <h3 class="text-2xl font-serif text-gray-900 mb-4">Intuitive Guidance</h3>
                    <p class="text-gray-500 font-light leading-relaxed">
                        Connecting with ancestral wisdom and soul guidance to help you find your true purpose and direction.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- Section 4: The Quote Break -->
    <section class="py-32 md:py-48 px-6 bg-white border-t border-gray-50">
        <div class="container mx-auto max-w-5xl text-center">
            <blockquote class="relative">
                <svg class="w-16 h-16 text-brand-teal/20 absolute -top-10 -left-10" fill="currentColor" viewBox="0 0 24 24">
                    <path
                        d="M14.017 21L14.017 18C14.017 16.896 14.321 16.067 14.929 15.513C15.537 14.959 16.617 14.479 18.169 14.073L18.729 13.929C19.465 13.729 19.833 13.225 19.833 12.417L19.833 8.357C19.833 7.637 19.553 7.025 18.993 6.521C18.433 6.017 17.653 5.765 16.653 5.765C15.933 5.765 15.221 5.913 14.517 6.209C13.813 6.505 13.069 6.845 12.285 7.229L12.285 3.397C13.565 2.661 14.613 2.145 15.429 1.849C16.245 1.553 17.153 1.405 18.153 1.405C20.089 1.405 21.605 1.945 22.701 3.025C23.797 4.105 24.345 5.753 24.345 7.969L24.345 14.137C24.345 16.121 23.861 17.761 22.893 19.057C21.925 20.353 20.489 21 18.585 21L14.017 21ZM5.097 21L5.097 18C5.097 16.896 5.401 16.067 6.009 15.513C6.617 14.959 7.697 14.479 9.249 14.073L9.809 13.929C10.545 13.729 10.913 13.225 10.913 12.417L10.913 8.357C10.913 7.637 10.633 7.025 10.073 6.521C9.513 6.017 8.733 5.765 7.733 5.765C7.013 5.765 6.301 5.913 5.597 6.209C4.893 6.505 4.149 6.845 3.365 7.229L3.365 3.397C4.645 2.661 5.693 2.145 6.509 1.849C7.325 1.553 8.233 1.405 9.233 1.405C11.169 1.405 12.685 1.945 13.781 3.025C14.877 4.105 15.425 5.753 15.425 7.969L15.425 14.137C15.425 16.121 14.941 17.761 13.973 19.057C13.005 20.353 11.569 21 9.665 21L5.097 21Z" />
                </svg>
                <p class="text-3xl md:text-5xl font-light text-gray-900 leading-snug font-serif">
                    Your transformation begins when you <span class="text-brand-gold italic">choose yourself</span>.
                </p>
                <footer class="mt-8 text-brand-teal uppercase tracking-widest font-medium text-sm">
                    — Leticia Soul Healing
                </footer>
            </blockquote>
        </div>
    </section>

    <!-- Section: The Soul Behind the Practice (About) -->
    <section class="py-32 md:py-40 px-6 bg-white" id="about">
        <div class="container mx-auto">
            <div class="flex flex-col md:flex-row items-center gap-12 lg:gap-20">
                <!-- Text Content (Left) -->
                <div class="w-full md:w-1/2 text-left">
                    <h2 class="text-3xl md:text-5xl font-light text-gray-900 mb-4">Meet Leticia</h2>
                    <h3 class="text-lg md:text-xl text-brand-teal font-medium uppercase tracking-widest mb-8">Natural Health
                        Practitioner, Spiritual Teacher & Intuitive Healer</h3>

                    <div class="space-y-6 text-lg text-gray-600 font-light leading-relaxed mb-10">
                        <p>
                            Leticia’s path is rooted in more than two decades of deep self-discovery and holistic wisdom.
                            Her journey, shaped by her early life in Mexico and enriched by ancestral medicine, led her to a
                            profound realization: <span class="italic text-gray-800">healing is not a straight line, but a
                                process of returning home to oneself.</span>
                        </p>
                        <p>
                            After experiencing how meditation and energy work transformed her own life, she dedicated
                            herself to guiding others. Today, she integrates ancient traditions with modern healing to help
                            you break through emotional weight and rediscover your true potential.
                        </p>
                    </div>

                    <div class="mb-10 pl-6 border-l-2 border-brand-gold">
                        <p class="font-serif text-2xl text-brand-gold italic">"My life is my message."</p>
                        <p class="text-sm text-gray-400 uppercase tracking-widest mt-2">— Mahatma Gandhi</p>
                    </div>

                    <a href="#"
                        class="inline-block px-10 py-4 border border-brand-teal text-brand-teal text-lg rounded-full font-medium hover:bg-brand-teal hover:text-white transition duration-300">
                        Read My Full Story
                    </a>
                </div>

                <!-- Image Placeholder (Right) -->
                <div
                    class="w-full md:w-1/2 relative h-[500px] bg-gray-100 rounded-[3rem] overflow-hidden flex items-center justify-center border border-gray-200">
                    <span class="text-gray-400 font-light uppercase tracking-widest">Leticia's Photo Placeholder</span>
                    <!-- Uncomment when photo is available -->
                    <!-- <img src="{{ asset('images/leticia-profile.jpg') }}" alt="Leticia" class="w-full h-full object-cover"> -->
                </div>
            </div>
        </div>
    </section>

    <!-- Section 5: Testimonials -->
    <section class="py-32 md:py-40 px-6 bg-gray-50" x-data="{
            active: 0,
            testimonials: [
                {
                    text: 'I am a mother and a professional. After seeing Leticia for over 13 years, I always go back to her because her assertive intuitive, gentle spiritual and holistic approach which has helped me immensely through out my personal and professional path.',
                    author: 'Carmen B.'
                },
                {
                    text: 'If you want a beautiful soul to guide you, Leticia is your guide.',
                    author: 'Patrick ND.'
                },
                {
                    text: 'Thank you, Leticia, because your beautiful therapy brought me out of my comfort zone which led me to resolve a situation that needed my attention regarding my marriage. I felt like I was crossing a threshold into a peaceful and clear mind to decide what I really wanted to do.',
                    author: 'Mary Z.'
                },
                {
                    text: 'At Soul Healing with Leticia you can gently and intuitively be guided into your soul (ah!, I guess hence the name). Once there, she also provides the environment for healing to happen, every time the issue at hand that needs it most. Thank you Leticia for your most needed and important service.',
                    author: 'Leal E.'
                },
                {
                    text: 'Leticia, thank you so much! Reiki and Reflexology have been wonderful therapies. You helped to balance my digestion problems and, most important to find inner peace and calm. I think everybody should have a session for indulging the mind and body.',
                    author: 'Maria.'
                }
            ],
            next() {
                this.active = (this.active + 1) % this.testimonials.length;
            },
            prev() {
                this.active = (this.active - 1 + this.testimonials.length) % this.testimonials.length;
            }
        }">
        <div class="container mx-auto max-w-6xl">
            <div class="text-center mb-16">
                <h2 class="text-3xl md:text-4xl font-light text-gray-900 mb-4 italic font-serif">Voices of Healing</h2>
                <div class="w-20 h-1 bg-brand-gold mx-auto rounded-full"></div>
            </div>

            <div class="relative max-w-4xl mx-auto">
                <!-- Carousel Container -->
                <div class="overflow-hidden relative min-h-[400px] md:min-h-[300px]">
                    <template x-for="(testimonial, index) in testimonials" :key="index">
                        <div class="absolute inset-0 transition-all duration-700 ease-in-out transform flex flex-col items-center justify-center p-8 md:p-12 text-center"
                            x-show="active === index" x-transition:enter="transition ease-out duration-500"
                            x-transition:enter-start="opacity-0 translate-x-full"
                            x-transition:enter-end="opacity-100 translate-x-0"
                            x-transition:leave="transition ease-in duration-500"
                            x-transition:leave-start="opacity-100 translate-x-0"
                            x-transition:leave-end="opacity-0 -translate-x-full">

                            <div
                                class="bg-white p-10 md:p-14 rounded-[3rem] shadow-sm border border-gray-100 max-w-3xl relative">
                                <div class="text-brand-teal text-6xl font-serif absolute -top-6 left-10 opacity-20">“
                                </div>
                                <p class="text-xl md:text-2xl text-gray-600 font-light leading-relaxed mb-8 italic"
                                    x-text="testimonial.text"></p>
                                <div class="font-medium text-brand-gold uppercase tracking-widest text-sm"
                                    x-text="'— ' + testimonial.author"></div>
                            </div>
                        </div>
                    </template>
                </div>

                <!-- Controls -->
                <button @click="prev()"
                    class="absolute top-1/2 -left-4 md:-left-12 transform -translate-y-1/2 text-gray-400 hover:text-brand-teal transition focus:outline-none">
                    <svg class="w-10 h-10" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M15 19l-7-7 7-7">
                        </path>
                    </svg>
                </button>
                <button @click="next()"
                    class="absolute top-1/2 -right-4 md:-right-12 transform -translate-y-1/2 text-gray-400 hover:text-brand-teal transition focus:outline-none">
                    <svg class="w-10 h-10" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M9 5l7 7-7 7">
                        </path>
                    </svg>
                </button>

                <!-- Indicators -->
                <div class="flex justify-center space-x-2 mt-8">
                    <template x-for="(testimonial, index) in testimonials" :key="index">
                        <button @click="active = index"
                            class="w-2 h-2 rounded-full transition-all duration-300 focus:outline-none"
                            :class="active === index ? 'bg-brand-teal w-8' : 'bg-gray-300 hover:bg-gray-400'">
                        </button>
                    </template>
                </div>
            </div>
        </div>
    </section>

    <!-- Section 6: Final Call to Action -->
    <section class="py-32 md:py-40 px-6 bg-stone-50">
        <div class="container mx-auto text-center max-w-4xl">
            <h2 class="text-3xl md:text-5xl font-light text-gray-900 mb-8 leading-tight">
                Ready for a genuine inner transformation?
            </h2>
            <p class="text-lg md:text-xl text-gray-600 font-light leading-relaxed mb-12 max-w-3xl mx-auto">
                Your journey home starts with a single breath. If you are ready to grow, to heal, and to reclaim who you
                truly are, I am here to walk alongside you.
            </p>
            <a href="{{ route('register') }}"
                class="inline-block px-10 py-4 bg-brand-teal text-white text-lg rounded-full font-medium hover:bg-opacity-90 transition shadow-xl shadow-brand-teal/20 transform hover:-translate-y-1">
                Begin Your Journey
            </a>
        </div>
    </section>
@endsection