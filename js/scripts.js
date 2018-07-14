$(document).ready(function() {
    $('.lazy').slick({
        lazyLoad: 'ondemand',
        slidesToShow: 5,
        slidesToScroll:1,
        autoplay: true,
        autoplaySpeed: 4000,
		responsive: [{
            breakpoint: 1199,
            settings: {
                slidesToShow: 4,
                infinite: false,
                dots: true
            }
        },
		 {
            breakpoint: 1199,
            settings: {
                slidesToShow: 4,
            }
        },
		{
            breakpoint: 992,
            settings: {
                slidesToShow: 3,
            }
        },
		{
            breakpoint: 768,
            settings: {
                slidesToShow: 3,
            }
        },
		{
            breakpoint: 600,
            settings: {
                slidesToShow: 2,
            }
        },
		
		
		
		]
    });
	$('.lazy-testimonials').slick({
        lazyLoad: 'ondemand',
        slidesToShow: 1,
        slidesToScroll:1,
        autoplay: true,
        autoplaySpeed: 4000,
		responsive: [{
            breakpoint: 1199,
            settings: {
                slidesToShow: 1,
                infinite: false,
                dots: true
            }
        },
		
		]
    });
	
});

	
