$(function(){
    
$(window).scroll(function(){
    var scrolling  = $(this).scrollTop();
    if(scrolling > 200){
        $('.navbar').addClass('bg');
    }
    else{
       $('.navbar').removeClass('bg'); 
    }
    
    if(scrolling > 300){
        $('.back-top').fadeIn(500);
    }
    else {
        
        $('.back-top').fadeOut(500);
    }
}); 
    
$('.back-top').click(function(){
   $('html, body').animate({scrollTop:0},1500); 
});    
    
    
    
//animation scroll js
var html_body = $('html, body');
$('nav a').on('click', function () {
    if (location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') && location.hostname == this.hostname) {
        var target = $(this.hash);
        target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
        if (target.length) {
            html_body.animate({
                scrollTop: target.offset().top - 90
            }, 1500);
            return false;
        }
    }
});    
// banner slider
$('.banner-slider').slick({
  slidesToShow: 1,
  slidesToScroll: 1,
  autoplay: true,
  arrows:false,
  speed:1000,
  fade:true,
  autoplaySpeed: 2000,
}); 
    
// Service slider
$('.package-slider').slick({
  slidesToShow: 4,
  slidesToScroll: 1,
  autoplay: true,
  arrows:false,
  speed:1500,
  autoplaySpeed: 2000,
  responsive: [
      {
      breakpoint: 992,
      settings: {
        slidesToShow: 3,
      }
    },
    {
      breakpoint: 768,
      settings: {
        slidesToShow: 2,
      }
    },
    {
      breakpoint: 576,
      settings: {
        slidesToShow: 1,
      }
    }  
  ]    
});

// Blog slider
$('.blog-slider').slick({
  slidesToShow: 3,
  slidesToScroll: 1,
  autoplay: true,
  arrows:true,
  speed:1500,
  nextArrow:'.right',
  prevArrow:'.left',
  centerMode:true,
  centerPadding:false,
  autoplaySpeed: 2000,
  responsive: [
    {
      breakpoint: 768,
      settings: {
        slidesToShow: 2,
          centerMode:false,
      }
    },
    {
      breakpoint: 576,
      settings: {
        slidesToShow: 1,
      }
    }  
  ]       
});    
    
// video     
$('.venobox').venobox();  
    
$('.counter').counterUp({
    delay: 5,
    time: 2000
});    
    
// filter    
var containerEl = document.querySelector('.gal-main');

var mixer = mixitup(containerEl);    
    
    
});