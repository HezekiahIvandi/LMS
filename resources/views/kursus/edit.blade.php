@vite('resources/css/home.css')
<section id="edit-form-section">
    <h2>Menyunting Kursus</h2>
    <form id="edit-form-section" action="{{ route('kursus.update', $kursus->id) }}" method="POST">
        @method('PUT')
        @csrf
        <input type="text" id="course_name" name="name" placeholder="Nama Kursus" value="{{ $kursus->course_name }}" required>

        <label for="course-img">Gambar Kursus:</label>
            <div class="image-options">
                <input type="radio" id="kursus-wikilatih" name="image_url" value="assets/Kursus WikiLatih.png" required>
                <label for="kursus-wikilatih">
                    <img src="{{URL::asset('assets/Kursus WikiLatih.png')}}" alt="Kursus WikiLatih">
                </label>
                <input type="radio" id="kursus-wikisosial" name="image_url" value="assets/Kursus WikiSosial.png" required>
                <label for="kursus-wikisosial">
                    <img src="{{URL::asset('assets/Kursus WikiSosial.png')}}" alt="Kursus WikiSosial">
                </label>
                <input type="radio" id="magang-wmid" name="image_url" value="assets/Magang WMID.png" required>
                <label for="magang-wmid">
                    <img src="{{URL::asset('assets/Magang WMID.png')}}" alt="Magang WMID">
                </label>
                <input type="radio" id="hibah-wmid" name="image_url" value="assets/Hibah WMID.png" required>
                <label for="hibah-wmid">
                    <img src="{{URL::asset('assets/Hibah WMID.png')}}" alt="Hibah WMID">
                </label>
            </div>

        <input type="text" id="trainer-name" name="trainer" placeholder="Nama Pelatih" value="{{ $kursus->course_name }}" required>

        <button type="submit">Simpan</button>
    </form>
</section>