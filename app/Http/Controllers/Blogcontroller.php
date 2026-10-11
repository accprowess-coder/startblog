<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Blogcontroller extends Controller
{
    public function index()
    {
    $title ='My first Laravel Blog';   
    return view('blog',['title'=> $title]);
    }
}
