<?php

namespace App\Http\Controllers;

use App\Models\Ikanhias;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class KeranjangController extends Controller
{
    public function index()
    {
        return view('keranjang');
    }

    public function addProduct(Request $request)
    {
        $product = $request->all();
        return view('keranjang', [
            'userId' => Auth::id(),
            'products' => $product
        ]);
    }
}