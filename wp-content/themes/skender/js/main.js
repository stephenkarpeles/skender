/* ========================================
   Main Scripts 
   ======================================== */

// Allow for dollar sign usage with jQuery
var $ = jQuery.noConflict();

// CountUp Script
//var numAnim = new CountUp("recognitionNumber1", 1, 15);
//if (!numAnim.error) {
//    numAnim.start();
//} else {
//    console.error(numAnim.error);
//}
//
//var numAnim = new CountUp("recognitionNumber2", 1, 30);
//if (!numAnim.error) {
//    numAnim.start();
//} else {
//    console.error(numAnim.error);
//}
//
//var numAnim = new CountUp("recognitionNumber3", 1, 22);
//if (!numAnim.error) {
//    numAnim.start();
//} else {
//    console.error(numAnim.error);
//}

// Show menu tooltip when hovering parent li
$(document).ready(function () {
  $('.main-nav li ul').hover(function () {
      $(this).prev('a').addClass('active');
  }, function () {
      $(this).prev('a').removeClass('active');
  });
});

// Equal Heights Columns
$(function() {
  $('.project-block--stacked').matchHeight({
        target: $('.project-block--stacked-pair')
    });
});

$(function() {
  $('.project-block').matchHeight();
})

$(function() {
  $('.single-project-slide').matchHeight();
})

$(function() {
  $('.location-col').matchHeight();
})

// Individual Project Slick Slider
$(document).ready(function(){
  $('.single-project-slider').slick({
    autoplay: true,
    autoplaySpeed: 3000,
  });
});

// Toggle Featured Property Text
const featuredExpand = document.querySelector('.featured__toggle');
const featuredRevealContent = document.querySelector('.featured__reveal-content');
if(featuredExpand){
  featuredExpand.addEventListener('click', (e) => {
    e.preventDefault();
    featuredRevealContent.classList.toggle('is-visible');
    featuredExpand.classList.toggle('rotate-180')
  });
}

// Lettering.js
$(document).ready(function() {
  $(".hero h1").lettering('words');
})

// Mobile menu toggle
const headerTrigger = document.querySelector('.nav-toggle');
const headerNav = document.querySelector('.main-nav #primary-menu');

if(headerTrigger){
  headerTrigger.addEventListener('click', (e) => {
    e.preventDefault();
    headerNav.classList.toggle('is-visible');
    headerTrigger.classList.toggle('has-open-nav');
  });
}

// Industry Slider


$('.industry-slider__slider').slick({
  infinite: true,
  slidesToShow: 3,
  slidesToScroll: 3,
  nextArrow: '<img class="ind-next-arrow ind-arrow" src="http://dev-skender.pantheonsite.io/wp-content/uploads/2018/01/arrow-right-white.svg" alt="" />',
  prevArrow: '<img class="ind-prev-arrow ind-arrow" src="http://dev-skender.pantheonsite.io/wp-content/uploads/2018/01/arrow-left-white.svg" alt="" />'
});

// Modals
$('.open-popup-link').magnificPopup({
  type:'inline',
  midClick: true // allow opening popup on middle mouse click. Always set it to true if you don't provide alternative source.
});
