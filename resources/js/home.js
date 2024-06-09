document.addEventListener('DOMContentLoaded', function() {
    const addBtn = document.querySelector('.add-btn');
    const popup = document.querySelector('.popup');
    const closeBtn = document.querySelector('.close-btn');
    const courseForm = document.getElementById('course-form');

    addBtn.addEventListener('click', function() {
        popup.style.display = 'block';
    });

    closeBtn.addEventListener('click', function() {
        popup.style.display = 'none';
    });

    courseForm.addEventListener('submit', function(event) {
        event.preventDefault();
        const courseName = document.getElementById('course-name').value;
        const courseImage = document.querySelector('input[name="image_url"]:checked').value;
        const trainerName = document.getElementById('trainer-name').value;

        // Lakukan sesuatu dengan data yang disubmit
        console.log("Nama Kursus:", courseName);
        console.log("Gambar Kursus:", courseImage);
        console.log("Nama Pelatih:", trainerName);

        popup.style.display = 'none';
    });
});
