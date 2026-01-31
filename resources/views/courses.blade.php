@extends('layouts.web')

@section('content')
<!-- 1. Page Header (Intro) -->
<section class="relative pt-32 pb-20 md:pt-48 md:pb-32 px-6 bg-white border-b border-gray-100">
    <div class="container mx-auto text-center max-w-4xl">
        <h1 class="text-4xl md:text-6xl font-light text-gray-900 mb-6 font-serif">
            Transformational Programs
        </h1>
        <div class="w-24 h-1 bg-brand-gold mx-auto mb-8 rounded-full"></div>
        <p class="text-xl md:text-2xl text-gray-600 font-light leading-relaxed">
            Deepen your practice and accelerate your healing with our signature courses and immersive online
            experiences.
        </p>
    </div>
</section>

<!-- 2. Programs Grid -->
<section class="py-20 md:py-32 px-6 bg-gray-50">
    <div class="container mx-auto max-w-7xl">

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8 mb-16">

            @php
                // Simulate fetching from DB, but we probably should pass this from controller.
                // For now, let's use the layout view directly as requested, but linking to our seeded data.
                $courses = \App\Models\Course::all();
            @endphp

            @foreach($courses as $course)
            <div
                class="bg-white rounded-[2rem] overflow-hidden shadow-sm hover:shadow-lg transition duration-300 border border-gray-100 flex flex-col h-full">
                <div class="h-64 bg-gray-200 relative group overflow-hidden">
                    <img src="{{ $course->image_url }}" alt="{{ $course->title }}"
                        class="w-full h-full object-cover transition duration-700 group-hover:scale-105">
                    <div class="absolute inset-0 bg-brand-teal/0 group-hover:bg-brand-teal/10 transition duration-300">
                    </div>
                    <div
                        class="absolute top-4 right-4 bg-white/90 backdrop-blur-sm px-4 py-2 rounded-full text-brand-teal font-bold text-sm shadow-sm">
                        ${{ $course->price }}
                    </div>
                </div>
                <div class="p-8 flex flex-col flex-grow">
                    <h3 class="text-2xl font-serif text-gray-900 mb-4">{{ $course->title }}</h3>
                    <p class="text-gray-600 font-light text-sm leading-relaxed mb-6 flex-grow">
                        {{ $course->description }}
                    </p>

                    <div class="mt-auto pt-6 border-t border-gray-100">
                        @auth
                            @if(auth()->user()->courses->contains($course->id))
                                <button disabled
                                    class="w-full py-3 bg-gray-100 text-gray-500 rounded-xl font-medium cursor-not-allowed">
                                    Enrolled
                                </button>
                            @else
                                <a href="{{ route('checkout', $course->id) }}"
                                    class="block w-full text-center py-3 bg-brand-teal text-white rounded-xl font-medium hover:bg-opacity-90 transition shadow-lg shadow-brand-teal/20">
                                    Enroll Now
                                </a>
                            @endif
                        @else
                        <a href="{{ route('login') }}"
                            class="block w-full text-center py-3 bg-brand-teal text-white rounded-xl font-medium hover:bg-opacity-90 transition shadow-lg shadow-brand-teal/20">
                            Login to Enroll
                        </a>
                        @endif
                    </div>
                </div>
            </div>
            @endforeach

        </div>

        <!-- Closing Section -->
        <div
            class="text-center bg-white rounded-[3rem] p-12 md:p-20 shadow-xl border border-gray-100 max-w-5xl mx-auto relative overflow-hidden">
            <div class="absolute -top-24 -left-24 w-64 h-64 bg-brand-gold/10 rounded-full blur-3xl"></div>
            <div class="absolute -bottom-24 -right-24 w-64 h-64 bg-brand-teal/10 rounded-full blur-3xl"></div>

            <div class="relative z-10">
                <h2 class="text-3xl md:text-4xl font-serif text-gray-900 mb-6">Is this for me?</h2>
                <p class="text-xl text-gray-600 font-light leading-relaxed mb-10 max-w-2xl mx-auto">
                    If you are unsure which path is right for your current moment, let's connect. I offer a brief
                    discovery call to listen to your soul's needs.
                </p>
                <a href="{{ route('contact') }}"
                    class="inline-block px-10 py-4 border border-gray-900 text-gray-900 rounded-full font-medium hover:bg-gray-900 hover:text-white transition">
                    Schedule a Brief Intro Call
                </a>
            </div>
        </div>

    </div>
</section>
@endsection