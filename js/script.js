const menuToggle = document.querySelector('.menu-toggle input');
const nav = document.querySelector('nav ul');
const backdrop = document.getElementById('backdrop');
const dropdown = document.querySelector('.my-dropdown');
const myslide = document.querySelectorAll('.myslider');
const dot = document.querySelectorAll('.dot');

menuToggle.addEventListener('click', () => {
    nav.classList.toggle('slide');
    backdrop.classList.toggle('backdrop');
    document.body.classList.toggle('no-scroll');
});

let counter = 1;
slidefun(counter);

let timer = setInterval(autoslide, 8000);
function autoslide() {
    counter += 1;
    slidefun(counter);
}
function plusSlides(n) {
    counter += n;
    slidefun(counter);
    resetTimer();
}
function currentSlide(n) {
    counter = n;
    slidefun(counter);
    resetTimer();
}
function resetTimer() {
    clearInterval(timer);
    timer = setInterval(autoslide, 8000);
}

function slidefun(n) {
    let i;
    for(i = 0; i < myslide.length; i++) {
        myslide[i].style.display = "none";
    }
    for(i = 0; i < dot.length; i++) {
        dot[i].classList.remove('active');
    }
    if(n > myslide.length) {
        counter = 1;
    }
    if(n < 1) {
        counter = myslide.length;
    }
    myslide[counter - 1].style.display = "block";
    dot[counter - 1].classList.add('active');
}