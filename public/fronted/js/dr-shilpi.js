$(function () {
    $(this).removeClass("disabled");
    $(".feature_carousel").owlCarousel({
        loop: false,
        margin: 5,
        nav: true,
        navText: [
            '<span class="fas fa-chevron-left fa-2x"></span>',
            '<span class="fas fa-chevron-right fa-2x"></span>',
        ],
        autoplay: true,
        dots: false,
        autoplayHoverPause: true,
        responsive: {
            0: {
                items: 2,
            },
            600: {
                items: 3,
            },
            1000: {
                items: 6,
            },
        },
    });
    /**SCHLORSHIP IMAGES */
    $(".schlorship_images_carousel").owlCarousel({
        loop: false,
        margin: 5,
        nav: true,
        navText: [
            '<span class="fas fa-chevron-left fa-2x"></span>',
            '<span class="fas fa-chevron-right fa-2x"></span>',
        ],
        autoplay: true,
        dots: false,
        autoplayHoverPause: true,
        responsive: {
            0: {
                items: 2,
            },
            600: {
                items: 3,
            },
            1000: {
                items: 4,
            },
        },
    });
    /**SCHLORSHIP IMAGES */

    $(".about_us_feature_carousel").owlCarousel({
        loop: true,
        margin: 4,
        nav: true,
        navText: [
            '<span class="fas fa-chevron-left fa-2x"></span>',
            '<span class="fas fa-chevron-right fa-2x"></span>',
        ],
        autoplay: true,
        autoplayTimeout: 2000,
        autoplaySpeed: 800,
        slideTransition: "linear",
        autoplayHoverPause: true,
        dots: false,
        responsive: {
            0: {
                items: 2,
            },
            600: {
                items: 3,
            },
            1000: {
                items: 4,
            },
        },
    });
});

$(window).on("load", function () {
    var $container = $(".grid-services");
    $container.imagesLoaded(function () {
        $container.isotope({
            filter: "*",
        });
    });

    //   $('.portfolio_filter a').on('click', function() {
    // $('.portfolio_filter .active').removeClass('active');
    // $(this).addClass('active');
    // var selector = $(this).attr('data-filter');
    // $container.isotope({
    //     filter: selector,
    //     animationOptions: {
    // 	duration: 500,
    // 	animationEngine : "jquery"
    //     }
    // });
    // return false;
    //   });
});

$(window).scroll(function () {
    var sticky = $(".pa-main-header"),
        scroll = $(window).scrollTop();

    if (scroll >= 100) sticky.addClass("animated fadeInDown fixed");
    else sticky.removeClass("animated fadeInDown fixed");
});

$(document).ready(function () {
    $("#toast").delay(10000).fadeOut("slow");

    /**mobile menu */
    $(document).on("click", ".navbar-toggler.p-0, .menuopen", function (e) {
        $(".menu-overlay").addClass("open");
        $(".collapse.navbar-collapse").addClass("show");
    });
    $(document).on("click", ".menu-overlay", function (e) {
        $(".navbar-collapse").removeClass("show");
        $(".menu-overlay").removeClass("open");
        $(".navbar-toggler").addClass("collapsed");
    });
    $(document).on("click", ".close_btn", function (e) {
        $(".navbar-collapse").removeClass("show");
        $(".menu-overlay").removeClass("open");
        $(".navbar-toggler").addClass("collapsed");
    });
});
document.addEventListener("DOMContentLoaded", function () {
    setTimeout(function () {
        var elfsightLink = document.querySelector('a[href*="elfsight.com"]');
        if (elfsightLink) {
            elfsightLink.style.display = "none";
            elfsightLink.style.visibility = "hidden";
        }
    }, 2000);
});

document.addEventListener("DOMContentLoaded", function () {
    let lazyImages = document.querySelectorAll("img.lazyload");
    let observer = new IntersectionObserver(function (entries, observer) {
        entries.forEach((entry) => {
            if (entry.isIntersecting) {
                let img = entry.target;
                img.src = img.dataset.src;
                img.classList.remove("lazyload");
                observer.unobserve(img);
            }
        });
    });

    lazyImages.forEach((img) => {
        observer.observe(img);
    });
});

function enableDesktopDropdownHover() {
    if (window.innerWidth >= 992) {
        $(".nav-item.dropdown").hover(
            function () {
                $(this).addClass("show");
                $(this).find(".dropdown-menu").addClass("show");
            },
            function () {
                $(this).removeClass("show");
                $(this).find(".dropdown-menu").removeClass("show");
            },
        );
    } else {
        $(".nav-item.dropdown").off("mouseenter mouseleave");
    }
}

$(document).ready(function () {
    enableDesktopDropdownHover();
    $(window).resize(enableDesktopDropdownHover);
});
