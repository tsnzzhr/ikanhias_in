<?php

namespace App\Http\Controllers;

use App\Models\DetailKeranjang;
use Illuminate\Http\Request;
use App\Models\Keranjang;
use App\Models\Transaksi;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class CheckoutController extends Controller
{
    public function index()
    {
        return view('checkout');
    }

    public function checkoutGuys(Request $request)
    {
        $cart = session('cart');

        $keranjang = new Keranjang;
        $keranjang->total_harga = $request->input('total_harga');
        $keranjang->user_id = Auth::user()->id;
        $keranjang->save();
        $idkeranjang = $keranjang->id;

        if (count($cart) > 0) {
            foreach ($cart as $id => $details) {
                $detailKeranjang = new DetailKeranjang;
                $detailKeranjang->jumlah = $details['jumlah'];
                $detailKeranjang->product_id = $details['id'];
                $detailKeranjang->keranjang_id = $idkeranjang;
                $detailKeranjang->save();
            }
        };

        $transaksi = new Transaksi;
        $transaksi->harga_total = $request->input('total_harga');
        $transaksi->kurir = $request->input('kurir');
        $transaksi->payment = $request->input('payment');
        $transaksi->status = 'belum';
        $transaksi->keranjang_id = $idkeranjang;
        $transaksi->user_id = Auth::user()->id;
        $transaksi->deadline = now();
        $transaksi->save();
        $idtransaksi = $transaksi->id;
        $startDate = date_timestamp_get($transaksi->deadline);
        $date = date('Y-m-d H:i:s', strtotime('+2 day', $startDate));
        $transaksi->update(['deadline' => $date]);
        return redirect('/invoice')->with('success', 'Transaksi sukses');
    }
}