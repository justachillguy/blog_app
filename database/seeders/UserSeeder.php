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
     */
    public function run(): void
    {
        User::factory()->create([
            "name" => "zwe yan naing",
            "email" => "zwe@gmail.com",
            "password" => Hash::make("asdffdsa"),
            "role" => 'admin'
        ]);

        User::factory(10)->create();

        User::factory()->create([
            "name" => "su su",
            "email" => "susu@gmail.com",
            "password" => Hash::make("asdffdsa"),
            "role" => "admin"
        ]);
    }
}
