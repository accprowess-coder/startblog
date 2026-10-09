<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Blogcontroller;

Route::get('/blog',[Blogcontroller::class,'index']);
Route::get('/', function () {
    return view('welcome');
});
Route::get('/hello',function (){
    return'Hello John!';
});
