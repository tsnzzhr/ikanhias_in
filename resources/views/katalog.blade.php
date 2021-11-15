@extends('layouts.template')

<title>Ikanhias.in | Katalog</title>

@section('content')
    <link href="{{ asset('css/katalog.css') }}" rel="stylesheet" />
    <div class="container katalog">
        <h2 class="m-3" style="font-weight: 800;">Katalog Produk</h2>
        <div class="row">
            <div class="col-3">
                <div class="sidebar">
                    <h4>Urut Berdasarkan :</h4>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1" checked>
                        <label class="form-check-label" for="flexRadioDefault1">
                            Rating
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2">
                        <label class="form-check-label" for="flexRadioDefault2">
                            Terbaru
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2">
                        <label class="form-check-label" for="flexRadioDefault2">
                            Terlaris
                        </label>
                    </div>
                </div>

                <div class="sidebar">
                    <h4>Kategori :</h4>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked">
                        <label class="form-check-label" for="flexCheckChecked">
                            Ikan Hias
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked">
                        <label class="form-check-label" for="flexCheckChecked">
                            Obat dan Perawatan
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked">
                        <label class="form-check-label" for="flexCheckChecked">
                            Aksesoris
                        </label>
                    </div>
                </div>
            </div>
            <div class="col-9 katalog">
                <div class="vl">
                    <div class="card-group d-flex align-items-stretch">
                        <div class="card card-item m-2">
                            <div class="card-header bg-transparent">
                                <img class="img-item" src="{{ asset('img/chinsurin.jpg') }}">
                            </div>
                            <div class="card-body">

                                <p class="card-title-k d-inline-block">Koki Chinshurin</p>


                                <div class="harga">
                                    <img class="icon" src="{{ asset('img/money.png') }}">
                                    <p class="text-icon">Harga : Rp <span>58000</span></p>
                                </div>

                                <div class="stok">
                                    <img class="icon" src="{{ asset('img/box.png') }}">
                                    <p class="text-icon">Tersedia : <span> 5 </span></p>
                                </div>

                                <div class="rating">
                                    <img class="icon" src="{{ asset('img/stars.png') }}">
                                    <p class="text-icon">Rating : <span> 3.5 </span>/5</p>
                                </div>
                                <div class="btn-bottom btn_bookmark">
                                    <img class="d-inline-block" src="{{ asset('img/saved.png') }}" width="32px"
                                        height="32px">
                                    <a class="d-inline-block" href="#">Favoritkan</a>
                                </div>
                                <div class="btn-bottom btn_cart">
                                    <img class="d-inline-block" src="{{ asset('img/purchase.png') }}" width="32px"
                                        height="32px">
                                    <a class="d-inline-block" href="#">+ Keranjang</a>
                                </div>
                            </div>
                        </div>
                        <div class="card card-item m-2">
                            <div class="card-header bg-transparent">
                                <img class="img-item" src="{{ asset('img/halfmoon-yellowlight.jpg') }}">
                            </div>
                            <div class="card-body">

                                <p class="card-title-k d-inline-block">Cupang Halfmoon Yellowlight</p>

                                <div class="harga">
                                    <img class="icon" src="{{ asset('img/money.png') }}">
                                    <p class="text-icon">Harga : Rp <span>45000</span></p>
                                </div>

                                <div class="stok">
                                    <img class="icon" src="{{ asset('img/box.png') }}">
                                    <p class="text-icon">Tersedia : <span> 8 </span></p>
                                </div>

                                <div class="rating">
                                    <img class="icon" src="{{ asset('img/stars.png') }}">
                                    <p class="text-icon">Rating : <span> 4.5 </span>/5</p>
                                </div>
                                <div class="btn-bottom btn_bookmark">
                                    <img class="d-inline-block" src="{{ asset('img/saved.png') }}" width="32px"
                                        height="32px">
                                    <a class="d-inline-block" href="#">Favoritkan</a>
                                </div>
                                <div class="btn-bottom btn_cart">
                                    <img class="d-inline-block" src="{{ asset('img/purchase.png') }}" width="32px"
                                        height="32px">
                                    <a class="d-inline-block" href="#">+ Keranjang</a>
                                </div>
                            </div>
                        </div>
                        <div class="card card-item m-2">
                            <div class="card-header bg-transparent">
                                <img class="img-item" src="{{ asset('img/ochiba-sigure.jpg') }}">
                            </div>
                            <div class="card-body">

                                <p class="card-title-k d-inline-block">Koi Ochiba Sigure</p>


                                <div class="harga">
                                    <img class="icon" src="{{ asset('img/money.png') }}">
                                    <p class="text-icon">Harga : Rp <span>400000</span></p>
                                </div>

                                <div class="stok">
                                    <img class="icon" src="{{ asset('img/box.png') }}">
                                    <p class="text-icon">Tersedia : <span> 3 </span></p>
                                </div>

                                <div class="rating">
                                    <img class="icon" src="{{ asset('img/stars.png') }}">
                                    <p class="text-icon">Rating : <span> 4.8 </span>/5</p>
                                </div>
                                <div class="btn-bottom btn_bookmark">
                                    <img class="d-inline-block" src="{{ asset('img/saved.png') }}" width="32px"
                                        height="32px">
                                    <a class="d-inline-block" href="#">Favoritkan</a>
                                </div>
                                <div class="btn-bottom btn_cart">
                                    <img class="d-inline-block" src="{{ asset('img/purchase.png') }}" width="32px"
                                        height="32px">
                                    <a class="d-inline-block" href="#">+ Keranjang</a>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
