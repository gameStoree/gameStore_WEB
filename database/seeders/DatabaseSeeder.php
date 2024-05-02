<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User:: (10)->create();

        \App\Models\User::factory()->create([
            'nama_lengkap' => 'Farhan Ariyanto',
            'email' => 'admin@gmail.com',
            'password' => bcrypt('admin123'),
            'no_hp' => '085233661118',
            'role' => 'admin'
        ]);
    }
}
