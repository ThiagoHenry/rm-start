$(document).ready(function() {

  $('#gallery .owl-carousel').owlCarousel({
		items:1,
		margin:10,
		autoHeight:true,
		loop:true,
		nav:true,
    URLhashListener:true,
    autoplayHoverPause:true,
    startPosition: 'URLHash'
	})

  $('#timeline .owl-carousel').owlCarousel({
    // loop:true,
    margin:10,
    responsive:{
        0:{
            items:3
        },
        600:{
            items:3
        },
        1000:{
            items:6
        }
    }
  })
});
