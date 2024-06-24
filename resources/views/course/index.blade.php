@extends('layouts.template')

@section('content')
    @vite('resources/js/course.js')
    <section id="course-hero">
        <h2>Kursus Tersedia</h2>
        <p>Wikimedia Indonesia menyediakan berbagai kursus, termasuk
           <span>WikiLatih Daring</span> yang mengajarkan dasar-dasar penyuntingan,  
           <span>WikiSosial Daring</span> untuk memperkuat keterampilan sosial, 
           <span>Magang</span> yang menawarkan pengalaman langsung dalam manajemen proyek Wikimedia, serta program 
           <span>Hibah</span> hibah untuk mendukung proyek-proyek inovatif.</p>
           
           <!-- Fitur Tambahan: Search Bar -->
        <form class="course-search-form" action="{{ route('course.search') }}" method="GET">
            <input type="text" name="search" placeholder="Cari Kursus...">
            <button type="submit">Cari</button>
        </form>

        <!-- Fitur Tambahan: Sort -->
        <div class="course-sort-btn">
            <form action="{{ route('course.sort') }}" method="GET">
                <label for="category">Sortir berdasarkan kategori:</label>
                <select name="category" id="category">
                    <option value="all">Semua</option>
                    <option value="WikiLatih">WikiLatih</option>
                    <option value="WikiSosial">WikiSosial</option>
                    <option value="Magang">Magang</option>
                    <option value="Hibah">Hibah</option>
                </select>
                <button type="submit">Sortir!</button>
            </form>
        </div>

    </section>

    <!-- Course -->
    <section id="course">
        <h1>Kursus yang Tersedia <span><button class="add-btn">+</button></span></h1>
        <!-- Pop Up -->
        <div class="popup">
            <div class="popup-content">
                <span class="close-btn">&times;</span>
                <h2>Menambahkan Kursus Baru</h2>
                <form id="course-form" action="{{ route('course.store') }}" method="POST">
                @csrf
                <input type="text" id="course-name" name="name" placeholder="Nama Kursus" required>
                <label for="course-img">Gambar Kursus:</label>
                <div class="image-options">
                    <input type="radio" id="course-wikilatih" name="image_url" value="assets/Kursus WikiLatih.png" required>
                    <label for="course-wikilatih">
                        <img src="assets/Kursus WikiLatih.png" alt="Kursus WikiLatih">
                    </label>
                    <input type="radio" id="course-wikisosial" name="image_url" value="assets/Kursus WikiSosial.png" required>
                    <label for="course-wikisosial">
                        <img src="assets/Kursus WikiSosial.png" alt="Kursus WikiSosial">
                    </label>
                    <input type="radio" id="magang-wmid" name="image_url" value="assets/Magang WMID.png" required>
                    <label for="magang-wmid">
                        <img src="assets/Magang WMID.png" alt="Magang WMID">
                    </label>
                    <input type="radio" id="hibah-wmid" name="image_url" value="assets/Hibah WMID.png" required>
                    <label for="hibah-wmid">
                        <img src="assets/Hibah WMID.png" alt="Hibah WMID">
                    </label>
                </div>
                <input type="text" id="trainer-name" name="trainer" placeholder="Nama Pelatih">
                <button type="submit">Simpan</button>
            </form>
            </div>
        </div>

        <p>Menyediakan program-program pelatihan, magang, dan hibah di Wikipedia secara daring.</p>
        <div class="course-box">
            @foreach($course as $crs)
                <div class="courses"  onclick="handleCardClick(event, `{{ route('course.content', $crs->id) }}`)">
                    <img src="{{ asset($crs->image_url) }}" alt="">
                    <div class="details">
                        <h4>{{ $crs->name }}
                    
                                <a href="{{ route('course.edit', $crs->id) }}">
                                    <i class="bi bi-pencil-square"></i>
                                </a>
                           
                        </h4>
                        <p>Pelatih: {{ $crs->trainer }}</p>
                    </div>

                    <div class="btn-container">
                        <a class="edit-course-btn">Tambah Materi</a>
                        <form action="{{ route('course.destroy', $crs->id) }}" method="POST" onsubmit="return confirm('Anda yakin ingin menghapus kursus ini?');">
                            @method('delete')
                            @csrf
                            <button type="submit" class="delete-course-btn">Hapus Kursus</button>
                        </form>
                    
                    </div>
                </div>
            @endforeach
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