<?php

namespace App\Http\Controllers;

use App\Models\Ikanhias;
use Dflydev\DotAccessData\Data;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = Ikanhias::latest()->paginate(5);
        return view('products.index', compact('products'))->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('products.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required',
            'jenis' => 'required',
            'usia' => 'required',
            'harga' => 'required',
            'stok' => 'required',
            'deskripsi' => 'required',
            'gambar' => ['required', 'image', 'mimes:jpeg,png,jpg,svg', 'max:2048']
        ]);

        $input = $request->all();

        if ($image = $request->file('gambar')) {
            $destinationPath = 'imgProduct/';
            $profileImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $profileImage);
            $input['gambar'] = "$profileImage";
        }

        Ikanhias::create($input);

        return redirect()->route('products.index')->with('success', 'Product created successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Ikanhias $product)
    {
        return view('products.show', compact('product'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Ikanhias $product)
    {
        return view('products.edit', compact('product'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Ikanhias $product)
    {
        $request->validate([
            'nama' => 'required',
            'jenis' => 'required',
            'usia' => 'required',
            'harga' => 'required',
            'stok' => 'required',
            'deskripsi' => 'required'
        ]);

        $input = $request->all();

        if ($image = $request->file('gambar')) {
            $destinationPath = 'imgProduct/';
            $profileImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $profileImage);
            $input['gambar'] = "$profileImage";
        } else {
            unset($input['gambar']);
        }

        $product->update($input);

        return redirect()->route('products.index')->with('success', 'Product updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Ikanhias $product)
    {
        $product->delete();

        return redirect()->route('products.index')->with('success', 'Product deleted successfully');
    }
}