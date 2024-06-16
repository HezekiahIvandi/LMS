const editBtn = document.getElementById("edit-button");
const closeBtn = document.getElementById("popup-close");
const parent = document.getElementById("parent");
const popup = document.getElementById("popup");
const editFunc = () => {
    popup.classList.toggle("active");
    parent.classList.add("blur");
};
const closeFunc = () => {
    popup.classList.toggle("active");
    parent.classList.remove("blur");
};
editBtn.addEventListener("click", editFunc);
closeBtn.addEventListener("click", closeFunc);
