<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $user1 = User::create([
            'name' => 'admin',
            'email' => 'admin@sot.com',
            'password' => Hash::make('password'),

        ]);

        $user1->assignRole('admin');

        $user2 = User::create([
            'name' => 'user',
            'email' => 'user@sot.com',
            'password' => Hash::make('password'),

        ]);

        $user2->assignRole('student');
    }
}
