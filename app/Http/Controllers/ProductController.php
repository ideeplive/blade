<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    function show(){
        //Use Of includeWhen
        return view('product');
    }
}
