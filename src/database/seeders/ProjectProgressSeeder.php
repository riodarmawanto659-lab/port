<?php

namespace Database\Seeders;

use App\Models\Project;
use App\Models\ProjectProgress;
use Illuminate\Database\Seeder;

class ProjectProgressSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $project = Project::first();

        if (!$project) {
            return;
        }

        ProjectProgress::create([
            'project_id' => $project->id,

            'title' => 'UI Design',

            'description' => 'Finished designing homepage UI.',

            'progress_percent' => 50,

            'date' => now(),
        ]);

        ProjectProgress::create([
            'project_id' => $project->id,

            'title' => 'Backend Development',

            'description' => 'Completed CRUD using Filament.',

            'progress_percent' => 100,

            'date' => now(),
        ]);
    }
}