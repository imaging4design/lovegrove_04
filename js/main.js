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
		maximum = 20,
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
			navbarFixedTop.css({'position': 'absolute', 'top': 20});
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
	// Set width of mega-menu flyout/drop-down
	var myParentWidth = $('ul.nav.navbar-nav').width();

	$('.home-websites').css({'width': myParentWidth});
	$('.home-graphics').css({'width': myParentWidth});

	$('ul#menu li a').hover(function(){
		$('ul#submenu').css({'display': 'block'});
	});


	
	function divHeights() {
		var divWidth = $('.square').innerWidth(),
			divs = $('.square'),
			arrow = $('.arrow');
		divs.height(divWidth);
		arrow.css({
			'border-width': divWidth / 8
		});
	};

	divHeights();
	

	$( window ).resize(function() {
		divHeights();
	});



});








