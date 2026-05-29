<?php

namespace Database\Seeders;

use App\Models\Project;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class ProjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Project::create([
            'title' => 'Portfolio Website',

            'slug' => Str::slug('Portfolio Website'),

            'description' => 'Dynamic portfolio website using Laravel Filament.',

            'tech_stack' => 'Laravel, Filament, Docker',

            'github_url' => 'https://github.com/username/project',

            'demo_url' => 'https://example.com',

            'status' => 'completed',

            'start_date' => now(),

            'end_date' => now(),
        ]);
    }
}