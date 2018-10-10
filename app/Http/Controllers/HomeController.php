<?php

namespace App\Http\Controllers;
// call model user
// use App\User;
use App\Http\Controllers\Controller;

class HomeController extends Controller
{
    
    public function index()
    {
        $unescaped = '<script> alert("Hello")</script>';
        return view('home/home',['unescaped'=>$unescaped]);
    }
}