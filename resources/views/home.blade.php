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
        @php
        $count = 0;
        @endphp
        @foreach($kursus as $crs)
        <!-- Membatasi untuk hanya menampilkan 4 kursus -->
        @if ($count < 4)
        <div class="courses">
            <img src="{{ asset($crs->image_url) }}" alt="">
            <div class="details">
                <h4>{{ $crs->name }}
                    <a href="" class="edit-btn"></a>
                </h4>
                <p>Pelatih: {{ $crs->trainer }}</p>
            </div>
        </div>
        @php
        $count++;
        @endphp
        @endif
        @endforeach
    </div>

    <!-- Button "Lihat Selengkapnya" -->
    <div id="full-course" class="text-center mt-4">
        <a href="{{ route('kursus.index') }}" class="full-course-btn">Lihat Selengkapnya</a>
    </div>
</section>


<!-- Article -->
<section id="article" class="py-16 grid grid-cols-1">
    <h1 class="text-center text-[20px] font-extrabold mb-[10px] text-white">Artikel Terbaru</h1>
    <p class="text-center text-[16px] font-medium text-white mb-2">Berikut adalah artikel-artikel terbaru yang dipublikasi oleh Wikimedia</p>
    <div id="article-collection" class="mb-8">
        @php
        $count = 0;
        @endphp

        @foreach ($article as $art)
        <!-- Membatasi untuk hanya menampilkann 3 artikel -->
        @if ($count < 3) 
        <div id="article-card" class="bg-white w-4/5 md:w-4/5 lg:w-3/5 mx-auto rounded-lg p-6 my-8 shadow-md cursor-pointer" onclick="handleCardClick(event, `{{ route('article.content', $art->id) }}`)">
            <div class="flex">
                <img src="{{ URL::asset($art->article_image) }}" class="w-48 md:w-60 h-36 md:h-48 rounded-lg object-fill">
                <div class="grid grid-cols-1 ml-8 h-40 place-content-between w-full">
                    <div>
                        <p class="text-[18px] font-bold">{{ $art->article_title }}</p>
                        <p class="text-[16px] font-normal line-clamp-3">{{ $art->article_content }}</p>
                    </div>
                    <p class="text-right text-[16px] font-normal">{{ $art->created_at->format('d M Y H:i') }}</p>
                </div>
            </div>
            <div class="w-full flex">
                <div class="ml-auto flex">
                    <form action="{{ route('article.edit', $art->id) }}" method="GET">
                        @csrf
                        <button class="text-white bg-[#006699] hover:bg-[#0c374d] ease transition text=[14px] font-semibold py-[8px] px-[10px] rounded mr-[10px]">Sunting Artikel</button>
                    </form>
                    <form action="{{ route('article.destroy', $art->id) }}" method="POST" onsubmit="return confirm('Anda yakin ingin menghapus artikel ini?');">
                        @method('delete')
                        @csrf
                        <button type="submit" class="text-white bg-[#339966] hover:bg-[#115734] ease transition text=[14px] font-semibold py-[8px] px-[10px] rounded ">Hapus Artikel</button>
                    </form>
                </div>
            </div>
        </div>
        @endif
        @php
        $count++;
        @endphp
        @endforeach
    </div>
    <a class="place-self-center" href="/article"><button class="w-[200px] h-[50px] bg-[#339966] text-[#ffffff] hover:text-[#339966] hover:bg-[#ffffff] text-[16px] font-bold rounded-md ease-in-out duration-200">Artikel Lainnya</button></a>
</section>

<!-- Profil pelatih dan Koordinator -->
<section id="trainer" class="bg-[#f9f9f9] text-center w-full p-[60px]">
    <h1 class="text-[20px] mb-6 font-extrabold">Pengajar dan Koordinator Wikimedia Indonesia</h1>
    <div class="flex flex-wrap place-content-around">
        <div id="trainer-card" class="w-[300px] bg-white shadow rounded-lg m-4 p-4 hover:translate-y-[-10px] duration-200 ease">
            <img src="assets/Person_Icon.png" class="w-[200px] mx-auto mb-2 rounded-full border-white border-8 bg-white">
            <p class="text-[18px] text-white font-semibold">Harri Rahdian</p>
            <p class="text-white">Project Manager</p>
        </div>
        <div id="trainer-card" class="w-[300px] bg-white shadow rounded-lg m-4 p-4 hover:translate-y-[-10px] duration-200 ease">
            <img src="assets/Person_Icon.png" class="w-[200px] mx-auto mb-2 rounded-full border-white border-8 bg-white">
            <p class="text-[18px] text-white font-semibold">Dian Agustin</p>
            <p class="text-white">Pelatih</p>
        </div>
        <div id="trainer-card" class="w-[300px] bg-white shadow rounded-lg m-4 p-4 hover:translate-y-[-10px] duration-200 ease">
            <img src="assets/Person_Icon.png" class="w-[200px] mx-auto mb-2 rounded-full border-white border-8 bg-white">
            <p class="text-[18px] text-white font-semibold">Ayu Sutastri</p>
            <p class="text-white">Pelatih</p>
        </div>
        <div id="trainer-card" class="w-[300px] bg-white shadow rounded-lg m-4 p-4 hover:translate-y-[-10px] duration-200 ease">
            <img src="assets/Person_Icon.png" class="w-[200px] mx-auto mb-2 rounded-full border-white border-8 bg-white">
            <p class="text-[18px] text-white font-semibold">Tri Astari</p>
            <p class="text-white">Pelatih</p>
        </div>
    </div>
</section>

<script>
    function handleCardClick(event, route) {
        if (event.target.tagName !== 'BUTTON') {
            window.location = route;
        }
    }
</script>
@endsection