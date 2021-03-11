<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Models\Order;

class OrderController extends Controller
{
    public function index(){
        $order = Order::find(1);

        $buku_dipesan = $order->books;
        return $buku_dipesan;
    }
}
