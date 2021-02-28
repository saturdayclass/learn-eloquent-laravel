<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use \App\Models\Category;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $kategori1 = new Category();
        $kategori1->name ="Sepatu";
        $kategori1->save();

        $kategori2 = new Category;
        $kategori2->name = "Tas";
        $kategori2->save();

        $kategori3 = new Category; 
        $kategori3->name = "Elektronik";
        $kategori3->save();

        $kategori4 = new Category;
        $kategori4->name = "Kemeja";
        $kategori4->save();

        $kategori5 = new Category;
        $kategori5->name = "Celana";
        $kategori5->save();

        $kategori6 = new Category; 
        $kategori6->name = "Buku";
        $kategori6->save();

        $kategori7 = new Category; 
        $kategori7->name = "Kosmetik";
        $kategori7->save();

        $kategori8 = new Category;
        $kategori8->name = "Komputer";
        $kategori8->save();

        $kategori9 = new Category; 
        $kategori9->name = "Sandal";
        $kategori9->save();

        $kategori10 = new Category; 
        $kategori10->name = "Furniture";
        $kategori10->save();
    }
}
