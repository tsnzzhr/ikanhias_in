<!DOCTYPE html>
<html>
<head>
    <title>Dashboard | Produk</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-alpha/css/bootstrap.css" rel="stylesheet">
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
  <link rel="stylesheet" href="{{ asset('css/admin.css') }}"/>
</head>
<body>
@extends('admin.side-dashboard')    

@section('dashboard')
<div class="container">
    @yield('content')
</div>
@endsection
   
</body>
</html>