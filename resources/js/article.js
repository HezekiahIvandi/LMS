document.addEventListener('DOMContentLoaded', function() {
    const addBtn = document.getElementById('add-btn');
    const popup = document.getElementById('popup');
    const closeBtn = document.getElementById('close-btn');
    const ancForm = document.getElementById('art-form');

    addBtn.addEventListener('click', function() {
        popup.style.display = 'block';
    });

    closeBtn.addEventListener('click', function() {
        popup.style.display = 'none';
    });

    ancForm.addEventListener('submit', function(event) {
        popup.style.display = 'none';
    });
})