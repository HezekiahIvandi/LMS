document.addEventListener('DOMContentLoaded', function() {
    const addBtn = document.querySelector('.add-btn');
    const popup = document.querySelector('.popup');
    const closeBtn = document.querySelector('.close-btn');
    const ancForm = document.getElementById('anc-form');
    const sortBtn = document.querySelector('.sort-btn button');

    addBtn.addEventListener('click', function() {
        popup.style.display = 'block';
    });

    closeBtn.addEventListener('click', function() {
        popup.style.display = 'none';
    });

    ancForm.addEventListener('submit', function(event) {
        const courseName = document.getElementById('course-name').value;
        const titleAnnouncement = document.getElementById('title-anc').value;
        const announcement = document.getElementById('msg-anc').value;

        console.log("Nama Kursus:", courseName);
        console.log("Judul Pengumuman:", titleAnnouncement);
        console.log("Pesan Pengumuman:", announcement);

        popup.style.display = 'none';
    });

    function sortByDate() {
        const announcements = document.querySelectorAll('.fea-box');
        const announcementsArray = Array.from(announcements);

        announcementsArray.sort(function(a, b) {
            const dateA = new Date(a.querySelector('.announcement-date').innerText);
            const dateB = new Date(b.querySelector('.announcement-date').innerText);
            return dateB - dateA; 
        });

        const feaBase = document.querySelector('.fea-base');
        feaBase.innerHTML = '';

        announcementsArray.forEach(function(announcement) {
            feaBase.appendChild(announcement);
        });
    }

    sortBtn.addEventListener('click', sortByDate);
});