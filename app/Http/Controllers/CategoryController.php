<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Models\Category;

class CategoryController extends Controller
{
    //
    public function index(){
        return Category::all();
    }
    
    public function search(Request $request){
        $keyword = $request->get("name");
        return Category::where("name", "LIKE", "%$keyword%")->get();
    }

    public function delete($id){
        $category = Category::findOrFail($id);

        if(!$category->trashed()){
            $category->delete();
            return "Kategori $category->name berhasil di hapus";
        }
    }

    public function restore($id){
        $category = Category::withTrashed($id)->findOrFail($id);

        if(!$category->trashed()){
            return "Kategori ga perlu di restore";
        }
        return "$category->name berhasil di restore";
    }
    public function deletePermanent($id){
        $category =  Category::withTrashed($id)->findOrFail($id);
        $category->forceDelete();
        return "$category->name berhasil di hapus dan tidak bisa di restore";
    }
}
