<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use \App\Models\Handphone;

class HandphoneSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Handphone::create([
            "phone_num" => "0877",
            "user_id" => "1"
        ]);
    }
}
