$('.annoucment-panel').slick({
    dots: false,
    infinite: false,
    arrows : false,
    speed: 300,
    slidesToShow: 3,
    slidesToScroll: 1,
    responsive: [
        {
        breakpoint: 1024,
        settings: {
            autoplay: true,
            autoplaySpeed: 2000,  
            slidesToShow: 1,
            slidesToScroll: 1,
            infinite: true,
            dots: false
        }
        }
    ]
});

