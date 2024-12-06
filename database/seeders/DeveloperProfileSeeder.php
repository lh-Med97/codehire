<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\DeveloperProfile;
use App\Models\User;

class DeveloperProfileSeeder extends Seeder
{
    public function run(): void
    {
        $johnDev = User::where('email', 'john@developer.com')->first();
        $sarahDev = User::where('email', 'sarah@coder.com')->first();

        // John's Profile
        DeveloperProfile::create([
            'user_id' => $johnDev->id,
            'summary' => 'Full-stack developer with 5 years of experience building scalable web applications. Passionate about clean code and modern development practices.',
            'skills' => json_encode([
                'Languages' => ['PHP', 'JavaScript', 'Python', 'SQL'],
                'Frameworks' => ['Laravel', 'Vue.js', 'React', 'Express.js'],
                'Tools' => ['Git', 'Docker', 'AWS', 'Redis']
            ]),
            'experience' => json_encode([
                [
                    'title' => 'Senior Developer',
                    'company' => 'Web Solutions Inc',
                    'duration' => '2020-2023',
                    'description' => 'Led development of enterprise web applications using Laravel and Vue.js'
                ],
                [
                    'title' => 'Full Stack Developer',
                    'company' => 'Tech Startup',
                    'duration' => '2018-2020',
                    'description' => 'Built and maintained multiple client projects using MERN stack'
                ]
            ]),
            'education' => json_encode([
                [
                    'degree' => 'B.S. Computer Science',
                    'institution' => 'Tech University',
                    'year' => '2018'
                ]
            ]),
            'certifications' => json_encode([
                'AWS Certified Developer',
                'Laravel Certified Developer',
                'MongoDB Certified Developer'
            ]),
            'github_url' => 'https://github.com/johndeveloper',
            'linkedin_url' => 'https://linkedin.com/in/johndeveloper',
            'portfolio_url' => 'https://johndeveloper.com',
            'preferred_work_type' => 'Full-time, Contract',
            'expected_salary' => 140000,
            'is_available' => true
        ]);

        // Sarah's Profile
        DeveloperProfile::create([
            'user_id' => $sarahDev->id,
            'summary' => 'Backend developer with expertise in Python and Django. Strong focus on building efficient and maintainable APIs and microservices.',
            'skills' => json_encode([
                'Languages' => ['Python', 'JavaScript', 'SQL', 'Go'],
                'Frameworks' => ['Django', 'FastAPI', 'Flask', 'Express.js'],
                'Tools' => ['PostgreSQL', 'Redis', 'Docker', 'Kubernetes']
            ]),
            'experience' => json_encode([
                [
                    'title' => 'Backend Developer',
                    'company' => 'Data Systems Corp',
                    'duration' => '2019-2023',
                    'description' => 'Developed and maintained high-performance APIs and microservices'
                ],
                [
                    'title' => 'Python Developer',
                    'company' => 'AI Solutions',
                    'duration' => '2017-2019',
                    'description' => 'Built machine learning pipelines and data processing systems'
                ]
            ]),
            'education' => json_encode([
                [
                    'degree' => 'M.S. Software Engineering',
                    'institution' => 'State University',
                    'year' => '2017'
                ],
                [
                    'degree' => 'B.S. Computer Science',
                    'institution' => 'State University',
                    'year' => '2015'
                ]
            ]),
            'certifications' => json_encode([
                'Google Cloud Professional Developer',
                'Django Certified Developer',
                'AWS Solutions Architect'
            ]),
            'github_url' => 'https://github.com/sarahcoder',
            'linkedin_url' => 'https://linkedin.com/in/sarahcoder',
            'portfolio_url' => 'https://sarahcoder.dev',
            'preferred_work_type' => 'Full-time',
            'expected_salary' => 155000,
            'is_available' => true
        ]);
    }
}
