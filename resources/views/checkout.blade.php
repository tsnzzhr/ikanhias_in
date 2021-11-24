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
                    <span class="badge badge-secondary badge-pill">3</span>
                </h4>
                <ul class="list-group mb-3">
                    <li class="list-group-item d-flex justify-content-between lh-condensed">
                        <div>
                            <h6 class="my-0">Arwana Merah</h6>
                            <small class="text-muted">4,000,000</small>
                        </div>
                        <span class="text-muted">1</span>
                    </li>
                    <li class="list-group-item d-flex justify-content-between lh-condensed">
                        <div>
                            <h6 class="my-0">Koi Maruten Sanke</h6>
                            <small class="text-muted">700,000</small>
                        </div>
                        <span class="text-muted">2</span>
                    </li>
                    <li class="list-group-item d-flex justify-content-between lh-condensed">
                        <div>
                            <h6 class="my-0">Koi Asagi</h6>
                            <small class="text-muted">5,000,000</small>
                        </div>
                        <span class="text-muted">1</span>
                    </li>
                    <li class="list-group-item d-flex justify-content-between">
                        <span>Total</span>
                        <strong>10,400,000</strong>
                    </li>
                </ul>
            </div>
            <div class="col-md-8 order-md-1">
                <h4 class="mb-3">Data Order Pembelian</h4>
                <form class="needs-validation" novalidate>
                    <div class="mb-3">
                        <label for="address">Pilih Alamat Tujuan Pengiriman</label>
                        <select class="form-control" aria-label="Default select example">
                            <option selected>Alamat Pengiriman</option>
                            <option value="1">Jl Teknik Kimia No.1</option>
                            <option value="2">Jl Dharmahusada Indah No.1</option>
                            <option value="3">Manyar Tompotika No.1</option>
                        </select>
                        
                        <p>Tambahkan Alamat Baru?</p>
                        <input type="text" class="form-control" id="address" placeholder="Alamat Penerima" required>
                        <div class="invalid-feedback">
                            Inputkan Tujuan Pengiriman.
                        </div>
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
                    <a class="btn btn-primary btn-lg btn-block" href="{{ url('/invoice') }}" type="submit">Checkout</a>
                </form>
            </div>
        </div>

    </div>
@endsection
