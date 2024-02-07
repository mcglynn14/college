var mainnav = document.getElementById("mobile-nav");

var navbarToggle = document.getElementById("navbar-toggle");

var navOpen = document.getElementById("open-toggle");

var navClose = document.getElementById("close-toggle");

navbarToggle.addEventListener("click", function(){
    mainnav.classList.toggle("active");
    navOpen.classList.toggle("opentoggle");
    navClose.classList.toggle("closetoggle");
})