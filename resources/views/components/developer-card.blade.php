<div class="card hover-lift animate-on-scroll" data-stagger>
    <div class="p-6">
        <div class="flex items-start space-x-4">
            <div class="flex-shrink-0">
                <img class="h-12 w-12 rounded-full" src="https://ui-avatars.com/api/?name={{ urlencode($profile->user->name) }}&background=random" alt="{{ $profile->user->name }}">
            </div>
            <div class="flex-1">
                <h3 class="text-xl font-semibold text-gray-900 hover:text-primary-600 transition-base">
                    {{ $profile->user->name }}
                </h3>
                <p class="text-gray-600 mt-1">{{ $profile->preferred_work_type }}</p>
            </div>
            <div class="flex-shrink-0">
                @if($profile->is_available)
                    <span class="inline-flex items-center px-3 py-1 rounded-full text-sm font-medium bg-green-100 text-green-800">
                        Available
                    </span>
                @endif
            </div>
        </div>

        <div class="mt-4">
            <p class="text-gray-600">{{ $profile->summary }}</p>
        </div>

        <div class="mt-4">
            <h4 class="text-sm font-medium text-gray-900">Skills</h4>
            <div class="mt-2 flex flex-wrap gap-2">
                @foreach(json_decode($profile->skills)->Languages as $skill)
                    <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-blue-100 text-blue-800">
                        {{ $skill }}
                    </span>
                @endforeach
                @foreach(json_decode($profile->skills)->Frameworks as $framework)
                    <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-purple-100 text-purple-800">
                        {{ $framework }}
                    </span>
                @endforeach
            </div>
        </div>

        <div class="mt-6 flex flex-wrap gap-4">
            @if($profile->github_url)
                <a href="{{ $profile->github_url }}" target="_blank" class="text-gray-500 hover:text-gray-700 transition-base">
                    <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24">
                        <path fill-rule="evenodd" d="M12 2C6.477 2 2 6.477 2 12c0 4.42 2.865 8.17 6.839 9.49.5.092.682-.217.682-.482 0-.237-.008-.866-.013-1.7-2.782.604-3.369-1.34-3.369-1.34-.454-1.156-1.11-1.464-1.11-1.464-.908-.62.069-.608.069-.608 1.003.07 1.531 1.03 1.531 1.03.892 1.529 2.341 1.088 2.91.832.092-.647.35-1.088.636-1.338-2.22-.253-4.555-1.11-4.555-4.943 0-1.091.39-1.984 1.029-2.683-.103-.253-.446-1.27.098-2.647 0 0 .84-.269 2.75 1.025A9.564 9.564 0 0112 6.844c.85.004 1.705.115 2.504.337 1.909-1.294 2.747-1.025 2.747-1.025.546 1.377.202 2.394.1 2.647.64.699 1.028 1.592 1.028 2.683 0 3.842-2.339 4.687-4.566 4.935.359.309.678.919.678 1.852 0 1.336-.012 2.415-.012 2.743 0 .267.18.578.688.48C19.138 20.167 22 16.418 22 12c0-5.523-4.477-10-10-10z" clip-rule="evenodd"/>
                    </svg>
                </a>
            @endif
            @if($profile->linkedin_url)
                <a href="{{ $profile->linkedin_url }}" target="_blank" class="text-gray-500 hover:text-gray-700 transition-base">
                    <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24">
                        <path d="M19 0h-14c-2.761 0-5 2.239-5 5v14c0 2.761 2.239 5 5 5h14c2.762 0 5-2.239 5-5v-14c0-2.761-2.238-5-5-5zm-11 19h-3v-11h3v11zm-1.5-12.268c-.966 0-1.75-.79-1.75-1.764s.784-1.764 1.75-1.764 1.75.79 1.75 1.764-.783 1.764-1.75 1.764zm13.5 12.268h-3v-5.604c0-3.368-4-3.113-4 0v5.604h-3v-11h3v1.765c1.396-2.586 7-2.777 7 2.476v6.759z"/>
                    </svg>
                </a>
            @endif
            @if($profile->portfolio_url)
                <a href="{{ $profile->portfolio_url }}" target="_blank" class="text-gray-500 hover:text-gray-700 transition-base">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 12a9 9 0 01-9 9m9-9a9 9 0 00-9-9m9 9H3m9 9a9 9 0 01-9-9m9 9c1.657 0 3-4.03 3-9s-1.343-9-3-9m0 18c-1.657 0-3-4.03-3-9s1.343-9 3-9m-9 9a9 9 0 019-9"/>
                    </svg>
                </a>
            @endif
        </div>

        <div class="mt-6 flex justify-between items-center">
            <div class="text-gray-700">
                Expected: ${{ number_format($profile->expected_salary) }}
            </div>
            <a href="{{ route('developers.show', $profile) }}" 
               class="btn inline-flex items-center px-4 py-2 border border-transparent rounded-md shadow-sm text-sm font-medium text-white bg-primary-600 hover:bg-primary-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-primary-500">
                View Profile
                <svg class="ml-2 -mr-1 w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/>
                </svg>
            </a>
        </div>
    </div>
</div>
