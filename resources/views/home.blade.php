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
            <img src="assets/Ikon WikiLatih.png" alt="Ikon WikiLatih">
            <div class="navigation">
                <ul>
                    <li><a href="/">Beranda</a></li>
                    <li><a href="#">Kursus</a></li>
                    <li><a href="/article">Artikel</a></li>
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
                    <img src="assets/Kursus WikiLatih.png" alt="">
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
                    <img src="assets/Kursus WikiSosial.png" alt="">
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
                    <img src="assets/Magang WMID.png" alt="">
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
                    <img src="assets/Hibah WMID.png" alt="">
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
    </body>
</html>