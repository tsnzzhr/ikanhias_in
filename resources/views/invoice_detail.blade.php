@extends('layouts.template')
<title>Ikanhias.in | Lihat Invoice</title>
<link href="{{ asset('css/invoice.css') }}" rel="stylesheet">

@section('content') 
<div class="container mt-4 invoice-detail p-0">
    <h2 class="title" style="font-weight: 800;">Detail Invoice</h2>
    <div class="row invoice-dtl mt-5 ml-0 mr-0">
        <div class="col">
            <h3>Detail Belanja</h3>
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>Produk</th>
                        <th>Jumlah</th>
                        <th>Total Harga</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Aquarium Mini-tube</td>
                        <td>1</td>
                        <td>Rp<span>150,000</span></td>
                    </tr>
                    <tr>
                        <td>Cupang Halfmoon-Yellowlight</td>
                        <td>2</td>
                        <td>Rp<span>120,000</span></td>
                    </tr>
                    <tr>
                        <td>Koi Ochiba Sigure</td>
                        <td>1</td>
                        <td>Rp<span>200,000</span></td>
                    </tr>
                </tbody>
            </table>
            <h4><b>Total Harga : Rp<span>470,000</span></b></h4>
        </div>
        <div class="vl"></div>
        <div class="col">
            <h3>Detail Informasi</h3>
            <table class="table table-striped">
                <tbody>
                    <tr>
                        <td>ID Invoice :</td>
                        <td><span>INV/001/01/19112021</span></td>
                    </tr>
                    <tr>
                        <td>Metode Pembayaran :</td>
                        <td><span>OVO Payment Service</span></td>
                    </tr>
                    <tr>
                        <td>Nomor Rekening/Akun Tujuan :</td>
                        <td><span>+628123456789</span></td>
                    </tr>
                    <tr>
                        <td>Rekening/Akun Atas Nama :</td>
                        <td><span>Budi</span></td>
                    </tr>
                    <tr>
                        <td>Deadline Pembayaran :</td>
                        <td><span>11 November 2021 23:59:59</span></td>
                    </tr>
                    <tr>
                        <td>Tanggal Pembayaran :</td>
                        <td><span>-</span></td>
                    </tr>
                    <tr>
                        <td>Status Invoice :</td>
                        <td><span class="text-muted">Menunggu Pembayaran</span></td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
            
    <div class="tombol">
        <a href="{{  url('invoice') }}">Kembali</a>
    </div>
    </div>
@endsection
