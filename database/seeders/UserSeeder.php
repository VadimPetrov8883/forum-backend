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
        User::create([
            'name' => 'user',
            'email' => 'user@mail.ru',
            'password' => Hash::make('password')
        ]);

        User::create([
            'name' => 'test',
            'email' => 'test@mail.ru',
            'password' => Hash::make('123456789')
        ]);
    }
}
