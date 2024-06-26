@vite('resources/css/home.css')
<section id="edit-form-section">
    <h2>Menyunting Kursus</h2>
    <form id="edit-form-section" action="{{ route('course.update', $course->id) }}" method="POST">
        @method('PUT')
        @csrf
        <input type="text" id="course_name" name="name" placeholder="Nama Kursus" value="{{ $course->course_name }}" required>

        <!-- Pilihan gambar kursus -->
        <label for="course-img">Gambar Kursus:</label>
            <div class="image-options">
                <input type="radio" id="course-wikilatih" name="image_url" value="assets/Kursus WikiLatih.png" required>
                <label for="course-wikilatih">
                    <img src="{{URL::asset('assets/Kursus WikiLatih.png')}}" alt="Kursus WikiLatih">
                </label>
                <input type="radio" id="course-wikisosial" name="image_url" value="assets/Kursus WikiSosial.png" required>
                <label for="course-wikisosial">
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

        <input type="text" id="trainer-name" name="trainer" placeholder="Nama Pelatih" value="{{ $course->course_name }}" required>

        <button type="submit">Simpan</button>
    </form>
</section>
