const btn = document.querySelector("#btn");

function toggleMenu() {
    const nav = document.querySelector(".nav");
    nav.classList.toggle("ativo");
}

btn.addEventListener('click', toggleMenu);