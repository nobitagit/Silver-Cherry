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
	



//	$('dl.nav dt').click(function(){
//			$('dd.menu-item').slideToggle("slow","swing");							  
//	});	  
//	
//	$(window).resize(function(){
//		var viewport = $(window).width(),
//			 nav_menu = $('dl.nav').find('dd');
//		if ( viewport > 767 ) {
//			nav_menu.show(); // forse si puo' rimuovere, controlla- vedi collapsible_resp...
//			$('dd.menu-item').removeAttr('style'); // closes the menu when resizing from mobile to desktop
//			
//			
//		}
//	});
//	
	// Here comes the jquery dropdown - tnx to css-tricks
	
	
	
		  
	//function mobileNav() {
//		var viewport = $(window).width(),
//			 nav_menu = $('dl.nav').find('dd');
//		
//		if ( viewport < 768 ) {
//			nav_menu.hide();
//		}
//		if ( viewport > 767 ) {
//			nav_menu.show();
//		}
//							   
//	}; 
//
//		
//	mobileNav();
//		  
//		  		  
//	$(window).resize(function() {
//		 mobileNav(); 
//		});
//							 
//	
//	$('dl.nav').children('dt').click(function(){
//		$('dd.menu-item').slideToggle("slow","linear");						 
//		});
//		  
		  
	//toggles the menu in the navbar
//		 		 
//	$('nav').find('dt').click((function() {
//	$('dd.menu-item').fadeToggle("slow", "linear");
//	}));


						//var menuToggler = $('dl.mobile');
//							menuToggler.children('dd').hide();
//							menuToggler.children('dt').click((function(){
//							$('dd.menu-item').slideToggle("slow","linear");						 
//						}));
		

	
		
	//fetches the window size and displays the correct menu accordingly
//	$(window).resize(function() {
//		var viewport = $(window).width();
//		console.log(viewport);
//		if( viewport < 767 ) { 
//		 $('dl.hide-on-phones').toggle();
//		 
//		}else{ $('dl.show-on-phones').toggle(); }
//	});
	
	
	
//	$(window).load(function() {
//		var viewport = $(window).width();
//		console.log(viewport);
//		if( viewport < 767 ) { 
//			$('dl.nav').removeClass('hide-on-phones');
//		 	$('dl.nav').addClass('tabs mobile show-on-phones');
//			
//					var menuToggler = $('dl.mobile');
//					menuToggler.children('dd').hide();
//					menuToggler.children('dt').click((function(){
//					$('dd.menu-item').slideToggle("slow","linear");						 
//				}));
//			
//		}else{ 
//			$('dl.nav').removeClass('tabs mobile show-on-phones');
//			$('dl.nav').addClass('hide-on-phones');
//			}
//	});
//
	
//	$(window).resize(function() {
//		var viewport = $(window).width();
//		console.log(viewport);
//		if( viewport < 767 ) { 
//			$('dl.nav').removeClass('hide-on-phones');
//		 	$('dl.nav').addClass('tabs mobile show-on-phones');
//			
//					var menuToggler = $('dl.mobile');
//					menuToggler.children('dd').hide();
//					menuToggler.children('dt').click((function(){
//					$('dd.menu-item').slideToggle("slow","linear");						 
//				}));
//		}else{ 
//			$('dl.nav').removeClass('tabs mobile show-on-phones');
//			$('dl.nav').addClass('hide-on-phones');
//			
//		}
//	});

	
	
})();


