<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class homeController extends Controller
{
    public function index() 
    {
        $data = [

        ];

        return view('home')->with($data);
    }
}
