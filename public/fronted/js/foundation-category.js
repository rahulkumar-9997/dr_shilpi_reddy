$(document).ready(function() {    
    initIsotopeOther();
    $(".foundation-pills .nav-link").on("click", function(e) {
        e.preventDefault();
        var categoryId = $(this).data("id");
        var tabContent = $(".foundation-image-area");
        $.ajax({
            url: foundationCategoryUrl,
            type: "GET",
            data: { id: categoryId },
            beforeSend: function() {
                tabContent.html("<p>Loading...</p>");
            },
            success: function(response) {
                if (response.html) {
                    tabContent.html(response.html);
                   $(".grid-services-foundation").imagesLoaded(function() {
                    	initIsotopeOther();
                	});
                } else {
                    tabContent.html("");
                }
            },
            error: function(xhr, status, error) {
                console.error("AJAX Error:", xhr.responseText);
                tabContent.html("<p>Error loading data.</p>");
            }
        });
    });

    $(".foundation-pills .nav-link.active").trigger("click");
});
function initIsotopeOther() {
    var $container = $(".grid-services-foundation");

    if ($container.length) {
        $container.imagesLoaded(function() {
            $container.isotope({
                itemSelector: ".col-lg-4",
                layoutMode: "masonry",
                percentPosition: true
            });

            setTimeout(function () {
                $container.isotope("layout");
            }, 500);
        });
    }
}
