//Loader 2s

var load = document.querySelector(".preload");
window.addEventListener("load", function() {
    setTimeout(() => load.style.display = "none", 2000);
})


// Navbar Active

const cl = location.href;
const mi = document.querySelector('#ac');
const ml = mi.length;
for (let i = 0; i < ml; i++) {
    if (mi[i].href === cl) {
        mi[i].className = "active";
    }
}
//Navbar Togelling
//togelling open//

function openn() {
    document.getElementById("menu").style.width = "300px";
    document.querySelector(".main").style.visibility = "hidden";
    document.querySelector(".nav_items").style.visibility = "hidden";




}
//togelling close
function closee() {
    document.getElementById("menu").style.width = "0px";
    document.querySelector(".main").style.visibility = "visible";
    document.querySelector(".nav_items").style.visibility = "visible";

}

//Slider Home page

var slideIndex = 0;
showSlides();

function showSlides() {
    var i;
    var slides = document.getElementsByClassName("mySlides");
    var dots = document.getElementsByClassName("dot");
    for (i = 0; i < slides.length; i++) {
        slides[i].style.display = "none";
    }
    slideIndex++;
    if (slideIndex > slides.length) {
        slideIndex = 1
    }
    for (i = 0; i < dots.length; i++) {
        dots[i].className = dots[i].className.replace(" active", "");
    }
    slides[slideIndex - 1].style.display = "block";
    dots[slideIndex - 1].className += " active";
    setTimeout(showSlides, 3500);
}

//Navbar position Fixed

var last = 400;
arrowmark = document.querySelector(".arrow");
navbar = document.querySelector(".navbar_container");
window.addEventListener("scroll", function() {
    var scroll = window.pageYOffset;
    if (scroll > last) {

        navbar.style.position = "fixed";
        navbar.style.width = "100%";
        navbar.style.backgroundColor = "#030616";
        navbar.style.boxShadow = "5px 5px 10px black ";
        arrowmark.style.display = 'block';
        navbar.style.zIndex = "2";

    } else {
        navbar.style.position = "relative";
        navbar.style.backgroundColor = "transparent";
        navbar.style.boxShadow = "none";
        arrowmark.style.display = 'none';

    }
    scroll = last;
})