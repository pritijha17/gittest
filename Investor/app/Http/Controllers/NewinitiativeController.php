<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NewinitiativeController extends Controller
{
    public function index()
    {
        return view('investor.newinitiative');
    }
}
