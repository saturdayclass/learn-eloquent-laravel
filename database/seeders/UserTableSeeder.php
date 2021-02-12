<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use \App\Models\User;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            "name"=> "Raihan Muhammad",
            "email" => "raihan@gmail.com",
            "password" => "12345678"
        ]);
    }
}
