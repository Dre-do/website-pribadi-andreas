<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Iluminate\Support\Facades\DB;
use App\Models\Home;


class tableController extends Controller
{
    public function index() 
    {
        $data = [
            [ 'id' => 1, 'judul' => 'postingan1', 'author' => 'Andreas'],
            [ 'id' => 2, 'judul' => 'postingan2', 'author' => 'Domenico' ],
            [ 'id' => 3, 'judul' => 'postingan3', 'author' => 'Situmorang'],
        ];
        return view('table', compact('data'));
    }
}
