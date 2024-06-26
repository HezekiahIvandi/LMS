document.addEventListener('DOMContentLoaded', function() {
    const addBtn = document.querySelector('.add-btn');      // Tombol untuk menampilkan popup
    const popup = document.querySelector('.popup');         // Elemen popup
    const closeBtn = document.querySelector('.close-btn');  // Tombol untuk menutup popup
    const courseForm = document.getElementById('course-form'); // Form kursus

    // Menampilkan popup saat tombol "add" diklik
    addBtn.addEventListener('click', function() {
        popup.style.display = 'block';
    });

    // Menutup popup saat tombol "close" diklik
    closeBtn.addEventListener('click', function() {
        popup.style.display = 'none';
    });

    // Menangani pengiriman form kursus
    courseForm.addEventListener('submit', function(event) {
        const courseName = document.getElementById('course-name').value; // Mengambil nilai dari input nama kursus
        const courseImage = document.querySelector('input[name="image_url"]:checked').value; // Mengambil nilai dari input URL gambar yang dipilih
        const trainerName = document.getElementById('trainer-name').value; // Mengambil nilai dari input nama pelatih

        // Lakukan sesuatu dengan data yang disubmit
        console.log("Nama Kursus:", courseName);
        console.log("Gambar Kursus:", courseImage);
        console.log("Nama Pelatih:", trainerName);

        popup.style.display = 'none'; // Menutup popup setelah form dikirim
    });
});
