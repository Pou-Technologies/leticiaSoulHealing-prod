<x-app-layout>

    <div class="py-12 bg-gray-50 min-h-screen">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">

            <!-- Welcome Header -->
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-[2rem] mb-10 border border-gray-100 relative">
                <div
                    class="absolute top-0 right-0 w-64 h-64 bg-brand-teal/5 rounded-full blur-3xl -mr-16 -mt-16 pointer-events-none">
                </div>
                <div class="p-8 md:p-12 relative z-10">
                    <h2 class="text-3xl font-serif text-gray-900 mb-2">Welcome back, {{ Auth::user()->name }}</h2>
                    <p class="text-gray-500 font-light">Continue your journey of healing and transformation.</p>
                </div>
            </div>

            <div class="grid grid-cols-1 lg:grid-cols-3 gap-8">

                <!-- Main Content (Left Column) -->
                <div class="lg:col-span-2 space-y-8">

                    <!-- Section 1: My Courses -->
                    <div class="bg-white overflow-hidden shadow-sm sm:rounded-[2rem] border border-gray-100">
                        <div class="p-8">
                            <div class="flex items-center justify-between mb-6">
                                <h3 class="text-xl font-serif text-gray-900">My Courses</h3>
                                <a href="{{ route('courses') }}"
                                    class="text-brand-teal text-sm font-medium hover:underline">Browse All</a>
                            </div>

                            @if(auth()->user()->courses->count() > 0)
                                <div class="grid grid-cols-1 gap-6">
                                    @foreach(auth()->user()->courses as $course)
                                        <div class="flex items-center gap-6 p-4 rounded-2xl bg-gray-50 border border-gray-100">
                                            <div
                                                class="w-24 h-24 flex-shrink-0 bg-gray-200 rounded-xl overflow-hidden relative">
                                                <img src="{{ $course->image_url }}" alt="{{ $course->title }}"
                                                    class="w-full h-full object-cover">
                                            </div>
                                            <div>
                                                <h4 class="text-lg font-serif text-gray-900 mb-1">{{ $course->title }}</h4>
                                                <a href="#" class="text-sm text-brand-teal font-medium hover:underline">Continue
                                                    Learning &rarr;</a>
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                            @else
                                <!-- Empty State -->
                                <div class="text-center py-10 bg-gray-50 rounded-2xl border border-dashed border-gray-200">
                                    <div
                                        class="w-16 h-16 bg-white rounded-full flex items-center justify-center mx-auto mb-4 shadow-sm text-gray-400">
                                        <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                                                d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253">
                                            </path>
                                        </svg>
                                    </div>
                                    <h4 class="text-gray-900 font-medium mb-1">No active courses</h4>
                                    <p class="text-gray-500 text-sm font-light mb-4">You haven't enrolled in any programs
                                        yet.</p>
                                    <a href="{{ route('courses') }}"
                                        class="inline-block px-6 py-2 bg-gray-900 text-white rounded-full text-sm hover:bg-gray-800 transition">
                                        Explore Programs
                                    </a>
                                </div>
                            @endif
                        </div>
                    </div>

                    <!-- Section 2: Payments / Order History -->
                    <div class="bg-white overflow-hidden shadow-sm sm:rounded-[2rem] border border-gray-100">
                        <div class="p-8">
                            <div class="flex items-center justify-between mb-6">
                                <h3 class="text-xl font-serif text-gray-900">Recent Transactions</h3>
                                <span class="text-gray-400 text-sm">Last 30 days</span>
                            </div>

                            <!-- Using manual transactions for now since we aren't storing them in a dedicated table yet beyond pivot -->
                            <!-- In a full implementation, we'd query Cashier's receipts or a custom Order model -->
                            @if(auth()->user()->courses->count() > 0)
                                <div class="space-y-4">
                                    @foreach(auth()->user()->courses->take(3) as $course)
                                        <div class="flex items-center justify-between p-4 bg-gray-50 rounded-xl">
                                            <div class="flex items-center gap-4">
                                                <div
                                                    class="w-10 h-10 bg-white rounded-full flex items-center justify-center text-green-500 shadow-sm">
                                                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                            d="M5 13l4 4L19 7"></path>
                                                    </svg>
                                                </div>
                                                <div>
                                                    <p class="text-gray-900 font-medium text-sm">{{ $course->title }}</p>
                                                    <p class="text-gray-400 text-xs">{{ $course->created_at->format('M d, Y') }}
                                                    </p>
                                                </div>
                                            </div>
                                            <span class="text-gray-900 font-medium">${{ $course->price }}</span>
                                        </div>
                                    @endforeach
                                </div>
                            @else
                                <div class="flex flex-col gap-4">
                                    <div class="flex items-center justify-between p-4 bg-gray-50 rounded-xl">
                                        <div class="flex items-center gap-4">
                                            <div
                                                class="w-10 h-10 bg-white rounded-full flex items-center justify-center text-gray-400">
                                                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                                                        d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z">
                                                    </path>
                                                </svg>
                                            </div>
                                            <div>
                                                <p class="text-gray-900 font-medium text-sm">No transactions found</p>
                                                <p class="text-gray-400 text-xs">Your purchase history will appear here.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endif
                        </div>
                    </div>

                </div>

                <!-- Sidebar (Right Column) -->
                <div class="space-y-8">

                    <!-- Section 3: Virtual Call / Calendar -->
                    <div
                        class="bg-brand-teal text-white overflow-hidden shadow-[0_20px_50px_rgba(38,160,163,0.3)] sm:rounded-[2rem] relative">
                        <div class="absolute top-0 right-0 w-32 h-32 bg-white/10 rounded-full blur-2xl -mr-10 -mt-10">
                        </div>
                        <div
                            class="absolute bottom-0 left-0 w-32 h-32 bg-brand-gold/20 rounded-full blur-2xl -ml-10 -mb-10">
                        </div>

                        <div class="p-8 text-center relative z-10">
                            <div
                                class="w-16 h-16 bg-white/20 rounded-full flex items-center justify-center mx-auto mb-4 backdrop-blur-sm">
                                <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                                        d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z">
                                    </path>
                                </svg>
                            </div>
                            <h3 class="text-2xl font-serif mb-2">Book a Session</h3>
                            <p class="text-white/80 font-light text-sm mb-8">
                                Connect with Leticia for a personalized 1:1 healing session or consultation.
                            </p>
                            <a href="#"
                                class="block w-full py-3 bg-white text-brand-teal rounded-xl font-medium hover:bg-gray-100 transition shadow-lg">
                                Schedule Now
                            </a>
                        </div>
                    </div>

                    <!-- Quick Support -->
                    <div class="bg-white overflow-hidden shadow-sm sm:rounded-[2rem] border border-gray-100 p-8">
                        <h4 class="text-gray-900 font-medium mb-4">Need Help?</h4>
                        <p class="text-gray-500 font-light text-sm mb-6">
                            If you have questions about your account or courses, our support team is here.
                        </p>
                        <a href="{{ route('contact') }}"
                            class="text-brand-teal text-sm font-medium hover:underline">Contact Support &rarr;</a>
                    </div>

                </div>

            </div>
        </div>
    </div>
</x-app-layout>