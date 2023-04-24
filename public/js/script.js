$(document).ready(function(){
    $(".owl-price").owlCarousel({
        items: 1,

    });
});


$(document).ready(function(){
    $(".owl-carousel").owlCarousel({
        items: 2,
        margin: 150,
        responsive:{
            0:{
                items:1
            },
            768:{
                items:2
            },
            1180:{
                items:3
            }
        }
    });
});
