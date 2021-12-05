<?php

namespace App\Http\Controllers;

use App\Models\Transaksi;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class InvoiceController extends Controller
{
    public function index()
    {
        $lalala = DB::table('transaksis')->where('user_id', '=', Auth::user()->id)->get();
        return view('invoice', [
            'invoices' => $lalala
        ]);
    }

    public function showDetail($id)
    {
        $transaksi = DB::table('transaksis')
            ->where('id', '=', $id)
            ->first();
        // $transaksi = 
        return view('invoice_detail', [
            'transaksi' => $transaksi
        ]);
        // return $transaksi;
    }
}