<x-app-layout>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <h2 class="text-2xl font-semibold mb-6">Post a New Job</h2>

                    <form action="{{ route('jobs.store') }}" method="POST" class="space-y-6">
                        @csrf

                        <div>
                            <x-input-label for="title" value="Job Title" />
                            <x-text-input id="title" name="title" type="text" class="mt-1 block w-full" :value="old('title')" required autofocus />
                            <x-input-error class="mt-2" :messages="$errors->get('title')" />
                        </div>

                        <div>
                            <x-input-label for="company" value="Company Name" />
                            <x-text-input id="company" name="company" type="text" class="mt-1 block w-full" :value="old('company')" required />
                            <x-input-error class="mt-2" :messages="$errors->get('company')" />
                        </div>

                        <div>
                            <x-input-label for="location" value="Location" />
                            <x-text-input id="location" name="location" type="text" class="mt-1 block w-full" :value="old('location')" required />
                            <x-input-error class="mt-2" :messages="$errors->get('location')" />
                        </div>

                        <div>
                            <x-input-label for="salary_range" value="Salary Range" />
                            <x-text-input id="salary_range" name="salary_range" type="text" class="mt-1 block w-full" :value="old('salary_range')" required placeholder="e.g. $80,000 - $100,000" />
                            <x-input-error class="mt-2" :messages="$errors->get('salary_range')" />
                        </div>

                        <div>
                            <x-input-label for="type" value="Employment Type" />
                            <select id="type" name="type" class="mt-1 block w-full border-gray-300 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 focus:border-indigo-500 dark:focus:border-indigo-600 focus:ring-indigo-500 dark:focus:ring-indigo-600 rounded-md shadow-sm" required>
                                <option value="">Select Type</option>
                                <option value="Full-time" {{ old('type') === 'Full-time' ? 'selected' : '' }}>Full-time</option>
                                <option value="Part-time" {{ old('type') === 'Part-time' ? 'selected' : '' }}>Part-time</option>
                                <option value="Contract" {{ old('type') === 'Contract' ? 'selected' : '' }}>Contract</option>
                                <option value="Freelance" {{ old('type') === 'Freelance' ? 'selected' : '' }}>Freelance</option>
                            </select>
                            <x-input-error class="mt-2" :messages="$errors->get('type')" />
                        </div>

                        <div>
                            <x-input-label for="description" value="Job Description" />
                            <textarea id="description" name="description" rows="6" class="mt-1 block w-full border-gray-300 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 focus:border-indigo-500 dark:focus:border-indigo-600 focus:ring-indigo-500 dark:focus:ring-indigo-600 rounded-md shadow-sm" required>{{ old('description') }}</textarea>
                            <x-input-error class="mt-2" :messages="$errors->get('description')" />
                        </div>

                        <div class="flex items-center gap-4">
                            <x-primary-button>Post Job</x-primary-button>
                            <a href="{{ route('jobs.index') }}" class="inline-flex items-center px-4 py-2 bg-gray-800 dark:bg-gray-200 border border-transparent rounded-md font-semibold text-xs text-white dark:text-gray-800 uppercase tracking-widest hover:bg-gray-700 dark:hover:bg-white focus:bg-gray-700 dark:focus:bg-white active:bg-gray-900 dark:active:bg-gray-300 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 dark:focus:ring-offset-gray-800 transition ease-in-out duration-150">
                                Cancel
                            </a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
