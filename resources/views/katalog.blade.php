@extends('layouts.template')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-8">
            <h3>Kategori</h3>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1" checked>
                <label class="form-check-label" for="flexRadioDefault1">
                    Semua Produk
                </label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2">
                <label class="form-check-label" for="flexRadioDefault2">
                    Ikan Hias
                </label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2">
                <label class="form-check-label" for="flexRadioDefault2">
                    Ikan Hias
                </label>
            </div>
        </div>
        <div class="col-4">

        </div>
    </div>
</div>

@endsection