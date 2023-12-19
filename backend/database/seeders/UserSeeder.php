<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;

class UserSeeder extends Seeder
{
    public function run()
    {
        $email = 'shamchimohammad@gmail.com';

        if (!User::where('email', $email)->exists()) {
            User::create([
                'name' => 'Mohammad',
                'email' => $email,
                'password' => bcrypt('1234'),
            ]);
        }
    }
}
