// var mainnav = document.getElementById("mobile-nav");
// var navbarToggle = document.getElementById("navbar-toggle");
// var navOpen = document.getElementById("open-toggle");
// var navClose = document.getElementById("close-toggle");

// navbarToggle.addEventListener("click", function(){
//     mainnav.classList.toggle("flex"); // Toggle the "block" class
//     navOpen.classList.toggle("hidden"); // Toggle the "hidden" class
//     navClose.classList.toggle("block"); // Toggle the "hidden" class
// });

var mainnav = document.getElementById("mobile-nav");

var navbarToggle = document.getElementById("navbar-toggle");

var navOpen = document.getElementById("open-toggle");

var navClose = document.getElementById("close-toggle");

navbarToggle.addEventListener("click", function () {
  mainnav.classList.toggle("hidden");
  mainnav.classList.toggle("flex");
  navOpen.classList.toggle("block");
  navOpen.classList.toggle("hidden");
  navClose.classList.toggle("hidden");
  navClose.classList.toggle("block");
});
