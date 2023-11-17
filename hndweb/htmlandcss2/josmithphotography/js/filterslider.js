var swiper;

function openPopup(initialSlide, filter) {
    // Display the popup only if initialSlide is provided
    if (initialSlide) {
        document.getElementById("imagePopup").style.display = "block";

        // Collect all visible images in the .container
        var visibleImages;
        if (filter === 'all') {
            visibleImages = document.querySelectorAll('main .container div');
        } else {
            visibleImages = document.querySelectorAll(`main .image-${filter}`);
        }

        var swiperWrapper = document.getElementById("swiper-wrapper");
        swiperWrapper.innerHTML = "";

        // Count the number of images that need to be loaded
        var imagesToLoad = 0;

        // Create Swiper slides dynamically
        visibleImages.forEach(function (image, index) {
            var slide = document.createElement("div");
            slide.className = "swiper-slide";
            var imgClone = image.querySelector('img').cloneNode(true);

            // Add a load event listener to each image
            imgClone.onload = function () {
                imagesToLoad--;

                // Check if all images have loaded before initializing Swiper
                if (imagesToLoad === 0) {
                    initializeSwiper(initialSlide, visibleImages);
                }
            };

            slide.appendChild(imgClone);
            swiperWrapper.appendChild(slide);
            imagesToLoad++;
        });

        // If no images to load, initialize Swiper directly
        if (imagesToLoad === 0) {
            initializeSwiper(initialSlide, visibleImages);
        }
    }
}

function initializeSwiper(initialSlide, visibleImages) {
    // Initialize Swiper
    swiper = new Swiper('.swiper-container', {
        loop: true,
        pagination: {
            el: '.swiper-pagination',
            clickable: true,
        },
        navigation: {
            nextEl: '.swiper-button-next',
            prevEl: '.swiper-button-prev',
        },
    });

    // Find the index of the initial slide
    var initialSlideIndex = Array.from(visibleImages).findIndex(function (image) {
        return image.querySelector('img').src.includes(initialSlide);
    });

    // Set the initial slide based on the clicked image path
    swiper.slideTo(initialSlideIndex);
}

function closePopup() {
    // Hide the popup
    document.getElementById("imagePopup").style.display = "none";

    // Destroy Swiper instance to prevent issues with multiple popups
    if (swiper) {
        swiper.destroy();
    }
}

// Event listener for images click
$('main .container .images div').on('click', function () {
    const filter = $(this).hasClass('image-wedding') ? 'wedding' : 'landscape';
    openPopup($(this).find('img').attr('src'), filter);
});

$(document).ready(function () {
    $('main .container .images div').show();

    $('.filter-buttons button').on('click', function () {
        const filter = $(this).data('filter');

        if (filter === 'all') {
            $('main .container .images div').show();
        } else {
            $('main .container .images div').hide();
            $(`main .image-${filter}`).show();
        }
    });
});