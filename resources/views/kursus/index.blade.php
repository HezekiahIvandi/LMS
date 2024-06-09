<!DOCTYPE html>
<html lang="id">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        @vite('resources/css/home.css')
        @vite('resources/js/home.js')
        <title>Belajar Daring Wikimedia Indonesia</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
        <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.10.5/font/bootstrap-icons.min.css" rel="stylesheet">
    </head>

    <body>
        <!-- Navigation -->
        <nav>
            <img src="assets\Ikon WikiLatih.png" alt="Ikon WikiLatih">
            <div class="navigation">
                <ul>
                    <li><a href="/">Beranda</a></li>
                    <li><a href="#">Kursus</a></li>
                    <li><a href="/article">Artikel</a></li>
                    <li><a href="#">Tentang Kami</a></li>
                </ul>
            </div>
        </nav>

        @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
        @endif

        <!-- Home -->
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
            <h1>Kursus yang Tersedia <span><button class="add-btn">+</button></span></h1>
            <!-- Pop Up -->
            <div class="popup">
                <div class="popup-content">
                    <span class="close-btn">&times;</span>
                    <h2>Menambahkan Kursus Baru</h2>
                    <form id="course-form" action="{{ route('kursus.store') }}" method="POST">
                    @csrf
                    <input type="text" id="course-name" name="name" placeholder="Nama Kursus" required>
                    <label for="course-img">Gambar Kursus:</label>
                    <div class="image-options">
                        <input type="radio" id="kursus-wikilatih" name="image_url" value="assets/Kursus WikiLatih.png" required>
                        <label for="kursus-wikilatih">
                            <img src="assets/Kursus WikiLatih.png" alt="Kursus WikiLatih">
                        </label>
                        <input type="radio" id="kursus-wikisosial" name="image_url" value="assets/Kursus WikiSosial.png" required>
                        <label for="kursus-wikisosial">
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

            <p>WikiLatih Daring adalah program pelatihan penyuntingan di Wikipedia yang diadakan secara daring.</p>
            <div class="course-box">
                @foreach($kursus as $crs)
                    <div class="courses">
                        <img src="{{ asset($crs->image_url) }}" alt="">
                        <div class="details">
                            <h4>{{ $crs->name }}
                                <a href="" class="edit-btn">
                                    <i class="bi bi-pencil-square"></i>
                                </a>
                            </h4>
                            <p>Pelatih: {{ $crs->trainer }}</p>
                        </div>

                        <div class="btn-container">
                            <a class="edit-course-btn" href="#">Tambah Materi</a>
                            <form action="{{ route('kursus.destroy', $crs->id) }}" method="POST" onsubmit="return confirm('Anda yakin ingin menghapus kursus ini?');">
                                @method('delete')
                                @csrf
                                <button type="submit" class="delete-course-btn">Hapus Kursus</button>
                            </form>
                        
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
    </body>
</html>