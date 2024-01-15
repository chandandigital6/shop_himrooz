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
             'name'=>fake()->name(),
             'email'=>fake()->unique()->email(),
             'role'=>1,
             'password'=>fake()->password(),

         ]);
    }
}
