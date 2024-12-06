<x-app-layout>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="flex justify-between items-center mb-6">
                <h2 class="text-2xl font-semibold text-gray-900 dark:text-gray-100">Available Jobs</h2>
                @auth
                    <a href="{{ route('jobs.create') }}" class="inline-flex items-center px-4 py-2 bg-blue-600 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-blue-500 active:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2 dark:focus:ring-offset-gray-800 transition ease-in-out duration-150">
                        Post New Job
                    </a>
                @endauth
            </div>

            @if(session('success'))
                <div class="mb-6 bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative" role="alert">
                    <span class="block sm:inline">{{ session('success') }}</span>
                </div>
            @endif

            <div class="space-y-6">
                @forelse($jobs as $job)
                    <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg hover:shadow-md transition-shadow duration-300 ease-in-out">
                        <div class="p-6">
                            <div class="flex justify-between items-start">
                                <div>
                                    <h3 class="text-xl font-semibold text-gray-900 dark:text-gray-100">
                                        {{ $job->title }}
                                    </h3>
                                    <div class="mt-2 flex items-center text-gray-600 dark:text-gray-400">
                                        <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"></path>
                                        </svg>
                                        {{ $job->company }}
                                    </div>
                                </div>
                                <div class="flex items-center space-x-4">
                                    <span class="inline-flex items-center px-3 py-1 rounded-full text-sm font-medium {{ $job->type === 'Full-time' ? 'bg-green-100 text-green-800' : 'bg-blue-100 text-blue-800' }}">
                                        {{ $job->type }}
                                    </span>
                                </div>
                            </div>
                            <div class="mt-4 grid grid-cols-2 gap-4">
                                <div class="flex items-center text-gray-600 dark:text-gray-400">
                                    <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path>
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path>
                                    </svg>
                                    {{ $job->location }}
                                </div>
                                <div class="flex items-center text-gray-600 dark:text-gray-400">
                                    <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                    </svg>
                                    {{ $job->salary_range }}
                                </div>
                            </div>
                            <div class="mt-4 text-gray-600 dark:text-gray-400 line-clamp-2">
                                {{ Str::limit($job->description, 150) }}
                            </div>
                            <div class="mt-4 flex justify-end">
                                @auth
                                    <a href="{{ route('jobs.show', $job) }}" class="inline-flex items-center px-4 py-2 bg-blue-600 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-blue-500 active:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2 dark:focus:ring-offset-gray-800 transition ease-in-out duration-150">
                                        View Details →
                                    </a>
                                @else
                                    <div x-data="{ open: false }" class="relative">
                                        <button @click="open = true" class="inline-flex items-center px-4 py-2 bg-blue-600 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-blue-500 active:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2 dark:focus:ring-offset-gray-800 transition ease-in-out duration-150">
                                            View Details →
                                        </button>
                                        
                                        <!-- Auth Modal -->
                                        <div x-show="open" @click.away="open = false" class="absolute right-0 bottom-10 w-72 bg-white dark:bg-gray-800 rounded-lg shadow-lg p-4 z-50">
                                            <div class="text-center">
                                                <h4 class="text-lg font-semibold mb-2 text-gray-900 dark:text-gray-100">Sign in to view details</h4>
                                                <p class="text-sm text-gray-600 dark:text-gray-400 mb-4">Please login or create an account to view job details</p>
                                                <div class="space-y-2">
                                                    <a href="{{ route('login') }}" class="block w-full px-4 py-2 bg-blue-600 text-white rounded hover:bg-blue-700 transition-colors">
                                                        Login
                                                    </a>
                                                    <a href="{{ route('register') }}" class="block w-full px-4 py-2 bg-gray-200 text-gray-800 rounded hover:bg-gray-300 transition-colors">
                                                        Register
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @endauth
                            </div>
                        </div>
                    </div>
                @empty
                    <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                        <div class="p-6 text-gray-900 dark:text-gray-100 text-center">
                            <p class="text-lg">No job listings available at the moment.</p>
                            @auth
                                <a href="{{ route('jobs.create') }}" class="mt-4 inline-block text-blue-600 hover:text-blue-800 dark:text-blue-400 dark:hover:text-blue-300">
                                    Post the first job →
                                </a>
                            @endauth
                        </div>
                    </div>
                @endforelse
            </div>

            <div class="mt-6">
                {{ $jobs->links() }}
            </div>
        </div>
    </div>
</x-app-layout>
