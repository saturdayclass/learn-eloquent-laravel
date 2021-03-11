<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Models\Book;

class BookController extends Controller
{
    public function index(){
        $book = Book::find(2);

        $order_yang_memuat_order_ini = $book->orders;
        return $order_yang_memuat_order_ini;
    }
}
