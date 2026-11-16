@extends('layouts.app')

@section('title', 'Galeri')

@section('content')
<section class="wadah">
    <h1 class="judul">Galeri {{ $nama }}</h1>

    <div class="grid-galeri">
        @forelse ($foto as $item)
            @php
                // Jika diawali http:// atau https:// pakai URL langsung, selain itu ambil dari folder public
                $src = str_starts_with($item['file'], 'http')
                    ? $item['file']
                    : asset('images/galeri/' . $item['file']);
            @endphp
            <figure class="foto kaca">
                <img src="{{ $src }}" alt="{{ $item['judul'] }}" loading="lazy">
                <figcaption>
                    <strong>{{ $item['judul'] }}</strong>
                    <span>{{ $item['ket'] }}</span>
                </figcaption>
            </figure>
        @empty
            <p class="kaca">Belum ada foto. Tambahkan data foto di ProfilController.</p>
        @endforelse
    </div>
</section>
@endsection
