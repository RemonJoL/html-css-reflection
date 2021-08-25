// let slides = document.getElementsByClassName("banner-img-container");

// currentSlide();

// function currentSlide(number){
//       slides[number].style.transform="translateX(0vw)";
//       console.log(1);
// }

// function currentSlide(){
//   for (let i=0;i<slides.length;i++){
//     if (i<slides.length){
//       slides[i].style.transform="translateX(-100vw)";
//       console.log(1);
//       setTimeout(currentSlide, 1000);
//     } else if (i>slides.length){
//       i = 0;
//       setTimeout(currentSlide, 1000);
//     }
//   }
// }

// let i;
// const slides = document.getElementsByClassName("banner-img-container");
//
// for (i = 0; i<slides.length; i++){
//   slides[i].style.transform=translateX(-100vw);
// }

// let autoplay = true;
//
// var slideIndex = 0;
// let t = 0;
//
// const slides = document.getElementsByClassName("banner-img-container");
//
// carousel();
//
//
// document.getElementById("banner").onmouseover = function () {
//   autoplay = false;
//   console.log(autoplay);
// }
// document.getElementById("banner").onmouseleave = function () {
//   autoplay = true;
//   console.log(autoplay);
//   carousel();
// }
//
// function carousel(){
//   let i;
//   const dots = document.getElementsByClassName("banner-button");
//
//   if(autoplay===true) {
//
//     for (i = 0; i < slides.length; i++) {
//     slides[i].style.display = "none";
//     }
//     slideIndex++;
//     if (slideIndex > slides.length) {slideIndex = 1}
//     for (i = 0; i < dots.length; i++) {
//       dots[i].className = dots[i].className.replace(" active", "");
//     }
//     slides[slideIndex-1].style.display = "block";
//     dots[slideIndex-1].className += " active";
//     setTimeout(carousel, 2500); // Change image every 2 seconds
//
//   } else if(autoplay===false) {
//     clearTimeout();
//
//   }
// }

// var slideIndex = 0;
// const slides = document.getElementsByClassName("banner-img-container");
// let autoplay = true;
// showSlides();
//
// function currentSlide(n) {
//   showSlides(slideIndex = n);
// }
//
// function showSlides() {
//   let i;
//   const dots = document.getElementsByClassName("banner-button");
//   for (i = 0; i < slides.length; i++) {
//     slides[i].style.display = "none";
//   }
//   slideIndex++;
//   if (slideIndex > slides.length) {slideIndex = 1}
//   for (i = 0; i < dots.length; i++) {
//     dots[i].className = dots[i].className.replace(" active", "");
//   }
//   slides[slideIndex-1].style.display = "block";
//   dots[slideIndex-1].className += " active";
//   setTimeout(showSlides, 2500); // Change image every 2 seconds
// }

let slideIndex = 0;
const slides = document.getElementsByClassName("banner-img-container");
let autoplay = true;
let timer;
let autoplayResume;
showSlides();

document.getElementById("banner").onmouseover = function () {
  autoplay = false;
  console.log(autoplay);
}
document.getElementById("banner").onmouseleave = function () {
  autoplay = true;
  console.log(autoplay);
  showSlides();
}

function currentSlide(n) {
  showSlides(slideIndex = n);
}

function showSlides() {

  if (autoplay === true){
    let i;
    const dots = document.getElementsByClassName("banner-button");

    for (i = 0; i < slides.length; i++) {
      // slides[i].style.left = (i*100)+"vw";
      slides[i].className = slides[i].className.replace(" b-active", "");
    }
    slideIndex++;
    if (slideIndex > slides.length) {slideIndex = 1}
    for (i = 0; i < dots.length; i++) {
      dots[i].className = dots[i].className.replace(" active", "");
    }
    slides[slideIndex-1].className += " b-active";
    // slides[slideIndex-1].style.display = "block";
    dots[slideIndex-1].className += " active";
    timer = setTimeout(showSlides, 2500); // Change image every 2 seconds

  } else if (autoplay === false) {
    clearTimeout(timer);
  }
}

// document.getElementById("banner").onmouseover = function () {
//   intvl = 100000;
//   console.log(intvl);
// }
// document.getElementById("banner").onmouseout = function () {
//   intvl = 2500;
//   console.log(intvl);
// }

// function currentSlide(i) {
//   showSlides(slideIndex = i);
