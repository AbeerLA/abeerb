<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\JournalEntry;

class JournalSeeder extends Seeder
{
    public function run(): void
    {
        $entries = [
            [
                'title' => 'Volunteering as an English Speaking Instructor',
                'category' => 'Community & Volunteering',
                'date' => '2024',
                'excerpt' => 'Helping beginner-level students build confidence in English through interactive speaking activities, simple conversations, and educational games.',
                'image' => 'English Speaking Class.jpg',
                'caption' => 'Teaching, Learning & Sharing',
            ],
            [
                'title' => 'International AI & Deep Learning Bootcamp 2026',
                'category' => 'Training & Learning',
                'date' => 'Jul 12–17, 2026',
                'excerpt' => 'Completed a 40-hour international bootcamp in Jakarta organized by the Indonesian Artificial Neural Network Society (IdNNS), exploring Artificial Intelligence and Deep Learning.',
                'image' => 'AIBC-certificate.jpg',
                'caption' => 'International AI & Deep Learning Bootcamp – 2026',
            ],
            [
                'title' => 'Third Place – FIRA Indonesia Open 2025',
                'category' => 'Achievement',
                'date' => 'Jun 2025',
                'excerpt' => 'Achieved 3rd Place in the Autonomous Car Simulation category at an international robotics competition, developing Python-based vehicle control and obstacle detection using OpenCV.',
                'image' => 'robotics-award.png',
                'caption' => 'Autonomous Car Simulation – 3rd Place',
            ],
        ];

        foreach ($entries as $entry) {
            JournalEntry::create($entry);
        }
    }
}