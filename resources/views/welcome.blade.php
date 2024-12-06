<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>{{ config('app.name', 'CodeHire') }} - Developer Job Platform</title>
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600,700&display=swap" rel="stylesheet" />
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="antialiased bg-gradient-to-br from-gray-50 to-gray-100 dark:from-gray-900 dark:to-gray-800" x-data="animations">
        <div class="min-h-screen" x-show="show" x-transition:enter="page-enter-active" x-transition:enter-start="page-enter">
            <!-- Navigation -->
            <nav class="animate-slide-in-left bg-white/80 dark:bg-gray-900/80 backdrop-blur-lg fixed w-full z-50 transition-all duration-300">
                <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                    <div class="flex justify-between h-16">
                        <div class="flex items-center">
                            <a href="/" class="text-2xl font-bold text-primary-600 hover:text-primary-500 transition-colors">
                                CodeHire
                            </a>
                        </div>
                        <div class="flex items-center space-x-4">
                            @auth
                                <a href="{{ url('/dashboard') }}" class="btn text-sm">Dashboard</a>
                            @else
                                <a href="{{ route('login') }}" class="text-gray-700 dark:text-gray-300 hover:text-primary-600 dark:hover:text-primary-500 transition-colors">Log in</a>
                                @if (Route::has('register'))
                                    <a href="{{ route('register') }}" class="btn inline-flex items-center px-4 py-2 border border-transparent rounded-md shadow-sm text-sm font-medium text-white bg-primary-600 hover:bg-primary-700">Register</a>
                                @endif
                            @endauth
                        </div>
                    </div>
                </div>
            </nav>

            <!-- Hero Section -->
            <header class="pt-28 pb-20 px-4 sm:px-6 lg:px-8">
                <div class="max-w-7xl mx-auto">
                    <div class="text-center animate-fade-in">
                        <h1 class="text-4xl sm:text-5xl lg:text-6xl font-bold text-gray-900 dark:text-white mb-6">
                            Find Your Next 
                            <span class="text-primary-600">Developer</span> 
                            Role
                        </h1>
                        <p class="text-lg sm:text-xl text-gray-600 dark:text-gray-300 mb-8 max-w-3xl mx-auto">
                            Connect with top tech companies and startups. Your dream developer job is just a click away.
                        </p>
                        <div class="flex justify-center gap-4">
                            <a href="{{ route('register') }}" class="btn-pulse inline-flex items-center px-6 py-3 border border-transparent rounded-lg shadow-sm text-base font-medium text-white bg-primary-600 hover:bg-primary-700">
                                Get Started
                                <svg class="ml-2 -mr-1 w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7l5 5m0 0l-5 5m5-5H6"/>
                                </svg>
                            </a>
                            <a href="#jobs" class="inline-flex items-center px-6 py-3 border border-gray-300 dark:border-gray-700 rounded-lg shadow-sm text-base font-medium text-gray-700 dark:text-gray-300 bg-white dark:bg-gray-800 hover:bg-gray-50 dark:hover:bg-gray-700">
                                Browse Jobs
                            </a>
                        </div>
                    </div>
                </div>
            </header>

            <!-- Features Section -->
            <section class="py-16 px-4 sm:px-6 lg:px-8 bg-white dark:bg-gray-900">
                <div class="max-w-7xl mx-auto">
                    <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                        <!-- Feature 1 -->
                        <div class="card hover-lift animate-on-scroll" data-stagger>
                            <div class="p-6">
                                <div class="size-12 rounded-full bg-primary-100 dark:bg-primary-900 flex items-center justify-center mb-4">
                                    <svg class="size-6 text-primary-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 13.255A23.931 23.931 0 0112 15c-3.183 0-6.22-.62-9-1.745M16 6V4a2 2 0 00-2-2h-4a2 2 0 00-2 2v2m4 6h.01M5 20h14a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/>
                                    </svg>
                                </div>
                                <h3 class="text-xl font-semibold mb-2 text-gray-900 dark:text-white">Top Tech Jobs</h3>
                                <p class="text-gray-600 dark:text-gray-300">Access exclusive job listings from leading tech companies and startups.</p>
                            </div>
                        </div>

                        <!-- Feature 2 -->
                        <div class="card hover-lift animate-on-scroll" data-stagger>
                            <div class="p-6">
                                <div class="size-12 rounded-full bg-primary-100 dark:bg-primary-900 flex items-center justify-center mb-4">
                                    <svg class="size-6 text-primary-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"/>
                                    </svg>
                                </div>
                                <h3 class="text-xl font-semibold mb-2 text-gray-900 dark:text-white">Verified Companies</h3>
                                <p class="text-gray-600 dark:text-gray-300">All employers are thoroughly vetted to ensure legitimate opportunities.</p>
                            </div>
                        </div>

                        <!-- Feature 3 -->
                        <div class="card hover-lift animate-on-scroll" data-stagger>
                            <div class="p-6">
                                <div class="size-12 rounded-full bg-primary-100 dark:bg-primary-900 flex items-center justify-center mb-4">
                                    <svg class="size-6 text-primary-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"/>
                                    </svg>
                                </div>
                                <h3 class="text-xl font-semibold mb-2 text-gray-900 dark:text-white">Quick Apply</h3>
                                <p class="text-gray-600 dark:text-gray-300">Apply to multiple jobs with your CodeHire profile in just one click.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <!-- Latest Jobs Section -->
            <section id="jobs" class="py-16 px-4 sm:px-6 lg:px-8">
                <div class="max-w-7xl mx-auto">
                    <h2 class="text-3xl font-bold text-gray-900 dark:text-white mb-8 animate-fade-in">Latest Developer Jobs</h2>
                    <div class="grid gap-6">
                        @foreach($jobs as $job)
                            @include('components.job-card', ['job' => $job])
                        @endforeach
                    </div>
                    <div class="text-center mt-8 animate-fade-in">
                        <a href="{{ route('jobs.index') }}" class="btn inline-flex items-center px-6 py-3 border border-transparent rounded-lg shadow-sm text-base font-medium text-white bg-primary-600 hover:bg-primary-700">
                            View All Jobs
                            <svg class="ml-2 -mr-1 w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/>
                            </svg>
                        </a>
                    </div>
                </div>
            </section>

            <!-- CTA Section -->
            <section class="py-16 px-4 sm:px-6 lg:px-8 bg-primary-600">
                <div class="max-w-7xl mx-auto text-center animate-fade-in">
                    <h2 class="text-3xl font-bold text-white mb-4">Ready to Find Your Next Opportunity?</h2>
                    <p class="text-lg text-primary-100 mb-8">Join thousands of developers who've found their dream jobs through CodeHire.</p>
                    <a href="{{ route('register') }}" class="inline-flex items-center px-6 py-3 border border-transparent rounded-lg shadow-sm text-base font-medium text-primary-600 bg-white hover:bg-primary-50">
                        Create Your Profile
                        <svg class="ml-2 -mr-1 w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7l5 5m0 0l-5 5m5-5H6"/>
                        </svg>
                    </a>
                </div>
            </section>

            <!-- Footer -->
            <footer class="py-12 px-4 sm:px-6 lg:px-8 bg-white dark:bg-gray-900">
                <div class="max-w-7xl mx-auto">
                    <div class="text-center animate-fade-in">
                        <p class="text-gray-500 dark:text-gray-400">&copy; {{ date('Y') }} {{ config('app.name') }}. All rights reserved.</p>
                    </div>
                </div>
            </footer>
        </div>
    </body>
</html>
