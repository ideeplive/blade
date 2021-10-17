<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    function show(){
        //Use Of includeWhen
        $websiteName = 'ClickKart';
        $user = 'Admin';
        $userType = $user =='Admin' ? true : false;
        return view('product',['wn'=>$websiteName]);
    }
}
