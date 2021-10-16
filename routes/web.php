<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;

Route::get('/', function () { return view('welcome', ['name'=>'deep']); });
Route::get('contact', [ContactController::class, 'show']);
Route::get('product', [ProductController::class, 'show']);