@extends('layouts.template')
<link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
{{-- <script src="{{ asset('js/katalog.js') }}"></script> --}}
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
            background: rgba(0, 0, 0, 0);
            border-radius: 16px;
            box-shadow: 0 4px 30px black;
            backdrop-filter: blur(50px);
            -webkit-backdrop-filter: blur(50px);
            border: 1px solid rgba(255, 255, 255, 0.3);
            color: white;
        }

        .desc h1 {
            color: #415A77;
            font-weight: 800;
            -webkit-text-stroke: #fff 1px;
        }

        .desc p {
            font-size: 20px;
            color: #415A77;
            font-weight: bold;
            -webkit-text-stroke: #fff 0.2px;
        }

        .hl {
            margin: 5% auto;
            align-self: center;
            width: 85%;
            height: 5px;
            background-color: #415A77;
        }

        .popup-wrap {
            width: 100%;
            height: 100%;
            display: none;
            position: absolute;
            top: 0px;
            left: 0px;
            content: '';
            background: rgba(65, 90, 119, 0.8);
            backdrop-filter: blur(25px);
            z-index: 20;
        }

        .popup-box {
            max-height: 650px;
            max-width: 600px;
            padding: 50px;
            transform: translate(-50%, -50%) scale(0.5);
            position: relative;
            top: 50%;
            left: 50%;
            box-shadow: 0px 2px 16px rgba(0, 0, 0);
            border-radius: 20px;
            background: #fff;
            text-align: center;
        }

        .popup-box h3 {
            color: #415A77;
        }

        .popup-box .close-btn {
            width: 35px;
            height: 35px;
            display: inline-block;
            position: absolute;
            top: 10px;
            right: 10px;
            -webkit-transition: all ease 0.5s;
            transition: all ease 0.5s;
            border-radius: 100%;
            background: #415A77;
            font-weight: bold;
            text-decoration: none;
            color: #fff;
            line-height: 200%;
        }

        .transform-in,
        .transform-out {
            display: block;
            -webkit-transition: all ease 0.5s;
            transition: all ease 0.5s;
        }

        .transform-in {
            -webkit-transform: translate(-50%, -50%) scale(1);
            transform: translate(-50%, -50%) scale(1);
        }

        .transform-out {
            -webkit-transform: translate(-50%, -50%) scale(0.5);
            transform: translate(-50%, -50%) scale(0.5);
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
                <a href="#"><img src="{{ asset('img/home.png')}}" /></a>
                <div class="desc">
                    <h1>Ikanhias.in Aja!</h1>
                    <p>Cari ikan pilihan yang berkualitas, variatif, aman dan anti-ribet sekarang!</p>
                </div>

            </div>
            <div class="item">
                <a href="#"><img src="{{ asset('img/sea.jpg')}}"></a>
                <div class="desc">
                    <h1>Mengapa Ikanhias.in?</h1>
                    <p>Tidak perlu repot datang ke outlet, cukup checkout melalui aplikasi dan tunggu pesananmu datang</p>
                </div>
            </div>
            <div class="item">
                <a href="#"><img src="{{asset('img/rain.jpg')}}" /></a>
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
                    <h5>Harga</h5>
                    <form action="{{ url('/sort') }}" method="get">
                        @csrf
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="sort" id="sortAsc1" value="0">
                            <label class="form-check-label" for="sortAsc1">
                                Terendah
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="sort" id="sortDesc2" value="1">
                            <label class="form-check-label" for="sortDesc2">
                                Tertinggi
                            </label>
                        </div>
                        <button class="btn" type="submit">Sort</button>
                    </form>
                </div>
            </div>

            <div class="col katalog">
                <div class="vl">
                    <div class="card-group d-flex align-items-stretch">
                        @foreach ($products as $product)
                            <div class="card card-item m-2">
                                <div class="card-header bg-transparent">
                                    <img class="img-item" src="imgProduct/{{ $product->gambar }}">
                                </div>
                                <div class="card-body">
                                    <div class="card-title-k d-inline-block" style="height: 80px">
                                        <p>{{ $product->nama }}</p>
                                    </div>
                                    <div class="harga">
                                        <img class="icon" src="{{ asset('img/money.png') }}">
                                        <p class="text-icon">Rp <span>{{ $product->harga }}</span></p>
                                    </div>

                                    <div class="stok">
                                        <img class="icon" src="{{ asset('img/box.png') }}">
                                        <p class="text-icon">Tersedia <span> {{ $product->stok }} </span> Produk</p>
                                    </div>

                                    <div class="btn-bottom btn_bookmark">
                                        <img class="d-inline-block" src="{{ asset('img/info.png') }}" width="32px"
                                            height="32px">
                                        <a class="d-inline-block popup-btn-{{ $product->id }}" href="#">Detail</a>
                                    </div>
                                    <div class="btn-bottom btn_cart">
                                        <img class="d-inline-block" src="{{ asset('img/purchase.png') }}" width="32px"
                                            height="32px">
                                        <a class="d-inline-block" href="{{ url('/keranjang') }}">+ Keranjang</a>
                                    </div>
                                </div>
                            </div>
                            <div class="popup-wrap-{{ $product->id }}" style="width: 100%;
                                    height: 100%;
                                    display: none;
                                    position: absolute;
                                    top: 0px;
                                    left: 0px;
                                    content: '';
                                    background: rgba(65, 90, 119, 0.8);
                                    backdrop-filter: blur(25px);
                                    z-index: 20;">
                                <div class="popup-box-{{ $product->id }}" style="
                                        min-height: 500px;
                                        max-width: 500px;
                                        padding: 8%;
                                        transform: translate(-50%, -50%);
                                        position: relative;
                                        top: 50%;
                                        left: 50%;
                                        box-shadow: 0px 2px 16px rgba(0, 0, 0);
                                        border-radius: 20px;
                                        background: #fff;
                                        text-align: center;">
                                    <style>
                                        .my-image {
                                            width: 14rem;
                                            height: 14rem;
                                            border-radius: 20px;
                                        }

                                    </style>

                                    <img class="my-image" src="imgProduct/{{ $product->gambar }}" />
                                    <h3 class="text-center mt-3 mb-2" style="color:#415A77;">
                                        <span>{{ $product->nama }}</span>
                                    </h3>
                                    <table class="table table-striped flex">
                                        <tbody>
                                            <tr>
                                                <td>Harga</td>
                                                <td><span>Rp {{ $product->harga }}</span></td>
                                            </tr>
                                            <tr>
                                                <td>Usia</td>
                                                <td><span>{{ $product->usia }}</span> Bulan</td>
                                            </tr>
                                            <tr>
                                                <td>Ukuran</td>
                                                <td><span>{{ $product->ukuran }}</span></td>
                                            </tr>
                                            <tr>
                                                <td>Tersisa</td>
                                                <td><span>{{ $product->stok }}</span> Produk</td>
                                            </tr>
                                            <tr>
                                                <td>Deskripsi</td>
                                                <td><span>{{ $product->deskripsi }}</span></td>
                                            </tr>
                                        </tbody>
                                    </table>
                                    <a class="close-btn popup-close" href="#" style="width:auto;
                                            height: auto;
                                            padding: 10px;
                                            display: inline-block;
                                            position: absolute;
                                            top:20px;
                                            right: 20px;
                                            -webkit-transition: all ease 0.5s;
                                            transition: all ease 0.5s;
                                            border-radius: 20px;
                                            background: #415A77;
                                            font-size: 25px;
                                            font-weight: bold;
                                            text-decoration: none;
                                            color: #fff;
                                            line-height: 100%;">x</a>
                                </div>
                            </div>
                            <script>
                                $(document).ready(function() {
                                    $(".popup-btn-{!! json_encode($product->id, JSON_HEX_TAG) !!}").click(function(e) {
                                        $(".popup-wrap-{!! json_encode($product->id, JSON_HEX_TAG) !!}").fadeIn(500);
                                        $(".popup-box-{!! json_encode($product->id, JSON_HEX_TAG) !!}").removeClass("transform-out").addClass(
                                            "transform-in");

                                        e.preventDefault();
                                    });

                                    $(".popup-close").click(function(e) {
                                        $(".popup-wrap-{!! json_encode($product->id, JSON_HEX_TAG) !!}").fadeOut(500);
                                        $(".popup-box-{!! json_encode($product->id, JSON_HEX_TAG) !!}").removeClass("transform-in").addClass(
                                            "transform-out");

                                        e.preventDefault();
                                    });

                                    //let myImage = document.getElementsByClassName('my-image')[0];
                                    //myImage.setAttribute('src', '[VALUE HERE]');
                                });
                            </script>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
