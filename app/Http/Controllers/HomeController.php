<?php

namespace App\Http\Controllers;

use App\Models\Ikanhias;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $ikanhias = Ikanhias::all();
        return view('welcome', [
            'products' => $ikanhias
        ]);
    }
}