@extends('products.layout')
    
@section('content')
<style>
    .form-group tr, .form-group td{
        padding: 10px !important;
    }

    h2{
        color: #415A77 !important;
    }
</style>
    <div class="container p-5 mt-5">
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="pull-left">
                <h2 class="text-bold"> Show Product</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('products.index') }}"> Back</a>
            </div>
        </div>
      
        <div class="mt-3 col-xs-6 col-sm-6 col-md-6 d-inline-block">
        <table class="mt-5 table-bordered table-striped">
            <tr class="form-group">
                <td>Nama</td>
                <td>{{ $product->nama }}</td>
            </tr>
            <tr class="form-group">
                <td>Ukuran</td>
                <td>{{ $product->ukuran }}</td>
            </tr>
            <tr class="form-group">
                <td>Usia</td>
                <td>{{ $product->usia }}</td>
            </tr>
            <tr class="form-group">
                <td>Harga</td>
                <td>{{ $product->harga }}</td>
            </tr>
            <tr class="form-group">
                <td>Stok</td>
                <td>{{ $product->stok }}</td>
            </tr>
            <tr class="form-group">
                <td>Deskripsi</td>
                <td>{{ $product->deskripsi }}</td>
            </tr>
        </table> 
        </div>
        <div class="mt-3 col-xs-6 col-sm-6 col-md-6 d-inline-block">
            <div class="form-group">
                <p><strong>Gambar</strong></p>
                <img src="/imgProduct/{{ $product->gambar }}" height="300" width="300">
            </div>
        </div>
    </div>
</div>
@endsection