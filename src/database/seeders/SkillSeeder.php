<?php

namespace Database\Seeders;

use App\Models\Skill;
use Illuminate\Database\Seeder;

class SkillSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $skills = [
            [
                'name' => 'Laravel',
                'level' => 90,
            ],
            [
                'name' => 'Filament',
                'level' => 85,
            ],
            [
                'name' => 'Livewire',
                'level' => 80,
            ],
            [
                'name' => 'Docker',
                'level' => 75,
            ],
        ];

        foreach ($skills as $skill) {
            Skill::create($skill);
        }
    }
}