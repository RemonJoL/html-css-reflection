// document.getElementsByClassName("header-menu-btn").onclick = function() {sideMenu()};
// let menuVisible = false;
//
// function sideMenu() {
//   if (menuVisible = false){
//   document.getElementById("main").style.left = "-275px";
//   menuVisible = true;
//   console.log(menuVisible);
//   } else if (menuVisible = true){
//     document.getElementById("main").style.left = "0px";
//     menuVisible = false;
//     console.log(menuVisible);
//   }
// }

// document.getElementsByClassName("btn-menu").onclick = function(){
//   sideMenu()
// };
//
// let menuVisible = false;
//
//   function sideMenu() {
//     if (menuVisible === false){
//       console.log(1);
//     document.getElementByID("sidemenu").style.left = "-275px";
//     menuVisible = true;
//   }
// }

// let menuVisible = false;
//
//   function sideMenu() {
//     if (menuVisible === true){
//     document.getElementById("main").style.left = "-275px";
//     menuVisible = false;
//   } else if (menuVisible === false) {
//     document.getElementById("main").style.left = "0px";
//     menuVisible = true;
//   }
// }
// document.getElementsByClassName("header-menu-btn")[0].addEventListener("click", sideMenu());

// let menuVisible = false;
//
//   function sideMenu() {
//     if (menuVisible === true){
//     document.getElementsByClassName("main")[0].classList.add("main-active");
//     document.getElementsByClassName("sidemenu-overlay")[0].style.visibility = "visible";
//     menuVisible = false;
//     console.log(1);
//   } else if (menuVisible === false) {
//     document.getElementsByClassName("main")[0].classList.remove("main-active");
//     document.getElementsByClassName("sidemenu-overlay")[0].style.visibility = "hidden";
//     menuVisible = true;
//   }
// }
// document.getElementsByClassName("header-menu-btn")[0].addEventListener("click", sideMenu());

// let menuVisible = false;
// const button = ;
// const overlay = ;
//
//   function sideMenu() {
//     if (menuVisible === true){
//     document.getElementsByClassName("main")[0].classList.add("main-active");
//     document.getElementsByClassName("sidemenu-overlay")[0].style.visibility = "visible";
//     menuVisible = false;
//     console.log(1);
//   } else if (menuVisible === false) {
//     document.getElementsByClassName("main")[0].classList.remove("main-active");
//     document.getElementsByClassName("sidemenu-overlay")[0].style.visibility = "hidden";
//     menuVisible = true;
//   }
// }
// document.getElementsByClassName("header-menu-btn")[0].addEventListener("click", sideMenu());

// let menuVisible = false;
//
//   function sideMenu() {
//     if (menuVisible === true){
//     menuVisible = false;
//     console.log(1);
//   } else if (menuVisible === false) {
//     document.getElementsByClassName("main")[0].classList.remove("main-active");
//     document.getElementsByClassName("sidemenu-overlay")[0].style.visibility = "hidden";
//     menuVisible = true;
//   }
// }
const menuBtn = document.querySelector(".btn-menu-icon-cnt");
let menuOpen = false;

document.getElementsByClassName("header-menu-btn")[0].addEventListener("click", function(){
  document.getElementsByClassName("main")[0].classList.add("main-active")
  document.getElementsByClassName("sidemenu-overlay")[0].style.visibility = "visible"
  document.body.style.overflow = "hidden"
  menuBtn.classList.add("open");
  menuOpen = true;
});

document.getElementsByClassName("sidemenu-overlay")[0].addEventListener("click", function(){
    document.getElementsByClassName("main")[0].classList.remove("main-active")
    document.getElementsByClassName("sidemenu-overlay")[0].style.visibility = "hidden"
    document.body.style.overflow = "auto"
    menuBtn.classList.remove("open");
    menuOpen = false;
});
// document.addEventListener("click", sideMenu());
