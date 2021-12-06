@extends('layouts.template')
<title>Ikanhias.in | Invoice</title>
<link href="{{ asset('css/invoice.css') }}" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>

@section('content')
<div class="container mt-4 invoice-group">
    <h2 class="title" style="font-weight: 800;">List Invoice</h2>
    <div class="card-deck">
        @foreach ($invoices as $invoice)
        <div class="card">
            <div class="card-horizontal">
                <div class="card-body">
                    <h5 class="card-title"><b>INV/{{ $invoice->user_id }}/{{ $invoice->id }}/{{ $invoice->created_at }}</b></h5><!--INV_IDPembeli_NoInvoicePembeli_TglCheckout-->
                    {{-- <p class="card-text">Tanggal Pembayaran : <span>-</span></p> --}}
                    <p class="card-text">Deadline Pembayaran : <span>{{ $invoice->deadline }}</span></p>
                    <p class="card-text"><small>Status : 
                        @if ($invoice->status == 'belum')
                        <span class="text-muted">Menunggu Pembayaran</span>
                        @elseif ($invoice->status == 'berhasil')
                        <span class="text-success">Berhasil</span>
                        @else
                        <span class="text-danger">Gagal</span>
                        @endif    
                </small></p>
                </div>
                <div class="card-body align-self-center">
                    <a class="btn btn-detail" title="Detail Invoice" href="{{ url('/detail-invoice'.'/'.$invoice->id) }}">
                        Detail Invoice
                    </a>
                    <a class="btn btn-detail" title="Detail Invoice" href="{{ url('/detail-invoice') }}">
                        Batalkan Invoice
                    </a>
                </div>
            </div>
        </div>
        @endforeach
        {{-- <div class="card">
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
        </div> --}}
    </div>
</div>
@endsection
