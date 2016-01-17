$(document).ready(function(){

	/*
	|-----------------------------------------------------------------------------------------------------------------
	| OFF CANVAS (Mobile Menu)
	|-----------------------------------------------------------------------------------------------------------------
	*/
	// Hides Off-Canvas menu after selecting a menu tab/item
	(function() {
		$('#menu').on('click', function(){
			//$('#myCheckbox').prop('checked', true); // Checks it
			$('#myCheckbox').prop('checked', false); // Unchecks it
		});
	})();


	/*
	|-----------------------------------------------------------------------------------------------------------------
	| NAVBAR HEADER
	| animation effects for 'on scroll up' ...
	|-----------------------------------------------------------------------------------------------------------------
	*/
	var navbarFixedTop = $('.navbar-fixed-top'),
		navbarNavListItems = $('.navbar-nav > li > a'),
		navbarBrand = $('.navbar-brand'),
		navbar = $('.navbar'),
		maximum = 30,
		padSmall = 15,
		padLarge = 25;


	$( window ).scroll(function() {
		var height = $(window).scrollTop();

		if( height > maximum ) {
			navbarFixedTop.css({'position': 'fixed', 'top': 0});
			navbarNavListItems.css({'padding-top': padSmall, 'padding-bottom': padSmall});
			navbarBrand.css({'padding-top': padSmall, 'padding-bottom': padSmall});
			navbar.css({'min-height': 0});

			navbarNavListItems.addClass('translate');
			navbarBrand.addClass('translate');

		} else {
			navbarFixedTop.css({'position': 'absolute', 'top': 30});
			navbarNavListItems.css({'padding-top': padLarge, 'padding-bottom': padLarge});
			navbarBrand.css({'padding-top': padLarge, 'padding-bottom': padLarge});
			navbar.css({'min-height': 50});
		}
		
	});


	/*
	|-----------------------------------------------------------------------------------------------------------------
	| MENU DROPDOWN CONTENT
	|-----------------------------------------------------------------------------------------------------------------
	*/
	var myParentWidth = $('ul.nav.navbar-nav').width();
	$('li.active.websites').hover(function(){
		$('.home-websites').css({'width': myParentWidth + 100});
		
	});

	$('li.graphics').hover(function(){
		$('.home-graphics').css({'width': myParentWidth + 100});
		
	});

	$('ul#menu li a').hover(function(){
		$('ul#submenu').css({'display': 'block'});
	});


});








