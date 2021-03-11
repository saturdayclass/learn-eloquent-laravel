<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use \App\Models\Book;

class BookSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $book = new Book();
        $book->title = "Javascript Master";
        $book->slug = "javascript-master";
        $book->save();

        $book2 = new Book();
        $book2->title = "reactjs-master";
        $book2->slug = "reactjs-master";
        $book2->save();
    }
}
