@extends('layouts.app')

@section('title', 'Beranda')

@section('content')
<section class="wadah">
    <div class="kaca hero">
        <p class="sapaan">Halo, saya</p>
        <h1 class="nama">{{ $nama }}</h1>
        <p class="peran">{{ $peran }}</p>
        <div class="tombol-grup">
            <a href="{{ route('tentang') }}" class="tombol">Kenali saya</a>
            <a href="{{ route('galeri') }}" class="tombol tombol-putih">Lihat galeri</a>
        </div>
    </div>
</section>
@endsection
