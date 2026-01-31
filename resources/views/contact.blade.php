@extends('layouts.web')

@section('content')
    <!-- 1. Page Header (Intro) -->
    <section class="relative pt-32 pb-20 md:pt-48 md:pb-32 px-6 bg-white border-b border-gray-100">
        <div class="container mx-auto text-center max-w-4xl">
            <h1 class="text-4xl md:text-6xl font-light text-gray-900 mb-6 font-serif">
                Get in Touch
            </h1>
            <div class="w-24 h-1 bg-brand-gold mx-auto mb-8 rounded-full"></div>
            <p class="text-xl md:text-2xl text-gray-600 font-light leading-relaxed">
                Have a question or ready to start your journey? We are here to listen.
            </p>
        </div>
    </section>

    <!-- 2. Contact Content -->
    <section class="py-20 md:py-32 px-6 bg-gray-50">
        <div class="container mx-auto max-w-6xl">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 lg:gap-24">

                <!-- Contact Info -->
                <div class="flex flex-col justify-center">
                    <h2 class="text-3xl font-light text-gray-900 mb-8 font-serif">Connect with Us</h2>
                    <p class="text-gray-600 font-light leading-relaxed mb-10 text-lg">
                        Whether you are interested in a session, a program, or just want to verify if this path is right for
                        you, feel free to reach out. Leticia reads every message personally.
                    </p>

                    <div class="space-y-8">
                        <div class="flex items-start">
                            <div
                                class="w-12 h-12 bg-white rounded-full flex items-center justify-center shadow-sm text-brand-teal flex-shrink-0 mr-6">
                                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                                        d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z">
                                    </path>
                                </svg>
                            </div>
                            <div>
                                <h3 class="text-gray-900 font-medium mb-1">Email Us</h3>
                                <a href="mailto:leticia@soulhealing.com"
                                    class="text-gray-600 font-light hover:text-brand-teal transition">leticia@soulhealing.com</a>
                            </div>
                        </div>

                        <div class="flex items-start">
                            <div
                                class="w-12 h-12 bg-white rounded-full flex items-center justify-center shadow-sm text-brand-teal flex-shrink-0 mr-6">
                                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                                        d="M21 12a9 9 0 01-9 9m9-9a9 9 0 00-9-9m9 9H3m9 9a9 9 0 01-9-9m9 9c1.657 0 3-4.03 3-9s-1.343-9-3-9m0 18c-1.657 0-3-4.03-3-9s1.343-9 3-9m-9 9a9 9 0 019-9">
                                    </path>
                                </svg>
                            </div>
                            <div>
                                <h3 class="text-gray-900 font-medium mb-1">Online Sessions</h3>
                                <p class="text-gray-600 font-light">Available Worldwide via Zoom</p>
                            </div>
                        </div>

                        <div class="flex items-start">
                            <div
                                class="w-12 h-12 bg-white rounded-full flex items-center justify-center shadow-sm text-brand-teal flex-shrink-0 mr-6">
                                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                                        d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                </svg>
                            </div>
                            <div>
                                <h3 class="text-gray-900 font-medium mb-1">Working Hours</h3>
                                <p class="text-gray-600 font-light">Mon - Fri: 9:00 AM - 5:00 PM EST</p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Contact Form -->
                <div class="bg-white p-8 md:p-12 rounded-[2.5rem] shadow-lg border border-gray-100 relative">

                    @if(session('success'))
                        <div
                            class="absolute inset-0 bg-white rounded-[2.5rem] z-10 flex flex-col items-center justify-center text-center p-12 animate-in fade-in duration-500">
                            <div class="w-20 h-20 bg-green-50 rounded-full flex items-center justify-center mb-6">
                                <svg class="w-10 h-10 text-green-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7">
                                    </path>
                                </svg>
                            </div>
                            <h3 class="text-2xl font-serif text-gray-900 mb-4">Thank You!</h3>
                            <p class="text-gray-600 font-light leading-relaxed mb-8">
                                {{ session('success') }}
                            </p>
                            <a href="{{ route('contact') }}" class="text-brand-teal font-medium hover:underline">Send another
                                message</a>
                        </div>
                    @endif

                    <h3 class="text-2xl font-serif text-gray-900 mb-8">Send a Message</h3>

                    <form action="{{ route('contact.submit') }}" method="POST" class="space-y-6">
                        @csrf

                        <div>
                            <label for="name" class="block text-sm font-medium text-gray-700 mb-2">Your Name</label>
                            <input type="text" id="name" name="name" required
                                class="w-full px-6 py-4 bg-gray-50 border border-gray-200 rounded-2xl focus:outline-none focus:border-brand-teal focus:ring-1 focus:ring-brand-teal">
                        </div>

                        <div>
                            <label for="email" class="block text-sm font-medium text-gray-700 mb-2">Your Email</label>
                            <input type="email" id="email" name="email" required
                                class="w-full px-6 py-4 bg-gray-50 border border-gray-200 rounded-2xl focus:outline-none focus:border-brand-teal focus:ring-1 focus:ring-brand-teal">
                        </div>

                        <div>
                            <label for="message" class="block text-sm font-medium text-gray-700 mb-2">Your Message</label>
                            <textarea id="message" name="message" rows="5" required
                                class="w-full px-6 py-4 bg-gray-50 border border-gray-200 rounded-2xl focus:outline-none focus:border-brand-teal focus:ring-1 focus:ring-brand-teal"></textarea>
                        </div>

                        <button type="submit"
                            class="w-full py-4 bg-brand-teal text-white rounded-2xl font-medium hover:bg-opacity-90 transition shadow-lg shadow-brand-teal/20">
                            Send Message
                        </button>
                    </form>
                </div>

            </div>
        </div>
    </section>
@endsection