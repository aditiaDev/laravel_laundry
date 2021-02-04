<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'Aditia Rasid',
            'email' => 'aditia@test.com',
            'email_verified_at' => now(),
            'password' => bcrypt('aditia'),
            'role' => 0
        ]);
    }
}
