@vite('resources/css/home.css')
<section id="anc-form-section">
    <h2>Menambahkan Pengumuman Baru</h2>
    <form id="anc-form-section" action="{{ route('announcement.update', $anc->id) }}" method="POST">
        @method('PUT')
        @csrf
        <label for="course-name">Berkaitan dengan kursus:</label>
        <select name="course_name" id="course-name" required>
            @foreach($kursus as $crs)
                <option value="{{ $crs->name }}">{{ $crs->name }}</option>
            @endforeach
        </select>

        <label for="title-anc">Judul Pengumuman:</label>
        <input type="text" id="title-anc" name="title_announcement" placeholder="Judul Pengumuman" value="{{ $anc->title_announcement }}" required>

        <label for="msg-anc">Pesan:</label>
        <textarea name="announcement" id="msg-anc" placeholder="Masukkan pesan pengumuman di sini..." required>{{ $anc->announcement }}</textarea>

        <button type="submit">Simpan</button>
    </form>
</section>