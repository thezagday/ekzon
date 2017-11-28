$(document).ready(function(){
	$('.slider-slick-mult').slick({
	  dots: true,
		arrows: true,
	  speed: 300,
		autoplay: true,
	  slidesToShow: 1,
  	variableWidth: true,
		responsive: [
			{
				breakpoint: 820,
				settings: {
					dots: true,
					arrows: true,
				  speed: 300,
				  slidesToShow: 1,
					slidesToScroll: 1
				}
			}
		]
	});
});
