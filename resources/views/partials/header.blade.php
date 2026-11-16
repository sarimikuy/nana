<header class="header">
    <div class="wadah header-isi">
        <a href="{{ route('beranda') }}" class="logo">Profil Saya</a>
        <nav class="menu">
            <a href="{{ route('beranda') }}"  class="{{ request()->routeIs('beranda') ? 'aktif' : '' }}">Beranda</a>
            <a href="{{ route('tentang') }}"  class="{{ request()->routeIs('tentang') ? 'aktif' : '' }}">Tentang</a>
            <a href="{{ route('galeri') }}"   class="{{ request()->routeIs('galeri') ? 'aktif' : '' }}">Galeri</a>
        </nav>
    </div>
</header>
