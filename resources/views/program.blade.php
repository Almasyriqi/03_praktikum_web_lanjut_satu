@extends('layouts.app')

@section('content')

<div class="container">
    <h2>Halaman Daftar Program</h2>
    <ul class="list-group">
        @for($i = 0; $i < 3; $i++)
        <li class="list-group-item"><a href="program/{{$url[$i]}}">{{$program[$i]}}</a></li>
        @endfor
    </ul>
</div>
@endsection