@extends('layouts.template')
<link rel="stylesheet" href="css/customer.css">
<link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
@section('content')
<div class="container dashboard-c mt-4">
    <h2>Pengaturan Akun</h2>
    <div class="row rounded bg-white mt-3 mb-5">
        <div class="col-md-3 border-right">
            <div class="d-flex flex-column align-items-center text-center p-3 py-5"><img class="rounded-circle mt-5" width="150px" src="https://st3.depositphotos.com/15648834/17930/v/600/depositphotos_179308454-stock-illustration-unknown-person-silhouette-glasses-profile.jpg"><span class="font-weight-bold">{{ Auth::user()->name }}</span><span class="text-black-50">Lihat Profil</span><span> </span></div>
        </div>
        <div class="col-md-5 border-right">
            <div class="p-3 py-5">
                <div class="d-flex justify-content-between align-items-center mb-3">
                    <h4 class="text-right">Edit Informasi Akun</h4>
                </div>
                <form action="{{ url('/edit_customer'.'/'.Auth::user()->id) }}" method="post">
                    @csrf
                    @method('PUT')

                    <div class="form-group row">
                        <div class="col-md-12"><label for="name" class="col-md-8 p-0">{{ __('Nama') }}</label><input type="text" class="form-control" placeholder="Nama" value="{{ Auth::user()->name }}" name="name"></div>
                        <div class="col-md-12"><label for="phone" class="col-md-8 p-0">{{ __('Nomor Telepon') }}</label><input type="text" class="form-control" placeholder="Nomor Telepon" value="{{ Auth::user()->phone }}" name="phone"></div>
                        <div class="col-md-12"><label for="email" class="col-md-8 p-0">{{ __('Email') }}</label><input type="text" class="form-control" placeholder="Email" value="{{ Auth::user()->email }}" name="email"></div>
                        <div class="col-md-12"><label for="address" class="col-md-8 p-0">{{ __('Alamat') }}</label><input type="text" class="form-control" placeholder="Alamat" value="{{ Auth::user()->address }}" name="address"></div>
                        <div class="col-md-12 col-sm-12 col-md-12 text-center mt-3">
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <div class="col-md-3 p-3 py-5">
            <h4>Atur Ulang Password</h4>
            <form action="{{ url('/edit_customer'.'/edit_pass'.'/'.Auth::user()->id) }}" method="post">
                @csrf
                @method('PUT')

                <div class="form-group row">
                    <label for="password" class="col-md-8">{{ __('Password Baru') }}</label>

                    <div class="col-md-12">
                        <input id="password" type="password" class="form-control" name="password" required autocomplete="new-password">
                    </div>
                </div>

                <div class="form-group row">
                    <label for="password-confirm" class="col-md-8">{{ __('Konfirmasi Password Baru') }}</label>

                    <div class="col-md-12">
                        <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                    </div>
                </div>

                <div class="col-md-12 col-sm-12 col-md-12 text-center mt-3">
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
                
            </form>
        </div>
    </div>
</div>
</div>
</div>
@endsection