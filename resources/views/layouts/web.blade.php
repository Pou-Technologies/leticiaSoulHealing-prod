<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ config('app.name', 'Leticia Soul Healing') }}</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Outfit:wght@100;300;400;500;700&family=Playfair+Display:ital,wght@0,400;0,600;1,400&display=swap"
        rel="stylesheet">

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="font-sans text-gray-900 antialiased">
    <div class="min-h-screen flex flex-col">
        <!-- Navbar -->
        <nav class="absolute top-0 left-0 w-full z-10 p-6">
            <div class="container mx-auto flex justify-between items-center">
                <!-- Logo -->
                <div class="flex items-center">
                    <a href="{{ url('/') }}">
                        <img src="{{ asset('images/logo.png') }}" alt="Leticia Soul Healing" class="h-20 w-auto">
                    </a>
                </div>

                <!-- Navigation Links (Desktop) -->
                <div class="hidden md:flex space-x-8 text-sm font-medium tracking-wide">
                    <a href="{{ route('about') }}" class="text-gray-700 hover:text-brand-teal transition">About</a>
                    <a href="{{ route('services') }}"
                        class="text-gray-700 hover:text-brand-teal transition">Services</a>
                    <a href="{{ route('courses') }}" class="text-gray-700 hover:text-brand-teal transition">Courses</a>
                    <a href="{{ route('retreats') }}"
                        class="text-gray-700 hover:text-brand-teal transition">Retreats</a>
                    <a href="{{ route('blog') }}" class="text-gray-700 hover:text-brand-teal transition">Blog</a>
                    <a href="{{ route('contact') }}" class="text-gray-700 hover:text-brand-teal transition">Contact</a>
                </div>
                <div class="flex items-center space-x-4">
                    @auth
                        <a href="{{ url('/dashboard') }}"
                            class="text-sm text-gray-700 hover:text-brand-teal transition">Dashboard</a>
                    @else
                        <a href="{{ route('login') }}" class="text-sm text-gray-700 hover:text-brand-teal transition">Log
                            in</a>
                        <a href="{{ route('register') }}"
                            class="px-5 py-2 border border-brand-gold text-brand-gold rounded-full text-sm hover:bg-brand-gold hover:text-white transition duration-300">
                            Join
                        </a>
                    @endauth
                </div>
            </div>
        </nav>

        <!-- Page Content -->
        <main class="flex-grow">
            @yield('content')
        </main>

        <!-- Footer -->
        <footer class="bg-gray-900 text-white pt-20 pb-10 px-6">
            <div class="container mx-auto">
                <div class="grid grid-cols-1 md:grid-cols-3 gap-12 lg:gap-16 mb-16">
                    <!-- Column 1: Brand & Soul -->
                    <div class="space-y-6">
                        <div class="flex items-center space-x-3">
                            <span class="text-2xl font-serif text-white tracking-widest uppercase">Leticia Soul
                                Healing</span>
                        </div>
                        <p class="text-gray-400 font-light leading-relaxed max-w-sm">
                            "We are all born with the capacity to heal ourselves."
                        </p>
                        <p class="text-gray-500 text-sm">
                            Rooted in love, compassion, and integrity.
                        </p>
                        <!-- Social Icons -->
                        <div class="flex space-x-5 pt-2">
                            <a href="#" class="text-gray-400 hover:text-brand-gold transition duration-300">
                                <span class="sr-only">Instagram</span>
                                <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24">
                                    <path
                                        d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zm0-2.163c-3.259 0-3.667.014-4.947.072-4.358.2-6.78 2.618-6.98 6.98-.059 1.281-.073 1.689-.073 4.948 0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98-1.281-.059-1.69-.073-4.949-.073zm0 5.838c-3.403 0-6.162 2.759-6.162 6.162s2.759 6.163 6.162 6.163 6.162-2.759 6.162-6.163c0-3.403-2.759-6.162-6.162-6.162zm0 10.162c-2.209 0-4-1.79-4-4 0-2.209 1.791-4 4-4s4 1.791 4 4c0 2.21-1.791 4-4 4zm6.406-11.845c-.796 0-1.441.645-1.441 1.44s.645 1.44 1.441 1.44c.795 0 1.439-.645 1.439-1.44s-.644-1.44-1.439-1.44z" />
                                </svg>
                            </a>
                            <a href="#" class="text-gray-400 hover:text-brand-gold transition duration-300">
                                <span class="sr-only">Facebook</span>
                                <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24">
                                    <path
                                        d="M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.47h3.047V9.43c0-3.007 1.791-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.47h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z" />
                                </svg>
                            </a>
                            <a href="#" class="text-gray-400 hover:text-brand-gold transition duration-300">
                                <span class="sr-only">LinkedIn</span>
                                <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24">
                                    <path
                                        d="M19 0h-14c-2.761 0-5 2.239-5 5v14c0 2.761 2.239 5 5 5h14c2.762 0 5-2.239 5-5v-14c0-2.761-2.238-5-5-5zm-11 19h-3v-11h3v11zm-1.5-12.268c-.966 0-1.75-.79-1.75-1.764s.784-1.764 1.75-1.764 1.75.79 1.75 1.764-.783 1.764-1.75 1.764zm13.5 12.268h-3v-5.604c0-3.368-4-3.113-4 0v5.604h-3v-11h3v1.765c1.396-2.586 7-2.777 7 2.476v6.759z" />
                                </svg>
                            </a>
                        </div>
                    </div>

                    <!-- Column 2: Quick Links -->
                    <div class="md:pl-10">
                        <h3 class="text-white text-lg font-medium mb-6 uppercase tracking-wider">Navigation</h3>
                        <ul class="space-y-4 font-light text-gray-400">
                            <li><a href="{{ url('/') }}" class="hover:text-brand-gold transition duration-300">The
                                    Journey (Home)</a></li>
                            <li><a href="{{ url('/#about') }}" class="hover:text-brand-gold transition duration-300">The
                                    Story (About)</a></li>
                            <li><a href="{{ route('services') }}"
                                    class="hover:text-brand-gold transition duration-300">The Path (Services)</a></li>
                            <li><a href="#" class="hover:text-brand-gold transition duration-300">Connection
                                    (Contact)</a></li>
                        </ul>
                    </div>

                    <!-- Column 3: Contact Info & Newsletter -->
                    <div>
                        <h3 class="text-white text-lg font-medium mb-6 uppercase tracking-wider">Connect</h3>
                        <div class="space-y-4 mb-8 text-gray-400 font-light">
                            <p>Email: leticia@soulhealing.com</p>
                            <p>Online Worldwide</p>
                        </div>

                        <div class="bg-gray-800 p-6 rounded-2xl">
                            <h4 class="text-white mb-4 font-medium">Receive mindful insights</h4>
                            <form class="space-y-3">
                                <input type="email" placeholder="Your email"
                                    class="w-full px-4 py-3 bg-gray-900 border border-gray-700 text-white rounded-lg focus:outline-none focus:border-brand-teal focus:ring-1 focus:ring-brand-teal text-sm">
                                <button type="submit"
                                    class="w-full py-3 bg-brand-teal text-white rounded-lg font-medium hover:bg-opacity-90 transition text-sm uppercase tracking-wide">
                                    Subscribe
                                </button>
                            </form>
                        </div>
                    </div>
                </div>

                <!-- Bottom Bar -->
                <div
                    class="border-t border-gray-800 pt-8 flex flex-col md:flex-row justify-between items-center text-gray-500 text-sm font-light">
                    <p>&copy; 2026 Leticia Soul Healing. All rights reserved.</p>
                    <div class="flex space-x-6 mt-4 md:mt-0">
                        <a href="#" class="hover:text-white transition">Privacy Policy</a>
                        <a href="#" class="hover:text-white transition">Terms of Service</a>
                    </div>
                </div>
            </div>
        </footer>
    </div>
</body>

</html>