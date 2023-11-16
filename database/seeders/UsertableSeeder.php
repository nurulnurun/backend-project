<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UsertableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'name'=>'Nurul Haque',
            'email'=> 'nurulhaque.engineer@gmail.com',
            'password'=> bcrypt('123456'),
        ]);
    }
}
