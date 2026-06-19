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
function showNotificationAll(type, title = '', message = '') {
    let bgColor = '#0d6efd';
    switch (type) {
        case 'success':
            bgColor = '#198754';
            break;
        case 'error':
            bgColor = '#dc3545';
            break;
        case 'warning':
            bgColor = '#ffc107';
            break;

        case 'info':
            bgColor = '#0dcaf0';
            break;
    }
    let toast = `
        <div class="custom-toast">
            ${title ? `<strong>${title}</strong><br>` : ''}
            ${message}
        </div>
    `;
    $('body').append(toast);
    let $toast = $('.custom-toast').last();
    $toast.css({
        position: 'fixed',
        top: '20px',
        right: '20px',
        background: bgColor,
        color: '#fff',
        padding: '15px 20px',
        borderRadius: '8px',
        zIndex: 99999,
        boxShadow: '0 4px 10px rgba(0,0,0,.2)',
        minWidth: '250px'
    });
    setTimeout(function () {
        $toast.fadeOut(300, function () {
            $(this).remove();
        });
    }, 3000);
}
/**book Modal open js */
function openEnquiryFormModal() {
    const modal = document.getElementById('enquiryFormModal');
    if (modal) {
        modal.classList.remove('tw-hidden');
        modal.classList.add('tw-flex');
        document.body.style.overflow = 'hidden';
    }
}
function closeEnquiryFormModal() {
    const modal = document.getElementById('enquiryFormModal');
    if (modal) {
        modal.classList.add('tw-hidden');
        modal.classList.remove('tw-flex');
        document.body.style.overflow = '';
    }
}
document.addEventListener('DOMContentLoaded', function() {
    const modal = document.getElementById('enquiryFormModal');
    if (modal) {
        modal.addEventListener('click', function(e) {
            if (e.target === this) {
                closeEnquiryFormModal();
            }
        });
    }
});
document.addEventListener('keydown', function(e) {
    if (e.key === 'Escape') {
        closeEnquiryFormModal();
    }
});
/**Modal open js */
$(document).ready(function(){
    $(document).off('submit', '.enquiry-form').on('submit', '.enquiry-form', function (event) {
        event.preventDefault();
        var form = $(this);
        var submitButton = form.find('button[type="submit"]');
        $('.form-control').removeClass('is-invalid');
        $('.invalid-feedback').remove();
        submitButton.prop('disabled', true).html('<span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span> Submitting...');
        var formType = form.find('input[name="form_type"]').val();
        var formData = new FormData(this);

        $.ajax({
            url: form.attr('action'),
            type: 'POST',
            data: formData,
            processData: false,
            contentType: false,
            success: function(response) {
                submitButton.prop('disabled', false).html('Make an appointment');                    
                if (response.status === 'success') {
                    showNotificationAll("success", response.message);
                    form[0].reset();
                    if (formType === 'modalForm') {
                        setTimeout(function() {
                            closeEnquiryFormModal();
                        }, 2000);
                    }                    
                    
                }
            },
            error: function(xhr) {
                submitButton.prop('disabled', false).html('Make an appointment');                
                var errors = xhr.responseJSON?.errors;
                if (errors) {
                    $.each(errors, function(key, value) {
                        var inputField = form.find('[name="' + key + '"]');
                        inputField.addClass('is-invalid');
                        inputField.closest('div').find('.invalid-feedback').html(value[0]);
                    });
                    var firstError = form.find('.is-invalid').first();
                    if (firstError.length) {
                        if (formType === 'modalForm') {
                            var modalBody = form.closest('.tw-max-h-\\[90vh\\]');
                            if (modalBody.length) {
                                modalBody.scrollTop(firstError.position().top - 100);
                            }
                        } else {
                            $('html, body').animate({
                                scrollTop: firstError.offset().top - 150
                            }, 500);
                        }
                    }
                } else {
                    showNotificationAll("warning", "An error occurred! Please try again");
                }
            }
        });
    });
 }); 
