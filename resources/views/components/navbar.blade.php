<nav class="site-nav" aria-label="Navigasi utama">
    <div class="site-nav__inner">
        <a class="site-brand" href="{{ url('/user') }}">
            <span class="site-brand__mark">P</span>
            <span>PWL <span class="site-brand__divider">//</span> 04</span>
        </a>
        <div class="site-nav__links">
            <a href="{{ url('/user') }}">Daftar Pengguna</a>
            <a href="{{ route('user.create') }}">Buat Pengguna</a>
        </div>
    </div>
</nav>