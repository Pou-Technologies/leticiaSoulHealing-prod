<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

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

<body class="font-sans text-gray-900 antialiased bg-gray-50">
    <div class="min-h-screen flex flex-col sm:justify-center items-center pt-6 sm:pt-0">
        <div>
            <a href="{{ url('/') }}">
                <img src="{{ asset('images/logo.png') }}" alt="Leticia Soul Healing" class="h-24 w-auto drop-shadow-sm">
            </a>
        </div>

        <div
            class="w-full sm:max-w-md mt-6 px-10 py-10 bg-white shadow-xl overflow-hidden sm:rounded-[2rem] border border-gray-100">
            {{ $slot }}
        </div>

        <div class="mt-8 text-center text-gray-400 text-sm font-light">
            &copy; {{ date('Y') }} Leticia Soul Healing.
        </div>
    </div>
</body>

</html>