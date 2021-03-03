<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CategoryController extends Controller
{
    //
    public function index(){
        return "TODO: Menampilkan semua data kategori dari DB";
    }
    
    public function search(){
        return "TODO: Menampilkan hasil search bedasarkan nama kategori";
    }

    public function delete($id){
        return "TODO: Menghapus (soft delete) kategori bedasarkan ID";
    }

    public function restore($id){
        return "TODO: Me-restore data kategoru yang statusnya soft delete";
    }
    public function deletePermanent($id){
        return "TODO: Menghapus data kategori secara permanent";
    }
}
