var offset = 500;
var duration = 750;
$(function(){
  $(window).scroll(function () {
    if ($(this).scrollTop() > offset)
      $('#top-up').fadeIn(duration);
    else
      $('#top-up').fadeOut(duration);
  });
  $('#top-up').click(function () {
  $('body,html').animate({scrollTop: 0}, duration);
});
});
$(document).ready( function() {
  $(".slide-cmt").slick({
    infinite: true,
    slidesToShow: 3,  
    slidesToScroll: 3,
    prevArrow: '<button class="slide-arrow prev-arrow"></button>',
    nextArrow: '<button class="slide-arrow next-arrow"></button>',
    arrows: true,
    responsive: [
      {
        breakpoint: 1023,
        settings: {
          slidesToShow: 2,
          slidesToScroll: 2,
          arrows:true,
        },
      },
      {
        breakpoint: 767,
        settings: {
          slidesToShow: 1,
          slidesToScroll: 1,
          arrows:false,
        },
      },],
})});
$(document).ready( function() {
  $(".banner-slide").slick({
    arrows: false,
    dots: true,
})});
$('.slider-for').slick({
  slidesToShow: 1,
  slidesToScroll: 1,
  arrows: false,
  fade: true,
  asNavFor: '.slider-nav'
});
$('.slider-nav').slick({
  slidesToShow: 4,
  slidesToScroll: 1,
  asNavFor: '.slider-for',
  arrows: false,
  dots: false,
  focusOnSelect: true
});
$('.autoplay').slick({
  slidesToShow: 5,
  slidesToScroll: 1,
  autoplay: true,
  autoplaySpeed: 2000,
  prevArrow: '<button class="slide-arrow prev-arrow"></button>',
  nextArrow: '<button class="slide-arrow next-arrow"></button>',
});
$(document).ready(function(){
  $('.slide-img').click(function(){
    $('.slide-img').removeClass('selected');
    $(this).addClass('selected');
  });
  $('.nav-link').click(function(){
    $('.nav-link').removeClass('active');
    $(this).addClass('active');
  });
});
const formatter = new Intl.NumberFormat('en-US', {
  style: 'currency',
  currency: 'USD',
});
window.onscroll = function() {scrollFunction()};
var navbar = document.getElementById("myTopnav");
var sticky = navbar.offsetTop;
function scrollFunction() {
  if (window.pageYOffset >= sticky) {
    navbar.classList.add("sticky")
  } else {
    navbar.classList.remove("sticky");
  }
}