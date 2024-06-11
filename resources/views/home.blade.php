@extends('layouts.template')

@section('content')
    <section id="home">
        <h2>Belajar Daring Wikimedia Indonesia</h2>
        <p>Kelas Daring Wikimedia Indonesia menyediakan materi-materi pelatihan untuk berkontribusi di proyek-proyek Wikimedia. Materi-materi yang tersedia di Kelas Daring Wikimedia Indonesia dapat diakses dan diikuti oleh publik secara daring (online). Kelas Daring Wikimedia Indonesia dikelola langsung oleh Wikimedia Indonesia.</p>
        <div class="btn">
            <a class="course-btn" href="#">Jelajahi Kursus</a>
            <a class="about-btn" href="#">Tentang Kami</a>
        </div>
    </section>

    <!-- Course -->
    <section id="course">
        <h1>Kursus yang Tersedia</h1>
        <p>WikiLatih Daring adalah program pelatihan penyuntingan di Wikipedia yang diadakan secara daring.</p>
        <div class="course-box">
            @foreach($kursus as $crs)
                <div class="courses">
                    <img src="{{ asset($crs->image_url) }}" alt="">
                    <div class="details">
                        <h4>{{ $crs->name }}
                            <a href="" class="edit-btn"></a>
                        </h4>
                        <p>Pelatih: {{ $crs->trainer }}</p>
                    </div>
                </div>
            @endforeach
        </div>
    </section>

    <!-- Article -->
    <section id="article" class="py-16 grid grid-cols-1">
        <h1 class="text-center text-[20px] font-extrabold mb-6 text-white">Artikel Terbaru</h1>
        <div id="article-collection">
            <div id="article-card" class="bg-white flex w-4/5 md:w-3/5 lg:w-2/5 m-auto rounded-2xl p-6 my-8 shadow-md">
                <img src="assets\Wikimedia.svg" class="w-40 h-40 rounded-2xl">
                <div class="grid grid-cols-1 ml-8 h-40 place-content-between">
                    <div>
                        <p class="text-[18px] font-bold">Judul Artikel 1</p>
                        <p class="text-[16px] font-normal">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                    </div>
                    <p class="text-right text-[16px] font-normal">6 Juni 2024</p>
                </div>
            </div>
            <div id="article-card" class="bg-white flex w-4/5 md:w-3/5 lg:w-2/5 m-auto rounded-2xl p-6 my-8 shadow-md">
                <img src="assets\Wikimedia.svg" class="w-40 h-40 rounded-2xl">
                <div class="grid grid-cols-1 ml-8 h-40 place-content-between">
                    <div>
                        <p class="text-[18px] font-bold">Judul Artikel 2</p>
                        <p class="text-[16px] font-normal">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                    </div>
                    <p class="text-right text-[16px] font-normal">5 Juni 2024</p>
                </div>
            </div>
            <div id="article-card" class="bg-white flex w-4/5 md:w-3/5 lg:w-2/5 m-auto rounded-2xl p-6 my-8 shadow-md">
                <img src="assets\Wikimedia.svg" class="w-40 h-40 rounded-2xl">
                <div class="grid grid-cols-1 ml-8 h-40 place-content-between">
                    <div>
                        <p class="text-[18px] font-bold">Judul Artikel 3</p>
                        <p class="text-[16px] font-normal">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                    </div>
                    <p class="text-right text-[16px] font-normal">4 Juni 2024</p>
                </div>
            </div>
        </div>
        <a class="place-self-center" href="/article"><button class="w-[200px] h-[50px] bg-[#339966] hover:bg-white text-white hover:text-[#339966] text-[16px] font-bold  mt-6 rounded-md ease-linear duration-200">Artikel Lainnya</button></a>
    </section>
@endsection