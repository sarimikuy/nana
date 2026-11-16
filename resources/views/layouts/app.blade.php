<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title') | Identitas Diri</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>
    {{-- GELEMBUNG LATAR --}}
    @include('partials.gelembung')

    {{-- HEADER --}}
    @include('partials.header')

    {{-- BODY / ISI HALAMAN --}}
    <main class="konten">
        @yield('content')
    </main>

    {{-- FOOTER --}}
    @include('partials.footer')

    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
