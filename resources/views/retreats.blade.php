@extends('layouts.web')

@section('content')
    <!-- 1. Page Header (Intro) -->
    <section class="relative pt-32 pb-20 md:pt-48 md:pb-32 px-6 bg-white border-b border-gray-100">
        <div class="container mx-auto text-center max-w-4xl">
            <h1 class="text-4xl md:text-6xl font-light text-gray-900 mb-6 font-serif">
                Sacred Gatherings
            </h1>
            <div class="w-24 h-1 bg-brand-gold mx-auto mb-8 rounded-full"></div>
            <p class="text-xl md:text-2xl text-gray-600 font-light leading-relaxed">
                Disconnect from the noise to reconnect with your soul. Join us in sacred spaces designed for deep healing,
                community, and transformation.
            </p>
        </div>
    </section>

    <!-- 2. Upcoming Retreats -->
    <section class="py-20 md:py-32 px-6 bg-gray-50">
        <div class="container mx-auto max-w-6xl">
            <div class="flex flex-col gap-12">

                <!-- Retreat Item 1 -->
                <div
                    class="bg-white rounded-[3rem] p-8 md:p-12 shadow-lg border border-gray-100 flex flex-col lg:flex-row gap-8 lg:gap-12 items-center">
                    <!-- Date/Location Badge Area (Left) -->
                    <div class="w-full lg:w-1/3 flex flex-col items-center justify-center text-center">
                        <div class="w-24 h-24 bg-brand-teal/10 rounded-full flex items-center justify-center mb-6">
                            <svg class="w-10 h-10 text-brand-teal" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                                    d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z">
                                </path>
                            </svg>
                        </div>
                        <span class="text-brand-gold font-medium uppercase tracking-widest text-sm mb-2">Fall 2026</span>
                        <span class="text-gray-900 font-serif text-xl">Coming Soon</span>
                        <div class="mt-4 text-gray-500 font-light text-sm">Prince Edward Island / Online</div>
                    </div>

                    <!-- Content (Right) -->
                    <div class="w-full lg:w-2/3 border-t lg:border-t-0 lg:border-l border-gray-100 pt-8 lg:pt-0 lg:pl-12">
                        <h3 class="text-3xl font-serif text-gray-900 mb-4">The Soul Awakening Retreat</h3>
                        <p class="text-gray-600 font-light leading-relaxed mb-8">
                            A multi-day journey into meditation, ancestral medicine, and nature. This is a space to break
                            cycles and step into your power alongside a community of like-minded souls.
                        </p>
                        <a href="#"
                            class="inline-block px-8 py-3 bg-gray-900 text-white rounded-full font-medium hover:bg-gray-800 transition">
                            Join the Waitlist
                        </a>
                    </div>
                </div>

                <!-- Retreat Item 2 -->
                <div
                    class="bg-white rounded-[3rem] p-8 md:p-12 shadow-lg border border-gray-100 flex flex-col lg:flex-row gap-8 lg:gap-12 items-center">
                    <!-- Date/Location Badge Area (Left) -->
                    <div class="w-full lg:w-1/3 flex flex-col items-center justify-center text-center">
                        <div class="w-24 h-24 bg-brand-gold/10 rounded-full flex items-center justify-center mb-6">
                            <svg class="w-10 h-10 text-brand-gold" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                                    d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                            </svg>
                        </div>
                        <span class="text-brand-gold font-medium uppercase tracking-widest text-sm mb-2">Saturday, March
                            14th</span>
                        <span class="text-gray-900 font-serif text-xl">One-Day Intensive</span>
                        <div class="mt-4 text-gray-500 font-light text-sm">Local Wellness Center</div>
                    </div>

                    <!-- Content (Right) -->
                    <div class="w-full lg:w-2/3 border-t lg:border-t-0 lg:border-l border-gray-100 pt-8 lg:pt-0 lg:pl-12">
                        <h3 class="text-3xl font-serif text-gray-900 mb-4">"Returning Home"</h3>
                        <p class="text-gray-600 font-light leading-relaxed mb-8">
                            A deep dive into meditation and Mandalas Art-Therapy. Perfect for a mental reset and emotional
                            clearing.
                        </p>
                        <a href="{{ route('register') }}"
                            class="inline-block px-8 py-3 bg-brand-teal text-white rounded-full font-medium hover:bg-opacity-90 transition shadow-lg shadow-brand-teal/20">
                            Limited Spots Available
                        </a>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- 3. Custom Workshops & Speaking -->
    <section class="py-20 md:py-32 px-6 bg-white">
        <div class="container mx-auto max-w-5xl">
            <div
                class="bg-brand-teal rounded-[3rem] p-8 md:p-16 text-center text-white relative overflow-hidden shadow-2xl">
                <!-- Decoration -->
                <div class="absolute top-0 right-0 w-64 h-64 bg-white/10 rounded-full blur-3xl -mr-16 -mt-16"></div>
                <div class="absolute bottom-0 left-0 w-64 h-64 bg-brand-gold/20 rounded-full blur-3xl -ml-16 -mb-16"></div>

                <div class="relative z-10">
                    <h2 class="text-3xl md:text-4xl font-serif mb-6">Bring the Healing to Your Community</h2>
                    <p class="text-white/90 text-lg md:text-xl font-light leading-relaxed max-w-3xl mx-auto mb-10">
                        Leticia is available for private retreats, corporate wellness workshops, and public speaking
                        engagements. Her message of "Life as a Message" and the power of meditation has inspired groups to
                        find clarity and purpose.
                    </p>
                    <a href="mailto:leticia@soulhealing.com"
                        class="inline-block px-10 py-4 bg-white text-brand-teal rounded-full font-medium hover:bg-gray-100 transition shadow-lg">
                        Inquire About Private Events
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- 4. Newsletter -->
    <section class="py-20 px-6 bg-stone-50 border-t border-gray-100">
        <div class="container mx-auto text-center max-w-2xl">
            <h2 class="text-3xl font-light text-gray-900 mb-4 font-serif">Be the First to Know.</h2>
            <p class="text-gray-600 font-light leading-relaxed mb-8">
                Our retreats are intimate and spots fill up quickly. Join our inner circle to receive early-bird invitations
                and exclusive details about our next sacred gathering.
            </p>

            <form class="flex flex-col md:flex-row gap-4">
                <input type="email" placeholder="Enter your email"
                    class="w-full px-6 py-4 rounded-full border border-gray-200 focus:outline-none focus:border-brand-teal focus:ring-1 focus:ring-brand-teal">
                <button type="submit"
                    class="px-8 py-4 bg-gray-900 text-white rounded-full font-medium hover:bg-gray-800 transition whitespace-nowrap">
                    Keep Me Updated
                </button>
            </form>
        </div>
    </section>
@endsection