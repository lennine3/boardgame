//slide
$('.owl-product-more').owlCarousel({
    loop: true,
    autoplay: true,
    navSpeed: 1750,
    dots: false,
    margin: 10,
    center: true,
    autoplaySpeed: 1750,
    responsive: {
        0: {
            items: 1
        },
        600: {
            items: 2
        },
        1000: {
            items: 4
        }
    }
})
var owl = $('.owl-product-more');
owl.owlCarousel();
// Go to the next item
$('.btn-right-related').click(function () {
    owl.trigger('next.owl.carousel', [1750]);
})
// Go to the previous item
$('.btn-left-related').click(function () {
    // With optional speed parameter
    // Parameters has to be in square bracket '[]'
    owl.trigger('prev.owl.carousel', [1750]);
})

$('.owl-single').owlCarousel({
    loop: true,
    autoplay: true,
    navSpeed: 1750,
    dots: false,
    center: true,
    margin:10,
    autoplaySpeed: 1750,
    responsive: {
        0: {
            items: 1
        },
        600: {
            items: 1
        },
        1000: {
            items: 1
        }
    }
})
var owl = $('.owl-product-more');
owl.owlCarousel();
// Go to the next item
$('.btn-right-related').click(function () {
    owl.trigger('next.owl.carousel', [1750]);
})
// Go to the previous item
$('.btn-left-related').click(function () {
    // With optional speed parameter
    // Parameters has to be in square bracket '[]'
    owl.trigger('prev.owl.carousel', [1750]);
})
