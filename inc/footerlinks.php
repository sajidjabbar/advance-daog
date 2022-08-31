<!-- Jquery JS-->
<script src="https://code.jquery.com/jquery-3.6.0.min.js" type="text/javascript"></script>
<!-- Jquery JS -->
<!-- Bootstrap Js -->
<script src="js/bootstrap.min.js"></script>
<!-- Bootstrap Js -->
<!-- Popper JS -->
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
    integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous">
</script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js"
    integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
</script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js"
    integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
</script>

<!-- Popper JS -->
<!-- slick slider js -->
<script src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
<!-- slick slider js -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/wow/1.1.2/wow.min.js"></script>
<!-- <script src="https://raw.githubusercontent.com/stevenwanderski/conditional-field/master/dist/conditional-field.min.js"></script> -->

<!-- Main Js -->
<script src="js/main.js"></script>
<!-- Main Js -->

<script>
$(document).ready(function() {
    // loader css starts here
    $(window).on('load', function() {
        $("#preloader").fadeOut(1000);
    });
    // loader css ends here
    $('.nav-toggle-wrapper button').click(() => {
        $('.off-canvas-header-wrapper').addClass('open');
    })
    $('.off-canvas-header-wrapper button svg').click(function() {
        $('.off-canvas-header-wrapper').removeClass('open')
    })

    $('.navbar-item-wrapper.drop-item').hide();
    $('.off-canvas-header-wrapper a.dropdown').click(function() {
        $('.navbar-item-wrapper.drop-item').toggle();
    })

    // bannner slider js starts here
    $('.banner-slider').slick({
        dots: true,
        arrows: false,
    });
    // bannner slider js ends here
    // testimonials-carousel
    $('.testimonials-carousel').slick({
        dots: false,
    });
    // testimonials-carousel
    // $('.testimonials-carousel-not-home').slick({
    //     infinite: true,
    //     slidesToShow: 3,
    //     slidesToScroll: 3
    // });
    $('.slider-man').slick({
        centerMode: true,
        centerPadding: '0px',
        slidesToShow: 3,
        responsive: [{
                breakpoint: 768,
                settings: {
                    arrows: false,
                    centerMode: false,
                    centerPadding: '0px',
                    slidesToShow: 1
                }
            },
            {
                breakpoint: 480,
                settings: {
                    arrows: false,
                    centerMode: false,
                    centerPadding: '0px',
                    slidesToShow: 1
                }
            }
        ]
    });
    $('.testimonials-carousel-not-home').slick({
        centerMode: true,
        centerPadding: '0px',
        slidesToShow: 3,
        responsive: [{
                breakpoint: 768,
                settings: {
                    arrows: false,
                    centerMode: false,
                    centerPadding: '0px',
                    slidesToShow: 1
                }
            },
            {
                breakpoint: 480,
                settings: {
                    arrows: false,
                    centerMode: false,
                    centerPadding: '0px',
                    slidesToShow: 1
                }
            }
        ]
    });
    // product card js starts here
    $('.product-card-slider').slick({
        dots: false,
        arrows: false,
        slidesToShow: 4,
    });
    // product card js ends here
    // testimonails js starts here
    $('.testimonails-slider').slick({
        dots: false,
    });
    // testimonails js ends here
})

function search_bar() {
    $('.search-trigger').on('click', function() {
        const search = $('.search');

        if (search.is('.search--opened')) {
            search.removeClass('search--opened');
        } else {
            search.addClass('search--opened');
            $('.search__input')[0].focus();
        }
    });
}
search_bar();
$(document).on('click', function(event) {
    if (!$(event.target).closest('.search, .search-trigger').length) {
        $('.search').removeClass('search--opened');
    }
});
</script>