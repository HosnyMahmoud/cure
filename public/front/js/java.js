var thumbs = jQuery('#main-sliders').slippry({
	  // general elements & wrapper
	  
	  // options
	  pager: false,
	  auto: true,
      controls:false,
     transition: 'horizontal', // fade, horizontal, kenburns, false
    kenZoom: 140,
    

	});


$('.next').click(function () {
	  thumbs.goToNextSlide();
    
	});

	$('.prev').click(function () {
	  thumbs.goToPrevSlide();
	});

   $(function() {
       $( "#datepicker").datepicker( );
    $( "#datepicker" ).datepicker("option", "showAnim","clip");
 
 	$("#owl-demo").owlCarousel({
		items : 4,
		lazyLoad : true,
		autoPlay : true,
		pagination : false,
	});
       
       
        	$("#vido").owlCarousel({
		items : 4,
		lazyLoad : true,
		autoPlay : true,
		pagination : false,
	});
  });
superplaceholder({
    el: document.querySelector('#name'),
    sentences: [ 'your name', 'Ex: Jone Smith'],

});
   superplaceholder({
    el: document.querySelector('#email'),
    sentences: [ 'your E-mail', 'Ex:Jone Smith@gmail.com'],
}); 
   superplaceholder({
    el: document.querySelector('#number'),
    sentences: [ 'your phone', 'Ex:012050*****'],
}); 
						
$(document).ready(function() {
 
  $("#slider-2").owlCarousel({
    items : 1,
    lazyLoad : true,
    navigation : true,
        navigationText : [
      "<i class='glyphicon glyphicon-menu-left'></i>",
      "<i class='glyphicon glyphicon-menu-right'></i>"
      ],
      autoPlay : true
  }); 


 
  $("#slider-3").owlCarousel({
    items : 1,
    lazyLoad : true,
    navigation : true,
          navigationText : [
      "<i class='glyphicon glyphicon-menu-left'></i>",
      "<i class='glyphicon glyphicon-menu-right'></i>"
      ],
  }); 
      $("#client").owlCarousel({
    items : 4,
    lazyLoad : true,
    navigation : true,
          navigationText : [
      "<i class='glyphicon glyphicon-menu-left'></i>",
      "<i class='glyphicon glyphicon-menu-right'></i>"
      ],
  });

});

