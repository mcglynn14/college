var mainNav = document.getElementById("mobile-nav");

var navbarToggle = document.getElementById("navbar-toggle");

var navbarOpen = document.getElementById("toggle-open");

var navbarClose = document.getElementById("toggle-close");

navbarToggle.addEventListener("click", function(){
    mainNav.classList.toggle("active");
    navbarOpen.classList.toggle("toggle-open");
    navbarClose.classList.toggle("toggle-close");
});