# Wikimedia Indonesia LMS Project
## Deskripsi Proyek
Wikimedia Indonesia adalah organisasi nirlaba yang mengadakan program pelatihan dan penyebaran ilmu pengetahuan melalui proyek-proyek Wikimedia. Meski begitu, pandemi COVID-19 menyebabkan tantangan baru dalam pelaksanaan pelatihan yang memanfaatkan teknologi digital. Proyek ini bertujuan untuk merancang dan mengembangkan Learning Management System (LMS) berbasis web yang dapat mendukung pelatihan daring di Wikimedia Indonesia.

## Tujuan
### Proyek ini bertujuan untuk:
- Mendukung pelatihan daring di Wikimedia Indonesia.
- Meningkatkan keterlibatan kontributor.
- Meningkatkan kualitas serta kuantitas konten yang dihasilkan oleh peserta pelatihan.
### Teknologi yang Digunakan:
- Bahasa Pemrograman: PHP
- Framework: Laravel
- Database: PostgreSQL
### Hasil Proyek:
LMS ini dapat diakses dengan mudah oleh berbagai jenis perangkat.
Meningkatkan keterlibatan kontributor.
Memastikan peningkatan kualitas serta kuantitas konten yang dihasilkan.
Kesimpulan
Implementasi LMS ini berpotensi memberikan dampak positif signifikan dalam mencapai tujuan Wikimedia Indonesia untuk menyediakan ilmu pengetahuan yang bebas dan terbuka.

## Instalasi
Clone repo ini ke mesin lokal Anda:
`git clone https://github.com/HezekiahIvandi/LMS-Belajar-Daring-Wikimedia-Indonesia`

Masuk ke direktori proyek:
`cd LMS-Belajar-Daring-Wikimedia-Indonesia`

Install dependencies menggunakan Composer:
`composer install`

Install dependencies menggunakan Npm:
`npm install`

Migrasi database:
`php artisan migrate`

Generate data dummy:
`php artisan db:seed`

Koneksi ke storage:
`php artisan storage:link`

### Konfigurasi database
Edit nama file `.env.example` menjadi `.env`
Pastikan konfigurasi database sesuai:
```
DB_CONNECTION=pgsql
DB_HOST=127.0.0.1
DB_PORT=5432
DB_DATABASE=mydb
DB_USERNAME=postgres
DB_PASSWORD=postgres
```

### Penggunaan
Jalankan server lokal:
`php artisan serve`
`npm run dev`
pastikan 2 command di atas dijalankan di 2 terminal terpisah.
Akses LMS melalui browser di alamat yang ditampilkan di terminal.
