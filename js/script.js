const menuToggle = document.querySelector('.menu-toggle input');
const nav = document.querySelector('nav ul');
const backdrop = document.getElementById('backdrop');
const dropdown = document.querySelector('.my-dropdown');

menuToggle.addEventListener('click', () => {
    nav.classList.toggle('slide');
    backdrop.classList.toggle('backdrop');
    document.body.classList.toggle('no-scroll');
});

