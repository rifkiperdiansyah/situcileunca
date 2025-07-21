<?php

namespace Database\Seeders;

use App\Models\Tiket;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
            'password' => bcrypt('password'),
            'role' => 'admin'
        ]);

        Tiket::create(
            [
                'name' => 'Rombongan',
                'price' => 15000,
                'description' => 'Deskripsi Tiket 1'
            ],
            [
                'name' => 'Per Orang',
                'price' => 15000,
                'description' => 'Deskripsi Tiket 2'
            ]
        );
    }
}
