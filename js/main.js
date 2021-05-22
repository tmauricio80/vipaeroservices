(function ($) {
 "use strict";

/*----------------------------
 jQuery MeanMenu
------------------------------ */
	jQuery('nav#dropdown').meanmenu();	
	
/*----------------------------
 wow js active
------------------------------ */
 new WOW().init();
 
/*----------------------------
 owl active
------------------------------ */  
  $(".total-team").owlCarousel({
      autoPlay: true, 
	  slideSpeed:2000,
	  pagination:true,
	  navigation:false,	  
      items : 4,
	  /* transitionStyle : "fade", */    /* [This code for animation ] */
	  navigationText:["<i class='fa fa-angle-left'></i>","<i class='fa fa-angle-right'></i>"],
      itemsDesktop : [1199,4],
	  itemsDesktopSmall : [980,3],
	  itemsTablet: [768,1],
	  itemsMobile : [479,1],
  });
 
/*----------------------------
Home Testimonial
------------------------------ */  
  $(".home-testimonial").owlCarousel({
      autoPlay: true, 
	  slideSpeed:2000,
	  pagination:true,
	  navigation:false,	  
      items : 1,
	  /* transitionStyle : "fade", */    /* [This code for animation ] */
	  navigationText:["<i class='fa fa-angle-left'></i>","<i class='fa fa-angle-right'></i>"],
      itemsDesktop : [1199,1],
	  itemsDesktopSmall : [980,1],
	  itemsTablet: [768,1],
	  itemsMobile : [479,1],
  });

 /*----------------------------
 Sidebar Testimonial
 ------------------------------ */  
   $(".sidebar-testimonial").owlCarousel({
       autoPlay: true, 
 	  slideSpeed:2000,
 	  pagination:true,
 	  navigation:false,	  
       items : 1,
 	  /* transitionStyle : "fade", */    /* [This code for animation ] */
 	  navigationText:["<i class='fa fa-angle-left'></i>","<i class='fa fa-angle-right'></i>"],
       itemsDesktop : [1199,1],
 	  itemsDesktopSmall : [980,1],
 	  itemsTablet: [768,1],
 	  itemsMobile : [479,1],
   });

 /*----------------------------
 Single Project Image Slider
 ------------------------------ */  
   $(".single-project-slider").owlCarousel({
       autoPlay: true, 
 	  slideSpeed:2000,
 	  pagination:false,
 	  navigation:true,	  
       items : 1,
 	  /* transitionStyle : "fade", */    /* [This code for animation ] */
 	  navigationText:["<i class='fa fa-angle-left'></i>","<i class='fa fa-angle-right'></i>"],
       itemsDesktop : [1199,1],
 	  itemsDesktopSmall : [980,1],
 	  itemsTablet: [768,1],
 	  itemsMobile : [479,1],
   });

/*----------------------------
 price-slider active
------------------------------ */  
	  $( "#slider-range" ).slider({
	   range: true,
	   min: 40,
	   max: 600,
	   values: [ 60, 570 ],
	   slide: function( event, ui ) {
		$( "#amount" ).val( "£" + ui.values[ 0 ] + " - £" + ui.values[ 1 ] );
	   }
	  });
	  $( "#amount" ).val( "£" + $( "#slider-range" ).slider( "values", 0 ) +
	   " - £" + $( "#slider-range" ).slider( "values", 1 ) );  
	   
/*--------------------------
 scrollUp
---------------------------- */	
	$.scrollUp({
        scrollText: '<i class="fa fa-angle-up"></i>',
        easingType: 'linear',
        scrollSpeed: 900,
        animation: 'fade'
    });
/*-------------------------------
Counter Up
---------------------------------*/     
	$('.about-counter').counterUp({
	delay: 50,
	time: 3000
	}); 

/*-------------------------------------
Jquery 	Color pannel setting
-------------------------------------*/
$('span.skype-color').on('click',function(){
	$('body').addClass('skype-color-body').removeClass('green-color-body red-color-body blue-color-body');
});
$('span.red-color').on('click',function(){
	$('body').addClass('red-color-body').removeClass('green-color-body skype-color-body blue-color-body');
});
$('span.green-color').on('click',function(){
	$('body').addClass('green-color-body').removeClass('red-color-body skype-color-body blue-color-body');
});
$('span.blue-color').on('click',function(){
	$('body').addClass('blue-color-body').removeClass('red-color-body green-color-body skype-color-body');
});
$('.cross-button').on('click',function(){
	$('.demo-panel-setting-area').toggleClass( "highlight" );
});



  
 
})(jQuery); 