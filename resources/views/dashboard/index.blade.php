@extends('dashboard.layouts.main')

@section('container')
    <br>
    <div class="card bg-light">
        <div class="d-flex justify-content-center flex-wrap flex-md-nowrap align-items-center pt-4 pb-2 mb-3">
            <h4 class="h4 ">Welcome back, {{ auth()->user()->name }}</h4>
        </div>
        <h5 class="mt-2" align="center">
            <?php
            date_default_timezone_set('Asia/Jakarta'); // Zona Waktu indonesia
            echo date('G:i') . ' WIB - '; // menampilkan jam sekarang
            ?>
            <script>
                var h = (new Date()).getHours();
                var m = (new Date()).getMinutes();
                var s = (new Date()).getSeconds();
                if (h >= 4 && h < 10) document.writeln("Selamat pagi 👋");
                if (h >= 10 && h < 15) document.writeln("Selamat siang 👋");
                if (h >= 15 && h < 18) document.writeln("Selamat sore 👋");
                if (h >= 18 || h < 4) document.writeln("Selamat malam 👋");
            </script>
        </h5>
        <br>
    </div>
    <br>
@endsection
