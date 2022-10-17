@extends('layout.main')
<!--memanghubungkan halaman di layout-->
@section('container')
    <!--memanghubungkan halaman main.blade atau folder utama-->
    <h1>Halaman About</h1>
    <h3>{{ $name }}</h3>
    <p>{{ $email }}</p>
    <img src="img/{{ $image }}" alt="aziz" width="200" class="img-thumbnail rounded-circle">
@endsection
