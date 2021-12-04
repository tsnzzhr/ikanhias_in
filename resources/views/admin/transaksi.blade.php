@extends('admin.side-dashboard')
@section('dashboard')        

<link
    rel="stylesheet"
    href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback"
  />
  <!-- Font Awesome -->
  <link rel="stylesheet" href="{{ asset('css/all.min.css') }}" />
  <!-- Ionicons -->
  <link
    rel="stylesheet"
    href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css"
  />
  <!-- Tempusdominus Bootstrap 4 -->
  <link
    rel="stylesheet"
    href="{{ asset('css/tempusdominus-bootstrap-4.min.css')}}"
  />
  <!-- iCheck -->
  <link
    rel="stylesheet"
    href="{{ asset('css/icheck-bootstrap.min.css')}}"
  />
  <!-- JQVMap -->
  <link rel="stylesheet" href="{{asset('css/jqvmap.min.css')}}" />
  <!-- Theme style -->
  <link rel="stylesheet" href="{{asset('css/adminlte.min.css')}}" />
  <!-- overlayScrollbars -->
  <link
    rel="stylesheet"
    href="../../plugins/overlayScrollbars/css/OverlayScrollbars.min.css"
  />
  <!-- Daterange picker -->
  <link rel="stylesheet" href="../../plugins/daterangepicker/daterangepicker.css" />
  <!-- summernote -->
  <link rel="stylesheet" href="../../plugins/summernote/summernote-bs4.min.css" />
  <div class="container hold-transition sidebar-mini layout-fixed">
    <!-- Content Wrapper. Contains page content -->
      <!-- Content Header (Page header) -->
      <section class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-6">
              <h1>Riwayat Transaksi</h1>
            </div>
            <div class="col-sm-6">
              <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="{{ url('dashboard')}}">Dashboard</a></li>
                <li class="breadcrumb-item active">Transaksi</li>
              </ol>
            </div>
          </div>
        </div>
        <!-- /.container-fluid -->
      </section>

      <!-- Main content -->
      <section class="content">
        <!-- Default box -->
        <div class="card">
          <div class="card-body p-0">
            <table class="table table-striped projects">
              <thead>
                <tr>
                  <th style="width: 5%">ID Invoice</th>
                  <th style="width: 10%">Tanggal</th>
                  <th style="width: 12%">User</th>
                  <th style="width: 12%">Produk</th>
                  <th style="width: 8%">Jumlah</th>
                  <th style="width: 12%">Total Pembayaran</th>
                  <th style="width: 8%">Metode Pembayaran</th>
                  <th style="width: 8%">Status</th>
                  <!-- <th style="width: 15%" class="text-center">Aksi</th> -->
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>#</td>
                  <td>
                    <a>12/12/2021</a>
                  </td>
                  <td>
                    <a> Hallo </a>
                  </td>
                  <td>
                    <a>Ikan hias</a>
                  </td>
                  <td>
                    <a> 2</a>
                  </td>
                  <td>
                    <a>100000</a>
                  </td>
                  <td>
                    <a>Ovo</a>
                  </td>
                  <td>
                    <a>sukses</a>
                  </td>
                </tr>
                <tr>
                    <td>#</td>
                    <td>
                      <a>12/12/2021</a>
                    </td>
                    <td>
                      <a> Hallo </a>
                    </td>
                    <td>
                      <a>Ikan hias</a>
                    </td>
                    <td>
                      <a> 2</a>
                    </td>
                    <td>
                      <a>100000</a>
                    </td>
                    <td>
                      <a>Ovo</a>
                    </td>
                    <td>
                      <a>sukses</a>
                    </td>
                  </tr>
                  <tr>
                    <td>#</td>
                    <td>
                      <a>12/12/2021</a>
                    </td>
                    <td>
                      <a> Hallo </a>
                    </td>
                    <td>
                      <a>Ikan hias</a>
                    </td>
                    <td>
                      <a> 2</a>
                    </td>
                    <td>
                      <a>100000</a>
                    </td>
                    <td>
                      <a>Ovo</a>
                    </td>
                    <td>
                      <a>sukses</a>
                    </td>
                  </tr>
                  <tr>
                    <td>#</td>
                    <td>
                      <a>12/12/2021</a>
                    </td>
                    <td>
                      <a> Hallo </a>
                    </td>
                    <td>
                      <a>Ikan hias</a>
                    </td>
                    <td>
                      <a> 2</a>
                    </td>
                    <td>
                      <a>100000</a>
                    </td>
                    <td>
                      <a>Ovo</a>
                    </td>
                    <td>
                      <a>sukses</a>
                    </td>
                  </tr>
              </tbody>
            </table>
            <div class="row">
              <div class="col-sm-12">
              <nav aria-label="Page navigation example">
                <ul class="pagination justify-content-center">
                  <li class="page-item disabled">
                    <a class="page-link" href="#" tabindex="-1" aria-disabled="true">Previous</a>
                  </li>
                  <li class="page-item"><a class="page-link" href="#">1</a></li>
                  <li class="page-item"><a class="page-link" href="#">2</a></li>
                  <li class="page-item"><a class="page-link" href="#">3</a></li>
                  <li class="page-item">
                    <a class="page-link" href="#">Next</a>
                  </li>
                </ul>
              </nav>
            </div>
          </div>
        </div>
      </section>
  </div>
    @endsection
  
