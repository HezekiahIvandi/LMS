const avatar = document.getElementById("avatar");
const ddown = document.getElementById("dropdown");

const avatarHover = () => {
    console.log("hi");
    ddown.classList.toggle("hidden");
};
avatar.addEventListener("click", avatarHover);
