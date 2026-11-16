<?php

namespace App\Http\Controllers;

class ProfilController extends Controller
{
    // Ganti dengan nama Anda
    private string $nama = 'Zaki Amjad';

    // 1. Landing page: nama diambil dari controller
    public function beranda()
    {
        return view('pages.beranda', [
            'nama'  => $this->nama,
            'peran' => 'Mahasiswa',
        ]);
    }

    // 2. Tentang saya: data dilooping di view
    public function tentang()
    {
        $profil = [
            'Nama'           => $this->nama,
            'Tempat tinggal' => 'Denpasar, Bali',
            'Pendidikan'     => 'S1 Teknik Informatika',
            'Pekerjaan'      => 'Nganggur',
        ];

        $keahlian = ['Guitar Shred'];

        $hobi = ['Bergitar', 'Fotografi'];

        return view('pages.tentang', [
            'nama'     => $this->nama,
            'profil'   => $profil,
            'keahlian' => $keahlian,
            'hobi'     => $hobi,
        ]);
    }

    // 3. Galeri: foto dilooping di view
    public function galeri()
    {
        // Kolom 'file' bisa berisi:
        //  - URL lengkap  : 'https://contoh.com/fotoku.jpg'
        //  - nama file lokal di public/images/galeri/ : 'foto6.svg'
        $foto = [
            ['judul' => 'Mobile legend',     'file' => 'bali.jpg',   'ket' => 'Main Luo Yi'],
            ['judul' => 'Ngepush',          'file' => 'glory.jpg', 'ket' => 'Dikit Lagi Immortal'],
            ['judul' => 'Bergitar',           'file' => 'gitar.jpg',  'ket' => 'Main di Makrab IMV'],
            ['judul' => 'Fotoin CJ', 'file' => 'cj.jpg',   'ket' => 'biar kek scene analog'],
            ['judul' => 'Gitar LAGI',             'file' => 'gitaran.jpg',    'ket' => 'Main di Open House'],
            ['judul' => 'Pedal Baru',       'file' => 'efek.jpg',                                  'ket' => 'NUX User'],
        ];

        return view('pages.galeri', [
            'nama' => $this->nama,
            'foto' => $foto,
        ]);
    }
}
