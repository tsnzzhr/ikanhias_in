@extends('layouts.template')

<title>Ikanhias.in | Checkout</title>
<link href="{{ asset('css/keranjang.css') }}" rel="stylesheet">
@section('content')
    <div class="container checkout mt-3">
        <h2>Form Checkout</h2>
        <div class="row mt-3">
            <div class="col-md-4 order-md-2 mb-4">
                <h4 class="d-flex justify-content-between align-items-center mb-3">
                    <span class="text-muted">Keranjang Belanja</span>
                    {{-- <span class="badge badge-secondary badge-pill">3</span> --}}
                </h4>
                <ul class="list-group mb-3">
                    <?php $total = 0 ?>
                    @if(session('cart'))
                    @foreach(session('cart') as $id => $details)
                    <li class="list-group-item d-flex justify-content-between lh-condensed">
                        <div>
                            <h6 class="my-0">{{ $details['nama'] }}</h6>
                            <small class="text-muted">{{ $details['harga'] }}</small>
                        </div>
                        <span class="text-muted">{{ $details['jumlah'] }}</span>
                    </li>
                    <?php $total += $details['jumlah'] * $details['harga'] ?>
                    @endforeach
                    @endif
                    <li class="list-group-item d-flex justify-content-between">
                        <span>Total</span>
                        <strong>{{ $total }}</strong>
                    </li>
                </ul>
            </div>
            <div class="col-md-8 order-md-1">
                <h4 class="mb-3">Data Order Pembelian</h4>
                {{-- <form class="needs-validation" novalidate> --}}
                    <div class="mb-3">
                        <label for="address">Alamat Tujuan Pengiriman</label>
                        <div>{{ Auth::user()->address }}</div>
                    </div>
                    <h4 class="mb-3">Payment</h4>

                    <div class="d-block my-3">
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1"
                                value="option1">
                            <label class="form-check-label" for="inlineRadio1">OVO</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2"
                                value="option2">
                            <label class="form-check-label" for="inlineRadio2">Dana</label>
                        </div>
                    </div>
                    <hr class="mb-4">
                    <form action="/checkoutGuys" method="post">
                        @csrf
                        <button class="btn btn-primary btn-lg btn-block" type="submit">Checkout</button>
                    </form>
                    {{-- <a class="btn btn-primary btn-lg btn-block" href="{{ url('/invoice') }}" type="submit">Checkout</a> --}}
                {{-- </form> --}}
            </div>
        </div>

    </div>
@endsection
