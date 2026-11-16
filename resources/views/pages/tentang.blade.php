@extends('layouts.app')

@section('title', 'Tentang Saya')

@section('content')
<section class="wadah">
    <h1 class="judul">Tentang {{ $nama }}</h1>

    <div class="kaca">
        <h2 class="sub">Data diri</h2>
        <dl class="data">
            @foreach ($profil as $label => $isi)
                <dt>{{ $label }}</dt>
                <dd>{{ $isi }}</dd>
            @endforeach
        </dl>
    </div>

    <div class="kaca">
        <h2 class="sub">Keahlian</h2>
        <ul class="chip">
            @foreach ($keahlian as $item)
                <li>{{ $item }}</li>
            @endforeach
        </ul>
    </div>

    <div class="kaca">
        <h2 class="sub">Hobi</h2>
        <ul class="daftar">
            @foreach ($hobi as $item)
                <li>{{ $item }}</li>
            @endforeach
        </ul>
    </div>
</section>
@endsection
