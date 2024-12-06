<div class="card hover-lift animate-on-scroll" data-stagger>
    <div class="p-6">
        <div class="flex justify-between items-start">
            <div>
                <h3 class="text-xl font-semibold text-gray-900 hover:text-primary-600 transition-base">
                    {{ $job->title }}
                </h3>
                <p class="text-gray-600 mt-1">{{ $job->company_name }}</p>
            </div>
            <span class="inline-flex items-center px-3 py-1 rounded-full text-sm font-medium {{ $job->type === 'full-time' ? 'bg-green-100 text-green-800' : 'bg-blue-100 text-blue-800' }}">
                {{ ucfirst($job->type) }}
            </span>
        </div>

        <div class="mt-4">
            <div class="flex items-center text-gray-500 space-x-4">
                <div class="flex items-center">
                    <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/>
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"/>
                    </svg>
                    {{ $job->location }}
                </div>
                <div class="flex items-center">
                    <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"/>
                    </svg>
                    {{ ucfirst($job->experience_level) }}
                </div>
            </div>
        </div>

        <div class="mt-4">
            <p class="text-gray-600 line-clamp-2">{{ $job->description }}</p>
        </div>

        <div class="mt-4">
            <div class="flex flex-wrap gap-2">
                @foreach(json_decode($job->required_skills) as $skill)
                    <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-gray-100 text-gray-800">
                        {{ $skill }}
                    </span>
                @endforeach
            </div>
        </div>

        <div class="mt-6 flex justify-between items-center">
            <div class="text-gray-700">
                ${{ number_format($job->salary_min) }} - ${{ number_format($job->salary_max) }}
            </div>
            <a href="{{ route('jobs.show', $job) }}" 
               class="btn inline-flex items-center px-4 py-2 border border-transparent rounded-md shadow-sm text-sm font-medium text-white bg-primary-600 hover:bg-primary-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-primary-500">
                View Details
                <svg class="ml-2 -mr-1 w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/>
                </svg>
            </a>
        </div>
    </div>
</div>
