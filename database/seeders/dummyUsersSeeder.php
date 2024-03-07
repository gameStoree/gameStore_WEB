<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class dummyUsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $userData = [
            [
                'nama_lengkap' => 'Farhan Ariyanto',
                'email' => 'ari@gmail.com',
                'password' => bcrypt('1234'),
                'no_hp' => '085233661118',
                'role' => 'admin'
            ],
            [
                'nama_lengkap' => 'Farhan',
                'email' => 'farhan@gmail.com',
                'password' => bcrypt('1235'),
                'no_hp' => '085233661118',
                'role' => 'worker'
            ],
            [
                'nama_lengkap' => 'Ariyanto',
                'email' => 'ariyanto@gmail.com',
                'password' => bcrypt('1236'),
                'no_hp' => '085233661118',
                'role' => 'customer'
            ],
        ];

        foreach($userData as $key => $val) {
            User::create($val);
        }
    }
}
