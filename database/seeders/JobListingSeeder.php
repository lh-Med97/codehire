<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\JobListing;
use App\Models\User;

class JobListingSeeder extends Seeder
{
    public function run(): void
    {
        $techCorpUser = User::where('email', 'employer@techcorp.com')->first();
        $startupUser = User::where('email', 'hr@startup.com')->first();

        // Tech Corp Jobs
        JobListing::create([
            'user_id' => $techCorpUser->id,
            'title' => 'Senior Full Stack Developer',
            'description' => 'We are looking for an experienced Full Stack Developer to join our growing team. The ideal candidate will have strong experience with modern web technologies and a passion for building scalable applications.',
            'company_name' => 'Tech Corp',
            'location' => 'New York, NY (Hybrid)',
            'type' => 'full-time',
            'experience_level' => 'senior',
            'salary_min' => 120000,
            'salary_max' => 180000,
            'required_skills' => json_encode(['PHP', 'Laravel', 'Vue.js', 'MySQL', 'AWS']),
            'benefits' => json_encode([
                'Health Insurance',
                '401(k) matching',
                'Remote work options',
                'Professional development budget'
            ]),
            'is_active' => true
        ]);

        JobListing::create([
            'user_id' => $techCorpUser->id,
            'title' => 'DevOps Engineer',
            'description' => 'Looking for a DevOps Engineer to help us streamline our deployment processes and maintain our cloud infrastructure.',
            'company_name' => 'Tech Corp',
            'location' => 'Remote',
            'type' => 'full-time',
            'experience_level' => 'senior',
            'salary_min' => 100000,
            'salary_max' => 150000,
            'required_skills' => json_encode(['AWS', 'Docker', 'Kubernetes', 'CI/CD', 'Terraform']),
            'benefits' => json_encode([
                'Competitive salary',
                'Health benefits',
                'Flexible hours',
                'Remote work'
            ]),
            'is_active' => true
        ]);

        // Startup Inc Jobs
        JobListing::create([
            'user_id' => $startupUser->id,
            'title' => 'Frontend Developer',
            'description' => 'Join our fast-growing startup and help build the future of fintech. We need a talented Frontend Developer to create beautiful and responsive user interfaces.',
            'company_name' => 'Startup Inc',
            'location' => 'San Francisco, CA',
            'type' => 'full-time',
            'experience_level' => 'mid',
            'salary_min' => 90000,
            'salary_max' => 130000,
            'required_skills' => json_encode(['React', 'TypeScript', 'CSS3', 'HTML5', 'Redux']),
            'benefits' => json_encode([
                'Competitive equity package',
                'Health and dental insurance',
                'Unlimited PTO',
                'Gym membership'
            ]),
            'is_active' => true
        ]);

        JobListing::create([
            'user_id' => $startupUser->id,
            'title' => 'Backend Developer (Python)',
            'description' => 'Looking for a Backend Developer to help scale our fintech platform. Experience with Python and financial systems is a plus.',
            'company_name' => 'Startup Inc',
            'location' => 'Remote',
            'type' => 'contract',
            'experience_level' => 'senior',
            'salary_min' => 110000,
            'salary_max' => 160000,
            'required_skills' => json_encode(['Python', 'Django', 'PostgreSQL', 'Redis', 'API Design']),
            'benefits' => json_encode([
                'Flexible hours',
                'Remote work',
                'Learning budget',
                'Weekly team events'
            ]),
            'is_active' => true
        ]);
    }
}
