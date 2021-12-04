<?php

namespace App\Http\Controllers;

use App\Models\Ikanhias;
use App\Models\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $ikanhias = Ikanhias::all();
        $user = User::where('email', 'admin@admin.com')->get();

        return view('welcome', [
            'products' => $ikanhias,
            'users' => $user
        ]);
    }

    public function search(Request $request)
    {
        $product = DB::table('ikanhias')
            ->where('nama', 'like', '%' . $request->search . '%')
            ->get();
        return view('welcome', [
            'products' => $product
        ]);
    }

    public function sort(Request $request)
    {
        if ($request->sort == 0) {
            $product = DB::table('ikanhias')
                ->orderBy('harga', 'asc')
                ->get();
        } else {
            $product = DB::table('ikanhias')
                ->orderBy('harga', 'desc')
                ->get();
        }

        return view('welcome', [
            'products' => $product
        ]);
    }
}