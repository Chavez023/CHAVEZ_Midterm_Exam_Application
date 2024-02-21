<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index() {
        return "Hello Exasdfsdfdsf";
    }
    
    // public function Goto() 
     //   return view('Users');
    //}

    public function show() {
        $data =array(
            "Brand" => "Tecno",
            "model" => "Pova 5",
            "CPU" => "MediaTek",
            "Ram" => "8G",
            "ROM" => "258G"
        );
        return view('Product', ["data"=>$data]);
    }
}