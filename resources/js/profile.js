const editBtn = document.getElementById("edit-button");
const addImageBtn = document.getElementById("add-image-btn");

const closeBtn = document.getElementById("popup-close");
const closeBtnImage = document.getElementById("image-popup-close");

const parent = document.getElementById("parent");

const popup = document.getElementById("popup");
const popupImage = document.getElementById("image-popup");

const editFunc = () => {
    popup.classList.toggle("active");
    parent.classList.add("blur");
};
const closeFunc = () => {
    popup.classList.toggle("active");
    parent.classList.remove("blur");
};

const editFuncImg = () => {
    popupImage.classList.toggle("active");
    parent.classList.add("blur");
};
const closeFuncImg = () => {
    popupImage.classList.toggle("active");
    parent.classList.remove("blur");
};

editBtn.addEventListener("click", editFunc);
closeBtn.addEventListener("click", closeFunc);

addImageBtn.addEventListener("click", editFuncImg);
closeBtnImage.addEventListener("click", closeFuncImg);

//Deletion
const deleteAccBtn = document.getElementById("delete-acc");
function confirmDeletion(event) {
    event.preventDefault();
    console.log("Delete acc");
    if (confirm("Apakah anda yakin ingin menghapus akun?")) {
        document.getElementById("delete-account-form").submit();
    }
}
deleteAccBtn.addEventListener("click", confirmDeletion);
