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
            'name' => 'Rio Darmawanto',
            'email' => 'idoyrio37@gmail.com',
            'subject' => 'Kerjasama Project',
            'message' => 'Halo, saya tertarik bekerja sama.',
        ]);

        Contact::create([
            'name' => 'rio',
            'email' => 'idoyrio37@gmail.com',
            'subject' => '089602683294',
            'message' => 'tugas uts',
        ]);
    }
}