<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

class HomeController extends Controller
{
    
    public function index()
    {
            //$unescaped = '<script> alert("Hello")</script>';
            $unescaped = '<H1> PARAMETER UNESCAPE</H1>';
            
            $text = "ini halaman home";
            return view('home/home', ['data' => $text,'unescaped'=>$unescaped]);     
    }

    public function show($id,$nama)
    {
        if($id > 5){
            $text = $nama."lebih dari 5";
            return view('home/home', ['data' => $text]);
        } else {
            $text = $nama."kurang dari 5";
            return view('home/home', ['data' => $text]);
        }
    }
}