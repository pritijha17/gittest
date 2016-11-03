<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FinancestatusController extends Controller
{
    public function index()
    {
        return view('investor.financestatus');
    }
}
