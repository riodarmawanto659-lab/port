<?php

namespace Database\Seeders;

use App\Models\Profile;
use Illuminate\Database\Seeder;

class ProfileSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Profile::create([
            'name' => 'Rio Darmawanto',
            'bio' => 'Fullstack Developer Laravel & Filament',

            'email' => 'rioganteng@gmail.com',
            'phone' => '089602683294',

            'address' => 'Indonesia',

            'github' => 'https://github.com/riodarmawanto659-lab',
            'linkedin' => 'https://linkedin.com/in/username',
        ]);
    }
}