document.addEventListener('DOMContentLoaded', function() {
    const addBtn = document.querySelector('.add-btn');      // Tombol untuk menampilkan popup
    const popup = document.querySelector('.popup');         // Elemen popup
    const closeBtn = document.querySelector('.close-btn');  // Tombol untuk menutup popup
    const ancForm = document.getElementById('anc-form');    // Form pengumuman
    const sortBtn = document.querySelector('.sort-btn button'); // Tombol untuk mengurutkan pengumuman

    // Menampilkan popup saat tombol "add" diklik
    addBtn.addEventListener('click', function() {
        popup.style.display = 'block';
    });

    // Menutup popup saat tombol "close" diklik
    closeBtn.addEventListener('click', function() {
        popup.style.display = 'none';
    });

    // Menangani pengiriman form pengumuman
    ancForm.addEventListener('submit', function(event) {
        const courseName = document.getElementById('course-name').value;  // Mengambil nilai dari input nama kursus
        const titleAnnouncement = document.getElementById('title-anc').value; // Mengambil nilai dari input judul pengumuman
        const announcement = document.getElementById('msg-anc').value;  // Mengambil nilai dari input pesan pengumuman

        // Menampilkan nilai-nilai input di konsol
        console.log("Nama Kursus:", courseName);
        console.log("Judul Pengumuman:", titleAnnouncement);
        console.log("Pesan Pengumuman:", announcement);

        popup.style.display = 'none'; // Menutup popup setelah form dikirim
    });

    // Fungsi untuk mengurutkan pengumuman berdasarkan tanggal
    function sortByDate() {
        const announcements = document.querySelectorAll('.fea-box'); // Mengambil semua elemen pengumuman
        const announcementsArray = Array.from(announcements); // Mengubah NodeList menjadi array

        // Mengurutkan array pengumuman berdasarkan tanggal
        announcementsArray.sort(function(a, b) {
            const dateA = new Date(a.querySelector('.announcement-date').innerText); // Mengambil tanggal dari pengumuman A
            const dateB = new Date(b.querySelector('.announcement-date').innerText); // Mengambil tanggal dari pengumuman B
            return dateB - dateA; // Mengurutkan secara menurun berdasarkan tanggal
        });

        const feaBase = document.querySelector('.fea-base'); // Elemen dasar untuk menampung pengumuman yang sudah diurutkan
        feaBase.innerHTML = ''; // Mengosongkan elemen dasar

        // Menambahkan kembali pengumuman yang sudah diurutkan ke dalam elemen dasar
        announcementsArray.forEach(function(announcement) {
            feaBase.appendChild(announcement);
        });
    }

    // Menambahkan event listener untuk tombol urutkan
    sortBtn.addEventListener('click', sortByDate);
});
