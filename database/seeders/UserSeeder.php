<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // User Giang Vien
        $user2 = new User();
        $user2->name = 'xuanhuy';
        $user2->email = 'xuanhuy@gmail.com';
        $user2->password = Hash::make('123456');
        $user2->save();
    }
}
