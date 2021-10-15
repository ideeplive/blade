<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactController extends Controller
{
    function show(){
        $name = 'Deep';
        $students = ['Narayan', 'Narahari', 'Jogesh', 'Ramesh'];
        // $Collections = [];
        return view('contact', ['nm'=>$name, 'students'=>$students, ]);
    }
}
