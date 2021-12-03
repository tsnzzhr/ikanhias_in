@extends('layouts.template')
<link rel="stylesheet" href="css/customer.css">
<link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>

@section('content')
<div class="container dashboard-c mt-4">
    <h2>Akun Saya</h2>
    <div class="row rounded bg-white mt-3 mb-5">
        <div class="col-md-3 border-right">
            <div class="d-flex flex-column align-items-center text-center p-3 py-5"><img class="rounded-circle mt-5" width="150px" src="https://st3.depositphotos.com/15648834/17930/v/600/depositphotos_179308454-stock-illustration-unknown-person-silhouette-glasses-profile.jpg"><p>Halo, <span>{{ Auth::user()->name }}</span>!</p></div>
        </div>
        <div class="col-md-6 border-right">
            <div class="p-3 py-5">
                <div class="d-flex justify-content-between align-items-center mb-3">
                    <h4 class="text-right">Informasi Akun</h4>
                </div>
                <div class="row mt-3">
                    <div class="col-md-12"><label class="labels">Nama</label><p><span>{{ Auth::user()->name }}</span></p></div>
                    <div class="col-md-12"><label class="labels">Nomor Telepon</label><p><span>{{ Auth::user()->phone }}</span></p></div>
                    <div class="col-md-12"><label class="labels">Email</label><p><span>{{ Auth::user()->email }}</span></p></div>
                    <div class="col-md-12"><label class="labels">Alamat</label><p><span>{{ Auth::user()->address }}</span></p></div>
                </div>
                <div class="mt-5 text-center"><a class="btn profile-a" href="{{ url('edit_customer') }}" type="a">Edit Akun</a></div>
            </div>
        </div>
        <div class="col-md-3 border-right">
            <div class="p-3 py-5 mt-5">
                <div class="mt-3 text-center"><a class="btn profile-a" href="{{ url('keranjang') }}" type="a">Keranjang</a></div>
                <div class="mt-3 text-center"><a class="btn profile-a" href="{{ url('invoice') }}" type="a">List Invoice</a></div>
                <div class="mt-3 text-center"><a class="btn profile-a" href="{{ url('/') }}" type="a">Katalog</a></div>
            </div>
        </div>
    </div>
</div>
@endsection