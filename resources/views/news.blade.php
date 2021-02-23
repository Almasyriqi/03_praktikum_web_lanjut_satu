@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Halaman Daftar News</h2>
    <ul class="list-group">
        <li class="list-group-item"><a href="/news/1">Berita Utama</a></li>
        <li class="list-group-item"><a href="/news/2">Berita Covid</a></li>			
    </ul>
    <br><br>
    <h4>Berita {{$news}}</h4>
    <p>{{$paragraf}}</p>
</div>
@endsection