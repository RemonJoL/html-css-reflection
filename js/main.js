//-------------------------------------------------------------------------------
// Sidemenu
//-------------------------------------------------------------------------------
const menuBtn = document.querySelector(".header-menu-btn");
const menuIcon = document.querySelector(".btn-menu-icon-cnt");
const mainElement = document.querySelector(".main");
const overlay = document.querySelector(".sidemenu-overlay");
const body = document.body;

menuBtn.addEventListener("click", function(){
  mainElement.classList.add("main-active")
  menuIcon.classList.add("open");
});

overlay.addEventListener("click", function(){
    mainElement.classList.remove("main-active")
    menuIcon.classList.remove("open");
});

//-------------------------------------------------------------------------------
// Sticky Header
//-------------------------------------------------------------------------------

const stickyHeader = document.querySelector(".header-container");


let previous_value;
let lastScrollTop = 0;

const isTouchDevice = function() {
  return (('ontouchstart' in window) ||
    (navigator.maxTouchPoints > 0) ||
    (navigator.msMaxTouchPoints > 0));
}

document.querySelector(".page-full").addEventListener("scroll", function(){
   let value = document.querySelector(".page-full").scrollTop;
   if (previous_value > value && value <= 0) {
      stickyHeader.style.position = "relative";
      stickyHeader.style.padding = "0px";
   }

   else if (isTouchDevice() === true && previous_value > value && value >= 300) {
      stickyHeader.classList.remove("scroll-down");
      stickyHeader.classList.add("scroll-up");
      stickyHeader.style.position = "fixed";
      stickyHeader.style.padding = "0px";
   }

   else if (previous_value > value && value >= 300) {
      stickyHeader.classList.remove("scroll-down");
      stickyHeader.classList.add("scroll-up");
      stickyHeader.style.position = "fixed";
      stickyHeader.style.padding = "0px 17px 0px 0px";
   }

   else if (previous_value < value && value >= 400) {
      stickyHeader.classList.remove("scroll-up");
      stickyHeader.classList.add("scroll-down");
   }
  previous_value = value;
}, false);

//-------------------------------------------------------------------------------
// Cookies
//-------------------------------------------------------------------------------

const cookieEnable = document.getElementsByClassName("cookie-enable");
const cookieDisable = document.getElementsByClassName("cookie-disable");

const toggleDisabled1 = "btn webdesign cookie-disable";
const toggleDisabled2 = "btn cookie-btn-disabled cookie-enable";

const toggleEnabled1 = "btn cookie-btn-disabled cookie-disable";
const toggleEnabled2 = "btn webdesign cookie-enable";

//  Accept Cookies

document.getElementById("cookieAcceptBtn").addEventListener("click", function() {
  document.querySelector(".cookie-app").style.display = "none";
  checkCookie();
  setCookie("cookiesAccepted", "yes", 10);
});

// Open Cookie Settings

document.getElementById("cookieSettingsBtn").addEventListener("click", function() {
  document.querySelector(".cookie-settings").style.display = "flex";
});

// Set Cookies

function setCookie(cname, cvalue, exdays) {
  const d = new Date();
  d.setTime(d.getTime() + (exdays * 24 * 60 * 60 * 1000));
  let expires = "expires="+d.toUTCString();
  document.cookie = cname + "=" + cvalue + ";" + expires + ";path=/";
}

// Get Cookies

function getCookie(cname) {
  let name = cname + "=";
  let ca = document.cookie.split(';');
  for(let i = 0; i < ca.length; i++) {
    let c = ca[i];
    while (c.charAt(0) == ' ') {
      c = c.substring(1);
    }
    if (c.indexOf(name) == 0) {
      return c.substring(name.length, c.length);
    }
  }
  return "";
}

// Check Cookies

function checkCookie() {
  let popUp = getCookie("cookiesAccepted");

  if (popUp == "yes") {
    document.querySelector(".cookie-app").style.display = "none";
  } else {
    document.querySelector(".cookie-app").style.display = "flex";
  }
  for(let i = 0; i < cookieDisable.length; i++){
    if ( getCookie("toggle"+i) === "disabled" ){
      cookieDisable[i].className = toggleDisabled1;
      cookieEnable[i].className = toggleDisabled2;
    }
    else if ( getCookie("toggle"+i) === "enabled" ){
      cookieDisable[i].className = toggleEnabled1;
      cookieEnable[i].className = toggleEnabled2;
    }
    else {
      cookieDisable[i].className = toggleDisabled1;
      cookieEnable[i].className = toggleDisabled2;
      setCookie("toggle"+i, "disabled", 10);
    }
  }
}

//-------------------------------------------------------------------------------
// Cookies Settings
//-------------------------------------------------------------------------------

function cookieToggleOn(x) {
    setTimeout(function(){
      cookieDisable[x].className = toggleDisabled1;
      cookieEnable[x].className = toggleDisabled2;
    }, 100);
    setCookie("toggle"+x, "disabled", 10);
}
function cookieToggleOff(x) {
    setTimeout(function(){
      cookieDisable[x].className = toggleEnabled1;
      cookieEnable[x].className = toggleEnabled2;
    }, 100);
    setCookie("toggle"+x, "enabled", 10);
}

//-------------------------------------------------------------------------------
// Cookies Table
//-------------------------------------------------------------------------------

// Open & Close Cookie Table

document.getElementById("cookie-table-toggle").addEventListener("click", function() {
  const element = document.querySelector(".cookie-table");
  if (element.style.display === "none") {
    document.querySelector(".cookie-table").style.display = "table";
    document.getElementById("cookie-table-toggle").innerHTML = "Hide detailed preferences";
  }
  else {
    document.querySelector(".cookie-table").style.display = "none";
    document.getElementById("cookie-table-toggle").innerHTML = "Show detailed preferences";
  }
});

// Cookies Table details

const companyDetails = document.getElementsByClassName("cookie-details-table-hidden");

function cookieDetails(x) {
  if (companyDetails[x].style.display === "none") {
    companyDetails[x].style.display = "table-row";
    document.getElementsByClassName("expand-collapse")[x].innerHTML = "-";

  }
  else {
    companyDetails[x].style.display = "none";
    document.getElementsByClassName("expand-collapse")[x].innerHTML = "+";
  }
}

//-------------------------------------------------------------------------------
// Cookies Settings Confirmation
//-------------------------------------------------------------------------------

// Cancel Settings

document.getElementById("cancel-settings").addEventListener("click", function() {
  document.querySelector(".cookie-settings").style.display = "none";
  document.querySelector(".cookie-message-container").style.display = "flex";

  for(let i = 0; i < cookieDisable.length; i++){
    let prevStatus = getCookie("toggle"+i);

    if ( prevStatus === "disabled" ){
      cookieDisable[i].className = toggleDisabled1;
      cookieEnable[i].className = toggleDisabled2;
    setCookie("toggle"+i, "enabled", 10);
    }
    else if ( prevStatus === "enabled" ){
      cookieDisable[i].className = toggleEnabled1;
      cookieEnable[i].className = toggleEnabled2;
    setCookie("toggle"+i, "disabled", 10);
    }
    prevStatus = getCookie("toggle"+i);
  }
});

// Accept Settings

document.getElementById("accept-settings").addEventListener("click", function() {
  document.querySelector(".cookie-settings").style.display = "none";
  document.querySelector(".cookie-message-container").style.display = "flex";
});
