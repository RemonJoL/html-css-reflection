const outOfHoursText = document.querySelector(".out-of-hours");
const outOfHoursButton = document.querySelector(".out-of-hours-btn");
const outOfHoursToggle = document.querySelector(".out-of-hours-toggle");

outOfHoursButton.addEventListener('click', function(){
  if (outOfHoursText.style.display === "none"){
    outOfHoursToggle.className = "fas fa-chevron-up text-dark-grey out-of-hours-toggle";
    outOfHoursText.style.display = "block";
  } else {
    outOfHoursToggle.className = "fas fa-chevron-down text-dark-grey out-of-hours-toggle";
    outOfHoursText.style.display = "none";
  }
});
