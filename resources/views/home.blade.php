<!DOCTYPE html>
<html lang="id">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        @vite('resources/css/home.css')
        @vite('resources/js/home.js')
        <title>Belajar Daring Wikimedia Indonesia</title>
    </head>

    <body>
        <!-- Navigation -->
        <nav>
            <img src="storage/Ikon WikiLatih.png" alt="Ikon WikiLatih">
            <div class="navigation">
                <ul>
                    <li><a href="#">Beranda</a></li>
                    <li><a href="#">Kursus</a></li>
                    <li><a href="#">Artikel</a></li>
                    <li><a href="#">Tentang Kami</a></li>
                </ul>
            </div>
        </nav>

        <!-- Home -->
        <section id="home">
            <h2>Belajar Daring Wikimedia Indonesia</h2>
            <p>Kelas Daring Wikimedia Indonesia menyediakan materi-materi pelatihan untuk berkontribusi di proyek-proyek Wikimedia. Materi-materi yang tersedia di Kelas Daring Wikimedia Indonesia dapat diakses dan diikuti oleh publik secara daring (online). Kelas Daring Wikimedia Indonesia dikelola langsung oleh Wikimedia Indonesia.</p>
            <div class="btn">
                <a class="course-btn" href="#">Jelajahi Kursus</a>
                <a class="about-btn" href="#">Tentang Kami</a>
            </div>
        </section>

        <!-- Courses -->
        <section id="course">
            <h1>Kursus yang Tersedia <span><button class="add-btn">+</button></span></h1>
            <!-- Pop Up -->
            <div class="popup">
                <div class="popup-content">
                    <span class="close-btn">&times;</span>
                    <h2>Menambahkan Kursus Baru</h2>
                    <form id="course-form">
                        <input type="text" id="course-name" placeholder="Nama Kursus" required>
                        <label for="course-img">Gambar Kursus:</label>
                        <input type="file" name="course-img" id="course-img" accept="image/*" required>
                        <input type="text" id="trainer-name" placeholder="Nama Pelatih">
                        <button type="submit">Simpan</button>
                    </form>
                </div>
            </div>
            <p>WikiLatih Daring adalah program pelatihan penyuntingan di Wikipedia yang diadakan secara daring.</p>
            <div class="course-box">
                <div class="courses">
                    <img src="storage/Kursus WikiLatih.png" alt="Ikon WikiLatih">
                    <div class="details">
                        <h4>WikiLatih Daring #16</h4>
                        <p>Pelatih: Dian Agustin</p>
                    </div>
                    <div class="btn">
                        <a class="edit-course-btn" href="#">Edit Kursus</a>
                        <a class="delete-course-btn" href="#">Hapus Kursus</a>
                    </div>
                </div>  

                <div class="courses">
                    <img src="storage/Kursus WikiSosial.png" alt="">
                    <div class="details">
                        <h4>WikiSosial Daring #20</h4>
                        <p>Pelatih: Ayu Sulastri</p>
                    </div>
                    <div class="btn">
                        <a class="edit-course-btn" href="#">Edit Kursus</a>
                        <a class="delete-course-btn" href="#">Hapus Kursus</a>
                    </div>
                </div>  
                <div class="courses">
                    <img src="storage/Magang WMID.png" alt="">
                    <div class="details">
                        <h4>Magang Wkimedia Indonesia</h4>
                        <p>Koordinator: Raisha Abdillah</p>
                    </div>
                    <div class="btn">
                        <a class="edit-course-btn" href="#">Edit Kursus</a>
                        <a class="delete-course-btn" href="#">Hapus Kursus</a>
                    </div>
                </div>  
                <div class="courses">
                    <img src="storage/Hibah WMID.png" alt="">
                    <div class="details">
                        <h4>Hibah Wikimedia Indonesia</h4>
                        <p>Koordinator: Nabial Chiekal Gibran</p>
                    </div>
                    <div class="btn">
                        <a class="edit-course-btn" href="#">Edit Kursus</a>
                        <a class="delete-course-btn" href="#">Hapus Kursus</a>
                    </div>
                </div>  
            </div>
        </section>
    </body>
</html>