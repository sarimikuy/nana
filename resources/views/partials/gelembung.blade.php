{{-- Gelembung latar: dibuat dengan looping, tiap gelembung punya ukuran, blur, dan kecepatan berbeda --}}
<div class="gelembung-wadah" aria-hidden="true">
    @for ($i = 0; $i < 20; $i++)
        @php
            $ukuran = 36 + (($i * 53) % 150);      // px
            $kiri   = ($i * 37 + 5) % 100;         // %
            $durasi = 18 + (($i * 7) % 20);        // detik
            $tunda  = -(($i * 5) % 24);            // detik (negatif = sudah berjalan)
            $blur   = ($i % 4) * 1.6;              // px
            $opa    = 0.4 + (($i % 5) * 0.12);
            $goyang = 20 + (($i * 11) % 70);       // px
            $dalam  = 12 + (($i * 13) % 70);       // kekuatan parallax
        @endphp
        <span class="gelembung" style="--size:{{ $ukuran }}px;--kiri:{{ $kiri }}%;--dalam:{{ $dalam }};">
            <i style="--dur:{{ $durasi }}s;--tunda:{{ $tunda }}s;--blur:{{ $blur }}px;--op:{{ $opa }};--goyang:{{ $goyang }}px;"></i>
        </span>
    @endfor
</div>
