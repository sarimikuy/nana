(function () {
    var kurangiGerak = window.matchMedia('(prefers-reduced-motion: reduce)').matches;
    var root = document.documentElement;
    var panel = document.querySelectorAll('.kaca');

    // urutan muncul panel
    panel.forEach(function (el, i) { el.style.setProperty('--i', i); });

    // ---------- percikan gelembung ----------
    function percik(x, y, jumlah, kecil) {
        if (kurangiGerak) return;
        for (var i = 0; i < jumlah; i++) {
            var b = document.createElement('span');
            var ukuran = kecil ? 6 + Math.random() * 10 : 10 + Math.random() * 28;
            var sudut = Math.random() * Math.PI * 2;
            var jarak = kecil ? 20 + Math.random() * 30 : 50 + Math.random() * 90;
            b.className = 'percik';
            b.style.setProperty('--x', x + 'px');
            b.style.setProperty('--y', y + 'px');
            b.style.setProperty('--s', ukuran + 'px');
            b.style.setProperty('--dx', Math.cos(sudut) * jarak + 'px');
            b.style.setProperty('--dy', (Math.sin(sudut) * jarak - (kecil ? 30 : 40)) + 'px');
            b.style.setProperty('--d', (600 + Math.random() * 600) + 'ms');
            b.addEventListener('animationend', function () { this.remove(); });
            document.body.appendChild(b);
        }
    }

    // ---------- gerakan kursor ----------
    var terakhirJejak = 0;
    window.addEventListener('pointermove', function (e) {
        if (kurangiGerak) return;
        // parallax gelembung latar
        root.style.setProperty('--mx', (e.clientX / window.innerWidth - 0.5).toFixed(3));
        root.style.setProperty('--my', (e.clientY / window.innerHeight - 0.5).toFixed(3));
        // jejak gelembung kecil di belakang kursor (hanya mouse)
        var now = Date.now();
        if (e.pointerType === 'mouse' && now - terakhirJejak > 140) {
            terakhirJejak = now;
            percik(e.clientX, e.clientY, 1, true);
        }
    });

    // ---------- kilau & miring (tilt) pada panel ----------
    panel.forEach(function (el) {
        var miring = el.classList.contains('foto') || el.classList.contains('hero');
        el.addEventListener('pointermove', function (e) {
            var r = el.getBoundingClientRect();
            var px = (e.clientX - r.left) / r.width;
            var py = (e.clientY - r.top) / r.height;
            el.style.setProperty('--gx', (px * 100) + '%');
            el.style.setProperty('--gy', (py * 100) + '%');
            if (miring && !kurangiGerak) {
                el.style.setProperty('--rx', ((0.5 - py) * 8).toFixed(2) + 'deg');
                el.style.setProperty('--ry', ((px - 0.5) * 8).toFixed(2) + 'deg');
            }
        });
        el.addEventListener('pointerleave', function () {
            el.style.setProperty('--rx', '0deg');
            el.style.setProperty('--ry', '0deg');
        });
    });

    // ---------- klik: riak, percikan, pecahkan gelembung, pindah halaman halus ----------
    function riak(el, e) {
        var r = el.getBoundingClientRect();
        var s = document.createElement('span');
        s.className = 'riak';
        s.style.left = (e.clientX - r.left) + 'px';
        s.style.top = (e.clientY - r.top) + 'px';
        s.addEventListener('animationend', function () { s.remove(); });
        el.appendChild(s);
    }

    function pecahkanGelembung(x, y) {
        document.querySelectorAll('.gelembung i').forEach(function (g) {
            if (g.classList.contains('pecah')) return;
            var r = g.getBoundingClientRect();
            var cx = r.left + r.width / 2, cy = r.top + r.height / 2;
            if (Math.hypot(x - cx, y - cy) <= r.width / 2) {
                g.classList.add('pecah');
                percik(cx, cy, 6, false);
                g.addEventListener('animationend', function fin(ev) {
                    if (ev.animationName !== 'pecah') return;
                    g.removeEventListener('animationend', fin);
                    g.style.animationDelay = '0s'; // muncul lagi dari bawah
                    g.classList.remove('pecah');
                });
            }
        });
    }

    document.addEventListener('click', function (e) {
        var tombol = e.target.closest('.tombol, .menu a');
        var link = e.target.closest('a');

        percik(e.clientX, e.clientY, tombol ? 12 : 8, false);
        pecahkanGelembung(e.clientX, e.clientY);
        if (tombol) riak(tombol, e);

        // transisi halus sebelum pindah halaman
        if (link && !kurangiGerak && link.origin === location.origin && !link.target &&
            link.pathname !== location.pathname &&
            !e.metaKey && !e.ctrlKey && !e.shiftKey && e.button === 0) {
            e.preventDefault();
            document.body.classList.add('keluar');
            setTimeout(function () { location.href = link.href; }, 320);
        }
    });

    // saat kembali dengan tombol back
    window.addEventListener('pageshow', function () { document.body.classList.remove('keluar'); });
})();
