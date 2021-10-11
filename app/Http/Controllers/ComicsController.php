<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ComicsController extends Controller
{
    //    
    public function index()
    {
        $comics = [];
        return view('comics.index', compact('comics'));
    }
}
