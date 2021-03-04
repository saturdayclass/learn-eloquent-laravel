<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SalamController extends Controller
{
    public function index(){
        return view('salam.index', ["kalimat" => "Halo gaes..."]);
    }
}
