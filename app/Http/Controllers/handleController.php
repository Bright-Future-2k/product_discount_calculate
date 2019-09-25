<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class handleController extends Controller
{
    public function getForm(){
        return view('calcul_product');
    }
    public function handleRequest(Request $request){
        echo $request->only('pro_description','list_price','discount');

        //only de lay nhieu name, input lay 1
    }
}
