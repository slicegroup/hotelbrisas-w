// Place all the behaviors and hooks related to the matching controller here.
// All this logic will automatically be available in application.js.

$( document ).ready(function() {
	$('.single-banner').slick({
		// arrow: true,
		prevArrow: '<div class="slick-prev-arrow"><i class="fa fa-chevron-left" aria-hidden="true"></i></div>',//$('.slick-prev-arrow'),|
		nextArrow: '<div class="slick-next-arrow"><i class="fa fa-chevron-right" aria-hidden="true"></i></div>',//$('.slick-next-arrow'),
	});

	$('.slick-room').slick({
		prevArrow: '<div class="slick-prev-arrow"><i class="fa fa-chevron-left" aria-hidden="true"></i></div>',//$('.slick-prev-arrow'),
		nextArrow: '<div class="slick-next-arrow"><i class="fa fa-chevron-right" aria-hidden="true"></i></div>',//$('.slick-next-arrow'),
	});

	$('.slick-services').slick({
		infinite: true,
		slidesToShow: 3,
		slidesToScroll: 3,
		vertical: true,
		verticalSwiping: true,
		dots: true,
		// autoplay: true,
		// autoplaySpeed: 1000
	});
});