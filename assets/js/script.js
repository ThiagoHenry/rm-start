$(document).ready(function() {




//opacity navbar
	$(window).scroll(function (event) {
	    var scroll = $(window).scrollTop();
	    if (scroll > 250) {
	    	$('nav').css('background', 'rgb(19 18 18 / 100%)')
	    } else {
	    	$('nav').css('background', 'rgb(19 18 18 / 75%)')
	    }
	});

//RESIZE
// resize img banner
w_div = $(".swiper-container.gallery-top").width();
percent = (w_div*100)/1920;
h_prop = (1080*percent)/100;
$(".swiper-container.gallery-top").css("height", h_prop+"px");

$( window ).resize(function() {

	w_div = $(".swiper-container").width();
	percent = (w_div*100)/1920;
	h_prop = (1080*percent)/100;
	$(".swiper-container.gallery-top").css("height", h_prop+"px");
});


// resize img text2
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
// FIM RESIZE



// swiper-container
var galleryThumbs = new Swiper('.gallery-thumbs', {
      spaceBetween: 10,
      slidesPerView: 11,
			breakpoints: {
	       0: {
	         slidesPerView: 5,
	       },
	       768: {
	         slidesPerView: 9,
	       },
	       1024: {
	         slidesPerView: 12,
	       },
	     },
      freeMode: true,
      watchSlidesVisibility: true,
      watchSlidesProgress: true,
    });
    var galleryTop = new Swiper('.gallery-top', {
      spaceBetween: 10,
			loop: true,
      navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
      },
      thumbs: {
        swiper: galleryThumbs
      }
    });
});


//idenfica se dispositivo é mobile
function Identifica_mobile() {
	if( /Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent) ) {
		return true;
	}
	return false;
}
