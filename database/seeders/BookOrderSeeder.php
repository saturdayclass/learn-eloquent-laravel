<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use \App\Models\BookOrder;

class BookOrderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $bookOrder = new BookOrder();
        $bookOrder->book_id = "1";
        $bookOrder->order_id = "2";
        $bookOrder->save();

        $bookOrder2 = new BookOrder();
        $bookOrder2->book_id = "2";
        $bookOrder2->order_id = "1";
        $bookOrder2->save();
    }
}
