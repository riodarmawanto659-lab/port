<?php

namespace Database\Seeders;

use App\Models\Contact;
use Illuminate\Database\Seeder;

class ContactSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Contact::create([
            'name' => 'John Doe',

            'email' => 'john@example.com',

            'subject' => 'Collaboration',

            'message' => 'Hello, I want to collaborate with you.',

            'is_read' => false,
        ]);
    }
}