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

    public function addProduct($id)
    {
        $product = Ikanhias::find($id);

        if (!$product) {
            abort(404);
        }
        $cart = session()->get('cart');
        if (!$cart) {
            $cart = [
                $id => [
                    "id" => $product->id,
                    "nama" => $product->nama,
                    "jumlah" => 1,
                    "ukuran" => $product->ukuran,
                    "usia" => $product->usia,
                    "harga" => $product->harga,
                    "stok" => $product->stok,
                    "deskripsi" => $product->deskripsi,
                    "gambar" => $product->gambar
                ]
            ];
            session()->put('cart', $cart);
            return redirect('/keranjang')->with('success', 'Product added to cart successfully!');
        }

        if (isset($cart[$id])) {
            $cart[$id]['jumlah']++;
            session()->put('cart', $cart);
            return redirect('/keranjang')->with('success', 'Product added to cart successfully!');
        }
        // if item not exist in cart then add to cart with quantity = 1
        $cart[$id] = [
            "id" => $product->id,
            "nama" => $product->nama,
            "jumlah" => 1,
            "ukuran" => $product->ukuran,
            "usia" => $product->usia,
            "harga" => $product->harga,
            "stok" => $product->stok,
            "deskripsi" => $product->deskripsi,
            "gambar" => $product->gambar
        ];
        session()->put('cart', $cart);
        return redirect('/keranjang')->with('success', 'Product added to cart successfully!');
    }
    public function remove(Request $request)
    {
        if ($request->id) {
            $cart = session()->get('cart');
            if (isset($cart[$request->id])) {
                unset($cart[$request->id]);
                session()->put('cart', $cart);
            }
            session()->flash('success', 'Product removed successfully');
            return redirect('/keranjang')->with('success', 'Product added to cart successfully!');
        }
    }
}