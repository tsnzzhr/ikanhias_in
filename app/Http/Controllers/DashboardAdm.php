<?php

namespace App\Http\Controllers;

use App\Models\Ikanhias;
use Illuminate\Http\Request;

class DashboardAdm extends Controller
{
    public function index()
    {
        $product = Ikanhias::all();
        return view('admin.dashboard', [
            'products' => $product
        ]);
    }

    public function viewTransaksi()
    {
        return view('admin.transaksi');
    }
}