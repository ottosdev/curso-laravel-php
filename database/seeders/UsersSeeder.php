<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'firstname'=> 'Otto',
            'lastname'=> 'Neto',
            'email'=> 'otto@email.com',
            'password'=> bcrypt('123123123')
        ]);
    }
}
