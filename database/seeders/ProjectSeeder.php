<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Project;

class ProjectSeeder extends Seeder
{
    public function run(): void
    {
        $projects = [
            [
                'title' => 'Music Recommendation System',
                'caption' => null,
                'description' => 'A web-based music recommendation system that helps users discover songs based on their preferred genre, mood, activity, and audio characteristics. Uses content-based filtering and cosine similarity to generate personalized recommendations.',
                'tags' => ['HTML', 'CSS', 'JS', 'Python', 'Pandas', 'NumPy'],
                'image' => 'music-recommendation.jpg',
                'code' => 'https://github.com/AbeerLA/Music-Recommendation-System',
                'demo' => 'https://music-recommendation-system-qybp69ulz-abeerlas-projects.vercel.app',
            ],
            [
                'title' => 'AI Snake Game',
                'caption' => 'Hand Gesture Controlled Game',
                'description' => 'An interactive Snake game controlled by real-time hand gestures. Uses webcam-based hand tracking to let players control the snake using their index finger.',
                'tags' => ['Python', 'OpenCV', 'MediaPipe', 'CVZone'],
                'image' => 'snakegame.png',
                'code' => 'https://github.com/AbeerLA/AI-Snake-Game',
                'demo' => null,
            ],
            [
                'title' => 'Online Shop',
                'caption' => 'E-Commerce Website',
                'description' => 'A responsive e-commerce website that provides an online shopping experience, allowing users to explore products through a clean and user-friendly interface.',
                'tags' => ['HTML', 'CSS', 'JavaScript'],
                'image' => 'onlineshop.png',
                'code' => 'https://github.com/AbeerLA/Online-Shop',
                'demo' => 'https://beamish-shortbread-0decc8.netlify.app',
            ],
            [
                'title' => 'Jobzy',
                'caption' => 'Job Recruitment Application UI/UX',
                'description' => 'A job recruitment application designed in Figma to connect job seekers with employment opportunities through an intuitive and user-friendly interface.',
                'tags' => ['UI/UX Design', 'Figma', 'Prototyping'],
                'image' => 'jobzy.png',
                'code' => null,
                'demo' => 'https://www.figma.com/design/kAM4Ha8cbDNXP9WLnmtT9y/Jobzy?node-id=0-1&t=TpA34Lb8VlniAUIt-1',
            ],
        ];

        foreach ($projects as $project) {
            Project::create($project);
        }
    }
}