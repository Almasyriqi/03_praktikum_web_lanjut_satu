@extends('layouts.app')

@section('content')
    <div class="container">
        <h3>Halaman {{$name}}</h3><br>
        <p>{{$keterangan}}</p>
        
        <a href="/program"><button type="button" class="btn btn-primary">Kembali</button></a>
    </div>
@endsection