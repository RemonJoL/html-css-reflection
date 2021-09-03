const menuBtn = document.querySelector(".btn-menu-icon-cnt");
const mainElement = document.querySelector(".main");
const overlay = document.querySelector(".sidemenu-overlay");
const body = document.body;
// let menuOpen = false;

document.querySelector(".header-menu-btn").addEventListener("click", function(){
  mainElement.classList.add("main-active")
  overlay.style.visibility = "visible"
  body.style.overflow = "hidden"
  menuBtn.classList.add("open");
  // menuOpen = true;
});

document.querySelector(".sidemenu-overlay").addEventListener("click", function(){
    mainElement.classList.remove("main-active")
    overlay.style.visibility = "hidden"
    body.style.overflow = "auto"
    menuBtn.classList.remove("open");
    // menuOpen = false;
});

// document.addEventListener("click", sideMenu());

// window.addEventListener("scroll", function(){
//   document.querySelector(".header-wrapper").style.position = "fixed";
// });

// let lastScrollTop = 215;
// let headerClone = document.querySelector(".header-container");
// let stickyHeader = headerClone.cloneNode(true);
// // element should be replaced with the actual target element on which you have applied scroll, use window in case of no target element.
// window.addEventListener("scroll", function(){ // or window.addEventListener("scroll"....
//    let st = window.pageYOffset || document.documentElement.scrollTop; // Credits: "https://github.com/qeremy/so/blob/master/so.dom.js#L426"
//    if (st > lastScrollTop){
//       document.querySelector(".header-container").style.visibility = "hidden";
//       console.log(window.pageYOffset)
//       // document.querySelector(".stickyheader-container").removeChild(stickyHeader);
//
//    } else {
//       document.querySelector(".header-container").style.visibility = "visible";
//       console.log(window.pageYOffset)
//       document.querySelector(".stickyheader-container").appendChild(stickyHeader);
//    }
//    lastScrollTop = st <= 215 ? 215 : st; // For Mobile or negative scrolling
// }, false);


// let previous_value;
// let lastScrollTop = 0;
// let headerClone = document.querySelector(".header-container");
// let stickyHeader = headerClone;
// let headerTop = document.getElementById("banner")
// // element should be replaced with the actual target element on which you have applied scroll, use window in case of no target element.
// window.addEventListener("scroll", function(){ // or window.addEventListener("scroll"....
//    let value = window.pageYOffset || document.documentElement.scrollTop; // Credits: "https://github.com/qeremy/so/blob/master/so.dom.js#L426"
//    if (value < 900) {
//       document.querySelector(".header-container").style.visibility = "visible";
//       console.log("top")
//       document.querySelector(".top-page").insertBefore(headerClone, headerTop);
//
//    } else if (previous_value < value) {
//       document.querySelector(".header-container").style.visibility = "hidden";
//       console.log("down")
//    } else if (previous_value > value) {
//       document.querySelector(".header-container").style.visibility = "visible";
//       console.log("up")
//       document.querySelector(".stickyheader-container").appendChild(headerClone);
//    }
//   previous_value = value;
//    // lastScrollTop = value <= 215 ? 215 : value; // For Mobile or negative scrolling
// }, false);

// let previous_value;
// let lastScrollTop = 0;
// let headerClone = document.querySelector(".header-container");
// let stickyHeader = headerClone;
// let headerTop = document.getElementById("banner")
// // element should be replaced with the actual target element on which you have applied scroll, use window in case of no target element.
// window.addEventListener("scroll", function(){ // or window.addEventListener("scroll"....
//    let value = window.pageYOffset || document.documentElement.scrollTop; // Credits: "https://github.com/qeremy/so/blob/master/so.dom.js#L426"
//    if (value < 2) {
//       document.querySelector(".header-container").style.visibility = "visible";
//       console.log("top")
//       document.querySelector(".header-full").appendChild(headerClone);
//
//    } else if (previous_value < value && value < 400) {
//       document.querySelector(".header-container").style.visibility = "visible";
//       console.log("down")
//    } else if (previous_value < value) {
//       document.querySelector(".header-container").style.visibility = "hidden";
//       console.log("down")
//    } else if (previous_value > value) {
//       document.querySelector(".header-container").style.visibility = "visible";
//       console.log("up")
//       document.querySelector(".stickyheader-container").appendChild(headerClone);
//    }
//   previous_value = value;
//    // lastScrollTop = value <= 215 ? 215 : value; // For Mobile or negative scrolling
// }, false);

let previous_value;
let lastScrollTop = 0;
// element should be replaced with the actual target element on which you have applied scroll, use window in case of no target element.
window.addEventListener("scroll", function(){ // or window.addEventListener("scroll"....
   let value = window.pageYOffset || document.documentElement.scrollTop; // Credits: "https://github.com/qeremy/so/blob/master/so.dom.js#L426"
   if (previous_value > value && value <= 0) {
      document.querySelector(".header-container").style.position = "relative";
      console.log("top")

   } else if (previous_value > value && value >= 300) {
      document.querySelector(".header-container").classList.remove("scroll-down");
      document.querySelector(".header-container").classList.add("scroll-up");
       document.querySelector(".header-container").style.position = "fixed";
      console.log("down")
   } else if (previous_value < value && value >= 400) {
      document.querySelector(".header-container").classList.remove("scroll-up");
      document.querySelector(".header-container").classList.add("scroll-down");
      console.log("down")
   }
  previous_value = value;
   // lastScrollTop = value <= 215 ? 215 : value; // For Mobile or negative scrolling
}, false);
