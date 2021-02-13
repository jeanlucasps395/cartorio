$(document).ready(function () {
	$(".mm-slider").slick({
		slidesToShow: 1,
		slidesToScroll: 1,
		dots: true,
		arrows: false,
		autoplay: true,
	});
});

// SCROLL SUAVE
$(function () {
	$('a[href*="#"]:not([href="#"])').click(function () {
		var target = $(this.hash);

		if (target.length) {
			$("html, body").animate({ scrollTop: target.offset().top }, 1000);
			return false;
		}
	});
});

// SLICK PRODUCT
$(document).ready(function () {
	$(".mm-product__block-left--img").slick({
		slidesToShow: 1,
		slidesToScroll: 1,
		responsive: [
			{
				breakpoint: 1440,
				settings: {
					slidesToShow: 1,
					slidesToScroll: 1,
				},
			},
			{
				breakpoint: 769,
				settings: {
					slidesToShow: 1,
					slidesToScroll: 1,
				},
			},
			{
				breakpoint: 500,
				settings: {
					slidesToShow: 1,
					slidesToScroll: 1,
				},
			},
		],
	});
});
