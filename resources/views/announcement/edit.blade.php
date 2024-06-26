@vite('resources/css/home.css')
<section id="anc-form-section">
    <h2>Menambahkan Pengumuman Baru</h2>
    <!-- Form untuk menambahkan atau mengedit pengumuman -->
    <form id="anc-form-section" action="{{ route('announcement.update', $anc->id) }}" method="POST">
        @method('PUT')
        @csrf
        <!-- Label dan dropdown untuk memilih kursus yang terkait dengan pengumuman -->
        <label for="course-name">Berkaitan dengan Kursus:</label>
        <select name="course_name" id="course-name" required>
            @php
                $sortedCourses = $course->sortBy('name'); // Mengurutkan kursus berdasarkan nama
            @endphp
            @foreach($sortedCourses as $crs)
                <option value="{{ $crs->name }}">{{ $crs->name }}</option> <!-- Opsi kursus -->
            @endforeach
        </select>

        <!-- Label dan input teks untuk judul pengumuman -->
        <label for="title-anc">Judul Pengumuman:</label>
        <input type="text" id="title-anc" name="title_announcement" placeholder="Judul Pengumuman" value="{{ $anc->title_announcement }}" required>

        <!-- Label dan textarea untuk pesan pengumuman -->
        <label for="msg-anc">Pesan:</label>
        <textarea name="announcement" id="msg-anc" placeholder="Masukkan pesan pengumuman di sini..." required>{{ $anc->announcement }}</textarea>

        <!-- Tombol untuk menyimpan pengumuman -->
        <button type="submit">Simpan</button>
    </form>
</section>
