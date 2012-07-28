(function(){


	$('li#menu-toggler').click(function(){
			// activates toggling menu
			$('ul#the-menu').slideToggle('slow','swing');							  
	});	  
	
	$(window).resize(function(){
		var viewport = $(window).width(),
			 nav_menu = $('ul#the-menu');
		if ( viewport > 767 ) {
			// closes the menu when resizing from mobile to desktop
			$('ul#the-menu').removeAttr('style'); 

		}
	});
	
})();


