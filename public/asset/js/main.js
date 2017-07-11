$( document ).ready(function() {
    $('.search-nav').click(function() {
    	$('.more-menu').removeClass('active');
    	$('.content-more-menu').removeClass('show');
	  	$('.search-nav').toggleClass('active');
	  	$('.content-search-nav').toggleClass('show');
	});
	$('.more-menu').click(function() {
		$('.search-nav').removeClass('active');
    	$('.content-search-nav').removeClass('show');
	  	$('.more-menu').toggleClass('active');
	  	$('.content-more-menu').toggleClass('show');
	});
	$(window).resize(function() {
		if ($(window).width() < 768) {
		   	$(".have-sub-menu").click(function() {
				$(this).toggleClass('show-sub-menu');
				$(this).children(".sub-menu").toggle();
			});
		};
	});
});

