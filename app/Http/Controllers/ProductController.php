<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    function show(){

        $websiteName = 'ClickKart';
        $user = 'Admin';
        $userType = $user =='Admin' ? true : false;
        // $student = ['Raj', 'Rahul', 'Jay', 'Sumit']; 'students'=>$student
        return view('product',['userType'=>$userType, 'wn'=>'Working With Me']);

    }
}
