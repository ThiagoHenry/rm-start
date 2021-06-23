$(document).ready(function() {


// console.log(Identifica_mobile());








//RESIZE
ta_el_img_carousel = $(".carousel-inner img");
ta_width = ta_el_img_carousel.width();
ta_height = ta_el_img_carousel.height();

if (Identifica_mobile()){
	height = $(".carousel-caption").height();
	$(".carousel-inner img").css("height", height+20+"px")
  } else {
	$(".carousel-inner img").css("height", "auto")
  }

$(window, "carousel-inner img").on("input resize", function(){
   if(ta_el_img_carousel.height() != ta_height || ta_el_img_carousel.width() != ta_width){
      ta_width = ta_el_img_carousel.width();
      ta_height = ta_el_img_carousel.height();
	  if (Identifica_mobile()){
		height = $(".carousel-caption").height();
		$(".carousel-inner img").css("height", height+20+"px")
	  } else {
		$(".carousel-inner img").css("height", "auto")
	  }
   }
});

















// OWL-CAROUSEL
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


function Identifica_mobile() {
	if( /Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent) ) {
		return true;
	}
	return false;
}
