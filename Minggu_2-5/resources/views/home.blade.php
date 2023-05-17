@extends('layouts.app') {{-- menghubungkan view ke view master --}}

@section('content') {{-- mendefinisikan sebuah bagian (section) dari isi halaman web --}}
    <div class="jumbotron jumbotron-fluid">
        <div class="container">
            <h1 class="display-4">Hal Home</h1>
            <p class="lead">Isi Home :</p>
        </div>
        <p>Nama : {{ $nama }}</p>
        <p>Mata Kuliah</p>
        <ul>
            @foreach($pelajaran as $p)
                <li>{{ $p }}</li>
            @endforeach
    </div>
@endsection
