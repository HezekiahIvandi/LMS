@extends('layouts.template')

@section('content')
    @vite('resources/js/announcement.js')
    <section id="anc-hero">
        <h2>Pengumuman</h2>
        <p>Berisi pengumuman-pengumuman penting yang perlu Anda ketahui, termasuk <span>peluncuran kursus baru</span>, <span>jadwal webinar dan lokakarya</span>, <span>kompetisi penyuntingan</span>, serta <span>panduan dan dukungan</span>.</p>
    </section>

    <!-- Pop Up untuk menambahkan pengumuman baru -->
    <div class="popup">
        <div class="popup-content">
            <span class="close-btn">&times;</span>
            <h2>Menambahkan Pengumuman Baru</h2>
            <form id="anc-form" action="{{ route('announcement.store') }}" method="POST">
                @csrf
                <!-- Dropdown untuk memilih kursus yang terkait dengan pengumuman -->
                <label for="course-name">Berkaitan dengan Kursus:</label>
                <select name="course_name" id="course-name" required>
                    @php
                        $sortedCourses = $course->sortBy('name'); // Mengurutkan kursus berdasarkan nama
                    @endphp
                    @foreach($sortedCourses as $crs)
                        <option value="{{ $crs->name }}">{{ $crs->name }}</option>
                    @endforeach
                </select>

                <!-- Input teks untuk judul pengumuman -->
                <label for="title-anc">Judul Pengumuman:</label>
                <input type="text" id="title-anc" name="title_announcement" placeholder="Judul Pengumuman" required>
                
                <!-- Textarea untuk pesan pengumuman -->
                <label for="msg-anc">Pesan:</label>
                <textarea name="announcement" id="msg-anc" placeholder="Masukkan pesan pengumuman di sini..." required></textarea>
                
                <button type="submit">Simpan</button> <!-- Tombol untuk menyimpan pengumuman baru -->
            </form>
        </div>
    </div>
    
    <!-- Bagian untuk menampilkan pengumuman -->
    <section id="announcement">
        <h1>Pengumuman Penting <span><button class="add-btn">+</button></span></h1>
        
        <!-- Fitur tambahan: Search Bar -->
        <form class="anc-search-form" action="{{ route('announcement.search') }}" method="GET">
            <input type="text" name="search" placeholder="Cari Pengumuman...">
            <button type="submit">Cari</button>
        </form>

        <!-- Fitur tambahan: Sort -->
        <div class="sort-btn">
            <a href="{{ route('announcement.sort') }}">Urutkan dari yang terbaru</a>
        </div>

        <!-- Daftar pengumuman -->
        <div class="fea-base">
            @foreach($announcement as $anc)
                <div class="fea-box">
                    @php
                        $imageSrc = "";
                        $altText = "";
                        $courseNameLower = strtolower($anc->course_name);
                        if (stripos($courseNameLower, "wikilatih") !== false) {
                            $imageSrc = "assets/Kursus WikiLatih.png";
                            $altText = "Kursus WikiLatih";
                        } elseif (stripos($courseNameLower, "wikisosial") !== false) {
                            $imageSrc = "assets/Kursus WikiSosial.png";
                            $altText = "Kursus WikiSosial";
                        } elseif (stripos($courseNameLower, "magang") !== false) {
                            $imageSrc = "assets/Magang WMID.png";
                            $altText = "Magang WMID";
                        } elseif (stripos($courseNameLower, "hibah") !== false) {
                            $imageSrc = "assets/Hibah WMID.png";
                            $altText = "Hibah WMID";
                        }
                    @endphp
                    <i><img src="{{ URL::asset($imageSrc) }}" alt="{{ $altText }}"></i> <!-- Gambar kursus -->
                    <div class="announcement-date">{{ $anc->created_at->format('d M Y H:i') }}</div> <!-- Tanggal pengumuman -->
                    <h3>{{ $anc->title_announcement }}</h3> <!-- Judul pengumuman -->
                    <p>{{ $anc->announcement }}</p> <!-- Isi pengumuman -->

                    <!-- Tombol untuk menyunting dan menghapus pengumuman -->
                    <div class="btn-container">
                        <a href="{{ route('announcement.edit', $anc->id) }}" class="edit-anc-btn">
                            Sunting Pengumuman
                        </a>
                        <form action="{{ route('announcement.destroy', $anc->id) }}" method="POST" onsubmit="return confirm('Anda yakin ingin menghapus pengumuman ini?');">
                            @method('delete')
                            @csrf
                            <button type="submit" class="delete-anc-btn">Hapus Pengumuman</button>
                        </form>
                    </div>
                </div>
            @endforeach
        </div>
    </section>
@endsection
