<nav>
    <img src="{{ URL::asset('assets\Ikon WikiLatih.png') }}" alt="Ikon WikiLatih">
    <div class="navigation">
        <ul>
            <li><a href="/">Beranda</a></li>
            <li><a href="#">Kursus</a></li>
            <li><a href="/article">Artikel</a></li>
            <li><a href="{{ route('announcement.index') }}">Pengumuman</a></li>
            <li><a href="{{ route('about') }}">Tentang Kami</a></li>
        </ul>
    </div>
</nav>