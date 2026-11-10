<?php

namespace App\Http\Controllers;
use App\Models\Project;
use App\Models\JournalEntry;

class PortfolioController extends Controller
{
    public function home()
    {
        $metrics = [
            ['value' => '5+', 'label' => 'Years Exp.'],
            ['value' => '10+', 'label' => 'Tech Stacks'],
            ['value' => '100+', 'label' => 'Projects Done'],
        ];

        $skills = [
            ['name' => 'HTML5', 'icon' => 'devicon-html5-plain colored', 'level' => 90, 'accent' => 'sage'],
            ['name' => 'CSS3', 'icon' => 'devicon-css3-plain colored', 'level' => 85, 'accent' => 'sage'],
            ['name' => 'JavaScript', 'icon' => 'devicon-javascript-plain colored', 'level' => 80, 'accent' => 'sand'],
            ['name' => 'React', 'icon' => 'devicon-react-original colored', 'level' => 75, 'accent' => 'sage'],
            ['name' => 'Tailwind CSS', 'icon' => 'devicon-tailwindcss-original colored', 'level' => 85, 'accent' => 'sage'],
            ['name' => 'PHP', 'icon' => 'devicon-php-plain colored', 'level' => 75, 'accent' => 'sand'],
            ['name' => 'Laravel', 'icon' => 'devicon-laravel-original colored', 'level' => 70, 'accent' => 'sage'],
            ['name' => 'MySQL', 'icon' => 'devicon-mysql-original colored', 'level' => 65, 'accent' => 'sand'],
        ];
        // 'image' is optional: put files in public/images/projects/
                    $projects = Project::all()->map(function ($project) {
                return [
                    'title' => $project->title,
                    'caption' => $project->caption,
                    'description' => $project->description,
                    'tags' => $project->tags ?? [],
                    'image' => $project->image,
                    'code' => $project->code_url,
                    'demo' => $project->demo_url,
                ];
            })->toArray();

                    $journal = JournalEntry::all()->map(function ($entry) {
                return [
                    'title' => $entry->title,
                    'category' => $entry->category,
                    'date' => $entry->date,
                    'excerpt' => $entry->excerpt,
                    'image' => $entry->image,
                    'caption' => $entry->caption,
                ];
            })->toArray();

        return view('pages.home', compact('metrics', 'skills', 'projects', 'journal'));
    }
}