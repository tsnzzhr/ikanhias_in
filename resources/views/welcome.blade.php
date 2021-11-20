@extends('layouts.template')
<link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>

<title>Ikanhias.in</title>
@section('content')

<link href="{{ asset('css/katalog.css') }}" rel="stylesheet" />
    <style>
        .carousel-inner>.item>img,
        .carousel-inner>.item>a>img {
            display: block;
            width: 100% \9;
            max-width: 100%;
            height: auto;
        }

        .carousel img {
            min-width: 100%;
        }

        .carousel .item {
            height: 630px;
        }

        .carousel {
            background-size: cover;
            margin-top: -10px;
        }

        .carousel-inner {
            position: relative;
            width: 100%;
            overflow: hidden;
        }

        .carousel-inner>.item {
            position: relative;
            display: none;
            -webkit-transition: .6s ease-in-out left;
            -o-transition: .6s ease-in-out left;
            transition: .6s ease-in-out left;
        }

        .carousel-inner>.item>img,
        .carousel-inner>.item>a>img {
            line-height: 1;
        }

        .carousel-inner>.active,
        .carousel-inner>.next,
        .carousel-inner>.prev {
            display: block;
        }

        .carousel-inner>.active {
            left: 0;
        }

        .carousel-inner>.next,
        .carousel-inner>.prev {
            position: absolute;
            top: 0;
            width: 100%;
        }

        .carousel-inner>.next {
            left: 100%;
        }

        .carousel-inner>.prev {
            left: -100%;
        }

        .carousel-inner>.next.left,
        .carousel-inner>.prev.right {
            left: 0;
        }

        .carousel-inner>.active.left {
            left: -100%;
        }

        .carousel-inner>.active.right {
            left: 100%;
        }

        .carousel-control {
            position: absolute;
            top: 0;
            bottom: 0;
            left: 0;
            width: 15%;
            font-size: 20px;
            color: #fff;
            text-align: center;
            text-shadow: 0 1px 2px rgba(0, 0, 0, .6);
            filter: alpha(opacity=50);
            opacity: .5;
        }

        .carousel-control.left {
            background-image: -webkit-linear-gradient(left, rgba(0, 0, 0, .5) 0%, rgba(0, 0, 0, .0001) 100%);
            background-image: -o-linear-gradient(left, rgba(0, 0, 0, .5) 0%, rgba(0, 0, 0, .0001) 100%);
            background-image: -webkit-gradient(linear, left top, right top, from(rgba(0, 0, 0, .5)), to(rgba(0, 0, 0, .0001)));
            background-image: linear-gradient(to right, rgba(0, 0, 0, .5) 0%, rgba(0, 0, 0, .0001) 100%);
            filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#80000000', endColorstr='#00000000', GradientType=1);
            background-repeat: repeat-x;
        }

        .carousel-control.right {
            right: 0;
            left: auto;
            background-image: -webkit-linear-gradient(left, rgba(0, 0, 0, .0001) 0%, rgba(0, 0, 0, .5) 100%);
            background-image: -o-linear-gradient(left, rgba(0, 0, 0, .0001) 0%, rgba(0, 0, 0, .5) 100%);
            background-image: -webkit-gradient(linear, left top, right top, from(rgba(0, 0, 0, .0001)), to(rgba(0, 0, 0, .5)));
            background-image: linear-gradient(to right, rgba(0, 0, 0, .0001) 0%, rgba(0, 0, 0, .5) 100%);
            filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#00000000', endColorstr='#80000000', GradientType=1);
            background-repeat: repeat-x;
        }

        .carousel-control:hover,
        .carousel-control:focus {
            color: #fff;
            text-decoration: none;
            filter: alpha(opacity=90);
            outline: 0;
            opacity: .9;
        }

        .carousel-control .icon-prev,
        .carousel-control .icon-next,
        .carousel-control .glyphicon-chevron-left,
        .carousel-control .glyphicon-chevron-right {
            position: absolute;
            top: 50%;
            z-index: 5;
            display: inline-block;
        }

        .carousel-control .icon-prev,
        .carousel-control .glyphicon-chevron-left {
            left: 50%;
            margin-left: -10px;
        }

        .carousel-control .icon-next,
        .carousel-control .glyphicon-chevron-right {
            right: 50%;
            margin-right: -10px;
        }

        .carousel-control .icon-prev,
        .carousel-control .icon-next {
            width: 20px;
            height: 20px;
            margin-top: -10px;
            font-family: serif;
        }

        .carousel-control .icon-prev:before {
            content: '\2039';
        }

        .carousel-control .icon-next:before {
            content: '\203a';
        }

        .carousel-indicators {
            position: absolute;
            bottom: 10px;
            left: 50%;
            z-index: 15;
            width: 60%;
            padding-left: 0;
            margin-left: -30%;
            text-align: center;
            list-style: none;
        }

        .carousel-indicators li {
            display: inline-block;
            width: 30px;
            height: 10px;
            cursor: pointer;
            background-color: #000 \9;
            background-color: rgba(0, 0, 0, 0);
            border: 1px solid #fff;
            border-radius: 10px;
            margin: auto 10px;
        }

        .carousel-indicators .active {
            margin: auto 10px;
            background-color: #fff;
        }

        .desc {
            display: block;
            position: absolute;
            right: 15%;
            bottom: 30%;
            left: 15%;
            padding: 90px;
            z-index: 10;
            text-align: center;
            background: rgba(255, 255, 255, 0);
            border-radius: 16px;
            box-shadow: 0 4px 30px rgba(0, 0, 0, 0.1);
            backdrop-filter: blur(20px);
            -webkit-backdrop-filter: blur(20px);
            border: 1px solid rgba(255, 255, 255, 0.3);
            color: white;
        }

        .desc h1 {
            font-weight: 800;
        }

        .desc p {
            font-size: 20px;
        }

        .hl{
            margin: 5% auto;
            align-self: center;
            width: 85%;
            height: 5px;
            background-color: #415A77;
        }

        @media screen and (min-width: 768px) {

            .carousel-control .glyphicon-chevron-left,
            .carousel-control .glyphicon-chevron-right,
            .carousel-control .icon-prev,
            .carousel-control .icon-next {
                width: 30px;
                height: 30px;
                margin-top: -15px;
                font-size: 30px;
            }

            .carousel-control .glyphicon-chevron-left,
            .carousel-control .icon-prev {
                margin-left: -15px;
            }

            .carousel-control .glyphicon-chevron-right,
            .carousel-control .icon-next {
                margin-right: -15px;
            }

            .carousel-indicators {
                bottom: 20px;
            }
        }

    </style>
    <div id="carousel-example" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#carousel-example" data-slide-to="0" class="active"></li>
            <li data-target="#carousel-example" data-slide-to="1"></li>
            <li data-target="#carousel-example" data-slide-to="2"></li>
        </ol>

        <div class="carousel-inner">
            <div class="item active">
                <a href="#"><img src="http://source.unsplash.com/_-KTbvt9IkQ/1600x800" /></a>
                <div class="desc">
                    <h1>Ikanhias.in Aja!</h1>
                    <p>Cari ikan dan aquarium-care berkualitas, bervariatif, aman terpercaya, anti-ribet dan cepat</p>
                </div>

            </div>
            <div class="item">
                <a href="#"><img src="https://source.unsplash.com/ZV8OoFZ1nRc/1600x800"></a>
                <div class="desc">
                    <h1>Mengapa Ikanhias.in?</h1>
                    <p>Tidak perlu repot datang ke outlet, cukup checkout melalui aplikasi dan tunggu pesananmu datang</p>
                </div>
            </div>
            <div class="item">
                <a href="#"><img src="http://source.unsplash.com/poly_hmhwJs/1600x800" /></a>
                <div class="desc">
                    <h1>Keluhan, Tips dan Konsultasi?</h1>
                    <p>Chat admin dengan respon cepat anti-lelet saat jam kerja</p>
                </div>
            </div>
        </div>

        <a class="left carousel-control" href="#carousel-example" data-slide="prev">
            <span class="glyphicon glyphicon-chevron-left"></span>
        </a>
        <a class="right carousel-control" href="#carousel-example" data-slide="next">
            <span class="glyphicon glyphicon-chevron-right"></span>
        </a>
    </div>
    <div class="hl"></div>
    <div class="container justify-content-center katalog">
        <h2 class="m-3" style="font-weight: 800;">Katalog Produk</h2>
        <div class="row">
            <div class="w-60">
                <div class="sidebar">
                    <h5><b>Urut Berdasarkan :</b></h5>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="flexRadio" id="flexRadio1" checked>
                        <label class="form-check-label" for="flexRadio1">
                           Rating Terbaik
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="flexRadio" id="flexRadio2">
                        <label class="form-check-label" for="flexRadio2">
                            Produk Terbaru
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="flexRadio" id="flexRadio3">
                        <label class="form-check-label" for="flexRadio2">
                            Penjualan Terbanyak
                        </label>
                    </div>
                </div>

                <div class="sidebar">
                    <h5><b>Kategori :</b></h5>
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
            <div class="col katalog">
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
                                    <p class="text-icon">Rp <span>58,000</span></p>
                                </div>

                                <div class="stok">
                                    <img class="icon" src="{{ asset('img/box.png') }}">
                                    <p class="text-icon">Tersedia <span> 5 </span> Produk</p>
                                </div>

                                <div class="rating">
                                    <img class="icon" src="{{ asset('img/stars.png') }}">
                                    <p class="text-icon">Rating : <span> 3.5 </span>/5</p>
                                </div>
                                <div class="btn-bottom btn_bookmark">
                                    <img class="d-inline-block" src="{{ asset('img/info.png') }}" width="32px"
                                        height="32px">
                                    <a class="d-inline-block" href="#">Detail</a>
                                </div>
                                <div class="btn-bottom btn_cart">
                                    <img class="d-inline-block" src="{{ asset('img/purchase.png') }}" width="32px"
                                        height="32px">
                                    <a class="d-inline-block" href="{{ url('/keranjang')  }}">+ Keranjang</a>
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
                                    <p class="text-icon">Rp <span>45,000</span></p>
                                </div>

                                <div class="stok">
                                    <img class="icon" src="{{ asset('img/box.png') }}">
                                    <p class="text-icon">Tersedia <span> 8 </span>  Produk</p>
                                </div>

                                <div class="rating">
                                    <img class="icon" src="{{ asset('img/stars.png') }}">
                                    <p class="text-icon">Rating : <span> 4.5 </span>/5</p>
                                </div>
                                <div class="btn-bottom btn_bookmark">
                                    <img class="d-inline-block" src="{{ asset('img/info.png') }}" width="32px"
                                        height="32px">
                                    <a class="d-inline-block" href="#">Detail</a>
                                </div>
                                <div class="btn-bottom btn_cart">
                                    <img class="d-inline-block" src="{{ asset('img/purchase.png') }}" width="32px"
                                        height="32px">
                                    <a class="d-inline-block" href="{{ url('/keranjang')  }}">+ Keranjang</a>
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
                                    <p class="text-icon">Rp <span>400,000</span></p>
                                </div>

                                <div class="stok">
                                    <img class="icon" src="{{ asset('img/box.png') }}">
                                    <p class="text-icon">Tersedia <span> 3 </span> Produk</p>
                                </div>

                                <div class="rating">
                                    <img class="icon" src="{{ asset('img/stars.png') }}">
                                    <p class="text-icon">Rating : <span> 4.8 </span>/5</p>
                                </div>
                                <div class="btn-bottom btn_bookmark">
                                    <img class="d-inline-block" src="{{ asset('img/info.png') }}" width="32px"
                                        height="32px">
                                    <a class="d-inline-block" href="#">Detail</a>
                                </div>
                                <div class="btn-bottom btn_cart">
                                    <img class="d-inline-block" src="{{ asset('img/purchase.png') }}" width="32px"
                                        height="32px">
                                    <a class="d-inline-block" href="{{ url('/keranjang')  }}">+ Keranjang</a>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>

    </div>
@endsection
