@extends('layouts.template')

<title>Ikanhias.in | Checkout</title>
<link href="{{ asset('css/keranjang.css') }}" rel="stylesheet">
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
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
                    <?php $count = 0 ?>
                    <?php $ongkir = 27000 ?>
                    @if(session('cart'))
                    @foreach(session('cart') as $id => $details)
                    <li class="list-group-item d-flex justify-content-between lh-condensed">
                        <div>
                            <h6 class="my-0">{{ $details['nama'] }}</h6>
                            <small class="text-muted">{{ $details['harga'] }}</small>
                        </div>
                        <span class="text-muted">{{ $details['jumlah'] }}</span>
                    </li>
                    <?php $count += $details['jumlah'] ?>
                    <?php $total += $details['jumlah'] * $details['harga'] ?>
                    @endforeach
                    @endif
                    @if ($count > 3 )
                        @if ($count % 3 == 0)
                            <?php $ongkir *= intdiv($count, 3) ?> 
                        @else
                            <?php $ongkir *= (intdiv($count, 3)+1)?> 
                        @endif
                    @else 
                        <?php $ongkir += 0?>
                    @endif
                    <?php $total += $ongkir ?>
                    <li class="list-group-item d-flex justify-content-between lh-condensed">
                        <div>
                            <h6 class="my-0">Ongkir</h6>
                            <small class="text-muted">{{ $ongkir }}</small>
                        </div>
                    </li>

                    <li class="list-group-item d-flex justify-content-between">
                        <span>Total</span>
                        <strong>{{ $total }}</strong>
                    </li>
                </ul>
                <p>*Ongkir kesemua wilayah sama dan dikenakan biaya 27000 per kilo</p>
            </div>
            <div class="col-md-8 order-md-1">
                <h4 class="mb-3">Data Order Pembelian</h4>
                {{-- <form class="needs-validation" novalidate> --}}
                    <div class="mb-3">
                        <label for="address">Alamat Tujuan Pengiriman</label>
                        <div>{{ Auth::user()->address }}</div>
                    </div>
                    <form action="/checkoutGuys" method="post">
                    @csrf
                    <h4 class="mb-3">Kurir</h4>
                    <div class="d-block my-3">
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="kurir" id="inlineRadio1"
                                value="jne">
                            <label class="form-check-label" for="inlineRadio1">JNE</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="kurir" id="inlineRadio2"
                                value="jnt">
                            <label class="form-check-label" for="inlineRadio2">J&T</label>
                        </div>
                    </div>
                    <h4 class="mb-3">Payment</h4>
                    <div class="d-block my-3">
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="payment" id="inlineRadio4"
                                value="ovo">
                            <label class="form-check-label" for="inlineRadio4">OVO</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="payment" id="inlineRadio5"
                                value="dana">
                            <label class="form-check-label" for="inlineRadio5">Dana</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="payment" id="inlineRadio6"
                                value="linkaja">
                            <label class="form-check-label" for="inlineRadio6">LinkAja</label>
                        </div>
                    </div>
                    <input type="hidden" name="total_harga" value="{{ $total }}">
                    <h6 class="mb-3">081123456789</h6>
                    <h6 class="mb-3">Jangan lupa untuk konfirmasi pesanan, dengan mengirim bukti transfer ke nomer WA diatas</h6>
                    <hr class="mb-4">
                        <button class="btn btn-primary btn-lg btn-block" type="submit">Checkout</button>
                    </form>
                    {{-- <a class="btn btn-primary btn-lg btn-block" href="{{ url('/invoice') }}" type="submit">Checkout</a> --}}
                {{-- </form> --}}
            </div>
        </div>

    </div>
@endsection
