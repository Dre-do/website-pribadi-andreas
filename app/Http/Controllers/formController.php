<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Iluminate\Support\Facades\DB;
use App\Models\Home;

class formController extends Controller
{
    public function index()
    {
        return view('form');
    }

    public function submit(Request $request)
    {
        return redirect()->route('home');
    }    
}
