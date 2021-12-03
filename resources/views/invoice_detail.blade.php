@extends('layouts.template')
<title>Ikanhias.in | Lihat Invoice</title>
<link href="{{ asset('css/invoice.css') }}" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js"></script>
<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"/>

@section('content') 
<div class="container mt-4 invoice-detail p-0">
    <h2 class="title" style="font-weight: 800;">Detail Invoice</h2>
    <div class="card m-3">
        <div class="row d-flex justify-content-between px-3 top">
            <div class="tag-invoice">
                <h5 class="font-weight-bold">ORDER : <span>#IKNHS00001</span></h5>
                <p class="m-0">Estimasi Tiba : <span>22/11/21 15:30:00</span></p>
            </div>
        </div> <!-- Add class 'active' to progress -->
        <div class="row d-flex justify-content-center">
            <div class="col-12">
                <ul id="progressbar" class="text-center">
                    <li class="active step0"></li>
                    <li class="active step0"></li>
                    <li class="active step0"></li>
                    <li class="step0"></li>
                </ul>
            </div>
        </div>
        <div class="row justify-content-between top">
            <div class="row d-flex icon-content"> 
                <i class="icon fas fa-rocket"></i>
                <div class="d-flex flex-column">
                    <p class="font-weight-bold">Order<br>Diproses</p>
                </div>
            </div>
            <div class="row d-flex icon-content">
                <i class="icon fas fa-suitcase"></i>
                <div class="d-flex flex-column">
                    <p class="font-weight-bold">Order<br>Dikemas</p>
                </div>
            </div>
            <div class="row d-flex icon-content">
                <i class="icon fas fa-dolly-flatbed"></i>
                <div class="d-flex flex-column">
                    <p class="font-weight-bold">Order<br>Dikirim</p>
                </div>
            </div>
            <div class="row d-flex icon-content">
                <i class="icon fas fa-people-carry"></i>
                <div class="d-flex flex-column">
                    <p class="font-weight-bold">Order<br>Diterima</p>
                </div>
            </div>
        </div>
    </div>
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
