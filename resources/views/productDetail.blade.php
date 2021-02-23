@extends('layouts.app')

@section('content')
    <div class="container">
        <h2>Halaman Detail Produk</h2><br>
        <h5>Nama : {{$name}}</h5>
        <h5>Harga : {{$harga}}</h5>
        <br>
        <a href="/produk"><button type="button" class="btn btn-primary">Kembali</button></a>
    </div>
@endsection