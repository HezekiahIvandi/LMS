@extends('layouts.template')

@section('content')
    <section id="about-hero">
        <h2>Tentang Kami</h2>
        <p><b>Wikimedia Indonesia</b> adalah organisasi nirlaba dan merupakan mitra lokal dari Wikimedia Foundation, pengelola situs populer dunia Wikipedia dan proyek-proyek berbasis wiki lainnya. Wikimedia Indonesia berdedikasi untuk mendorong pertumbuhan, pengembangan, dan penyebaran pengetahuan dalam bahasa Indonesia dan bahasa lain yang dipertuturkan di Indonesia secara bebas dan gratis.</p>
        <div class="btn">
            <a class="program-btn" href="#program">Lihat Proyek Kami</a>
        </div>
    </section>

    <!-- Program -->
    <section id="program">
        <h1>Proyek-proyek Wikimedia Foundation</h1>
        <p><span>Wikimedia Indonesia</span> mendukung proyek-proyek wiki yang dinaungi oleh Wikimedia Foundation dalam bahasa Indonesia dan bahasa-bahasa lain yang dipertuturkan di Indonesia. Kami mendorong Anda untuk turut menyumbangkan kontribusi Anda di proyek-proyek wiki tersebut.</p>
        <div class="fea-base">
            <div class="fea-box">
                <i class="bi bi-globe-asia-australia"></i>
                <h3>Wikipedia</h3>
                <p>Ensiklopedia dan komunitas daring yang tertarik membangun dan menggunakan ensiklopedia berkualitas tinggi.</p>
            </div>

            <div class="fea-box">
                <i class="bi bi-translate"></i>
                <h3>Wiktionary</h3>
                <p>Kamus wiki bebas (termasuk kata, frasa, peribahasa dan lainnya) yang tersedia dalam berbagai bahasa.</p>
            </div>

            <div class="fea-box">
                <i class="bi bi-book-half"></i>
                <h3>Wikibooks</h3>
                <p>Koleksi buku bebas yang bisa disunting oleh siapa saja, termasuk buku ilmu pengetahuan, fiksi, tata cara penggunaan dan swakriya.</p>
            </div>

            <div class="fea-box">
                <i class="bi bi-file-earmark-medical-fill"></i>
                <h3>Wikisource</h3>
                <p>Perpustakaan daring yang berisikan naskah bebas. Wikisource dipelihara oleh komunitas dengan 24.236 pengguna.</p>
            </div>

            <div class="fea-box">
                <i class="bi bi-chat-quote-fill"></i>
                <h3>Wikiquote</h3>
                <p>Koleksi kutipan bebas yang dibangun oleh para penggunanya secara bersama-sama dan bersifat terbuka.</p>
            </div>

            <div class="fea-box">
                <i class="bi bi-folder-symlink-fill"></i>
                <h3>Wikimedia Commons</h3>
                <p>Tempat penyimpanan yang dapat digunakan untuk menyimpan foto, diagram, animasi, musik, pidato, klip video dan lainnya.</p>
            </div>

            <div class="fea-box">
                <i class="bi bi-database-fill-up"></i>
                <h3>Wikidata</h3>
                <p>Sebuah proyek Wikimedia yang bertujuan menciptakan pangkalan data terbuka dan dapat disunting siapa saja.</p>
            </div>
        </div>
    </section>
@endsection