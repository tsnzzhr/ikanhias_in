@extends('layouts.template')

<title>Ikanhias.in | Invoice</title>
<link href="{{ asset('css/invoice.css') }}" rel="stylesheet">
@section('content')
<div class="container mt-4 invoice-group">
    <h2 class="title" style="font-weight: 800;">List Invoice</h2>
    <div class="card-deck">
        <div class="card">
            <div class="card-horizontal">
                <img class="card-img" src="{{asset('img/ochiba-sigure.jpg')}}">
                <div class="card-body">
                    <h5 class="card-title"><b>Koi Ochiba Sigure</b></h5>
                    <p class="card-text">Tanggal Pembayaran : <span>-</span></p>
                    <p class="card-text">Deadline Pembayaran : <span>20/11/2021 23:59:00</span></p>
                    <p class="card-text"><small>Status : <span class="text-muted">Menunggu  Pembayaran</span></small></p>
                </div>
                <div class="card-body align-self-center">
                    <div class="btn btn-detail" title="Detail Invoice">
                        Detail Invoice
                    </div>
                </div>
            </div>
        </div>
        <div class="card">
            <div class="card-horizontal">
                <img class="card-img" src="{{asset('img/ki-utsuri.jpg')}}">
                <div class="card-body">
                    <h5 class="card-title"><b>Koi Ki-Utsuri</b></h5>
                    <p class="card-text">Tanggal Pembayaran : <span>-</span></p>
                    <p class="card-text">Deadline Pembayaran : <span>21/11/2021 11:59:00</span></p>
                    <p class="card-text"><small>Status : <span class="text-success">Berhasil</span></small></p>
                </div>
                <div class="card-body align-self-center">
                    <div class="btn btn-detail" title="Detail Invoice">
                        Detail Invoice
                    </div>
                </div>
            </div>
        </div>
        <div class="card">
            <div class="card-horizontal">
                <img class="card-img" src="{{asset('img/chinsurin.jpg')}}">
                <div class="card-body">
                    <h5 class="card-title"><b>Koki Chinshurin</b></h5>
                    <p class="card-text">Tanggal Pembayaran : <span>-</span></p>
                    <p class="card-text">Deadline Pembayaran : <span>20/11/2021 23:59:00</span></p>
                    <p class="card-text"><small>Status : <span class="text-danger">Dibatalkan</span></small></p>
                </div>
                <div class="card-body align-self-center">
                    <div class="btn btn-detail" title="Detail Invoice">
                        Detail Invoice
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection