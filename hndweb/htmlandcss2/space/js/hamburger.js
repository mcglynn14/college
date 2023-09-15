var mainnav = document.getElementById("mobile-nav");

var navbarToggle = document.getElementById("navbar-toggle");

var navbarOpen = document.getElementById("open-toggle");

var navbarClose = document.getElementById("close-toggle");


navbarToggle.addEventListener("click", function(){
    mainnav.classList.toggle("active");
    navbarOpen.classList.toggle("open-toggle");
    navbarClose.classList.toggle("close-toggle");

})