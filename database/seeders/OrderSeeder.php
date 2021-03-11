<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use \App\Models\Order;

class OrderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $order = new Order();
        $order->total_price = "10000";
        $order->invoice_number = "INV12121273";
        $order->status = "FINISH";

        $order2 = new Order();
        $order2->total_price = "20000";
        $order2->invoice_number = "INV12121274";
        $order2->status = "CANCEL";
    }
}
