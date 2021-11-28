@extends('layouts.template')
<title>Ikanhias.in | Invoice</title>
<link href="{{ asset('css/invoice.css') }}" rel="stylesheet">
@section('content')
<div class="container mt-4 invoice-group">
    <h2 class="title" style="font-weight: 800;">List Invoice</h2>
    <div class="card-deck">
        <div class="card">
            <div class="card-horizontal">
                <div class="card-body">
                    <h5 class="card-title"><b>INV/001/03/19112021</b></h5><!--INV_IDPembeli_NoInvoicePembeli_TglCheckout-->
                    <p class="card-text">Tanggal Pembayaran : <span>-</span></p>
                    <p class="card-text">Deadline Pembayaran : <span>20/11/2021 23:59:00</span></p>
                    <p class="card-text"><small>Status : <span class="text-muted">Menunggu  Pembayaran</span></small></p>
                </div>
                <div class="card-body align-self-center">
                    <a class="btn btn-detail" title="Detail Invoice" href="{{ url('/detail-invoice') }}">
                        Detail Invoice
                    </a>
                    <a class="btn btn-detail" title="Detail Invoice" href="{{ url('/detail-invoice') }}">
                        Batalkan Invoice
                    </a>
                </div>
            </div>
        </div>
        <div class="card">
            <div class="card-horizontal">
                <div class="card-body">
                    <h5 class="card-title"><b>INV/001/02/19102021</b></h5><!--INV_IDPembeli_NoInvoicePembeli_TglCheckout-->
                    <p class="card-text">Tanggal Pembayaran : <span>-</span></p>
                    <p class="card-text">Deadline Pembayaran : <span>20/10/2021 15:20:20</span></p>
                    <p class="card-text"><small>Status : <span class="text-danger">Dibatalkan</span></small></p>
                </div>
                <div class="card-body align-self-center">
                    <a class="btn btn-detail" title="Detail Invoice" href="{{ url('/detail-invoice') }}">
                        Detail Invoice
                    </a>
                </div>
            </div>
        </div>
        <div class="card">
            <div class="card-horizontal">
                <div class="card-body">
                    <h5 class="card-title"><b>INV/001/01/19092021</b></h5><!--INV_IDPembeli_NoInvoicePembeli_TglCheckout-->
                    <p class="card-text">Tanggal Pembayaran : <span>19/09/2021 19:11:10 </span></p>
                    <p class="card-text">Deadline Pembayaran : <span>20/09/2021 11:33:22</span></p>
                    <p class="card-text"><small>Status : <span class="text-success">Berhasil</span></small></p>
                </div>
                <div class="card-body align-self-center">
                    <a class="btn btn-detail" title="Detail Invoice" href="{{ url('/detail-invoice') }}">
                        Detail Invoice
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection