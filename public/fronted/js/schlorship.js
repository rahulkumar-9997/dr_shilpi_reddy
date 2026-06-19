$(document).ready(function () {
    $(document).on('click', 'a[data-schlorship="true"], button[data-schlorship="true"]', function () {
        var size = ($(this).data('size') == '') ? 'md' : $(this).data('size');
        var url = $(this).data('url');
        var data = {
            _token: $('meta[name="csrf-token"]').attr('content'),
            size: size,
            url: url
        };
        $("#commanModal .modal-dialog").removeClass('modal-sm modal-md modal-lg modal-xl')
        .addClass('modal-' + size);
        
        $.ajax({
            url: url,
            type: 'get',
            data: data,
            success: function (data) {
                $('.modal_popup .render-data').html(data.data);
                $('.modal_popup').addClass('contact-popup-visible');
                var $carousel = $('.schlorship-carousel');
                if ($carousel.hasClass('owl-loaded')) {
                    $carousel.trigger('destroy.owl.carousel');
                    $carousel.removeClass('owl-loaded');
                    $carousel.find('.owl-stage-outer').children().unwrap();
                }
                $carousel.owlCarousel({
                    loop: false,
                    margin: 10,
                    nav: true,
                    dots: true,
                    autoplay: true,
                    autoplayTimeout: 3000,
                    autoplayHoverPause: true,
                    responsive: {
                        0: {
                            items: 2
                        },
                        600: {
                            items: 2
                        },
                        1000: {
                            items: 3
                        }
                    }
                });
                
            },
            error: function (data) {
                data = data.responseJSON;
            }
        });
    });

    $(document).on('click', '.close-modal', function() {
		$('.modal_popup').removeClass('contact-popup-visible');
        var $carousel = $('.schlorship-carousel');
        if ($carousel.hasClass('owl-loaded')) {
            $carousel.trigger('destroy.owl.carousel');
        }
	});
});