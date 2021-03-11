<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Models\Handphone;
use \App\Models\User;

class HandphoneController extends Controller
{
    public function index(){
        $handphone = Handphone::where("phone_num", "0877")->first();

        $user = $handphone->user;
        return $user;
    }

    public function create(){
        $handphone_baru = new Handphone(["phone_num" => "8236273"]);
        $user = User::find(1);

        $user->handphone()->create($handphone_baru);
    }
}
