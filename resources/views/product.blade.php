@extends('layouts.app')

@section('content')

<div class="container">
    <h2>Halaman Daftar Produk</h2>
    <ul class="list-group">
        @for($i = 0; $i < 4; $i++)
        <li class="list-group-item"><a href="produk/{{$url[$i]}}">{{$produk[$i]}}</a></li>
        @endfor
    </ul>
</div>
@endsection