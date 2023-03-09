<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'name' => 'Favio Garcia',
            'phone' => '78451236',
            'email' => 'faviogarci1@example.com',
            'profile' =>'ADMIN',
            'status' =>'ACTIVE',
            'password' => bcrypt('admin123'),
        ]);
        User::create([
            'name' => 'alexander',
            'phone' => '65982321',
            'email' => 'alexander@example.com',
            'profile' =>'EMPLOYEE',
            'status' =>'ACTIVE',
            'password' => bcrypt('user123'),
        ]);
    }
}
