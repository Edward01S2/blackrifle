/**
 * External Dependencies
 */
import 'jquery';
import 'alpinejs';
import 'lity';
import Swiper, { Navigation } from 'swiper';
import Flickity from 'flickity';

import { gsap } from "gsap";
import { ScrollTrigger } from "gsap/ScrollTrigger";
import { ScrollToPlugin } from "gsap/ScrollToPlugin";

Swiper.use([Navigation]);

gsap.registerPlugin(ScrollTrigger, ScrollToPlugin);

$(document).ready(() => {

  const swiper = new Swiper('.coffee-slider', {
    loop: true,
    slidesPerView: 'auto',
    loopedSlide: 1,
    grabCursor: true,
    centeredSlides: true,
    preventClicks: false,
    navigation: {
      nextEl: '.swiper-next',
      prevEl: '.swiper-prev',
    }
  });
  // if($('.coffee-slider').length) {
  //   var flkty = new Flickity('.coffee-slider', {
  //     contain: true,
  //     pageDots: false,
  //     prevNextButtons: false,
  //     cellAlign: 'center',
  //     wrapAround: true,
  //     on: {
  //       ready: function() {
  //         this.resize();
  //       }
  //     }
  //   });
  // }

  // Flickity.prototype._createResizeClass = function() {
  //   this.element.classList.add('flickity-resize');
  // };
  
  // Flickity.createMethods.push('_createResizeClass');
  
  // var resize = Flickity.prototype.resize;
  // Flickity.prototype.resize = function() {
  //   this.element.classList.remove('flickity-resize');
  //   resize.call( this );
  //   this.element.classList.add('flickity-resize');
  // };
  

  // $(window).smartresize(function(e){
  //   // console.log('resized')
  //   if(flkty) {
  //     flkty.resize();
  //     //console.log('flickity')
  //   }
  // });

  var speed = 50;
  
  var tickerWidth = $('.ticker').width();
  var spanWidth = $('.ticker .ticker-items').width();
  $('.ticker .ticker-items').clone().appendTo('.ticker-wrapper');
  // $('.ticker span').wrapAll('<span class="ticker-wrapper">');
  
  //gsap.set( '.ticker-wrapper' , {x: tickerWidth } );
  
  // v = d/t ... 
  // speed = moveX / duration ... so, 
  // duration = moveX / speed
  
  // This is the inital tween from off-screen (right) to the starting point (0)
  // So its duration is based on the width of the visible ticker area
  //var initDuration = tickerWidth/speed;
  
  // This is the tween of the entire span holding the text from 0 to -itsWidth
  // So its duration is based on the width of one span
  var loopDuration = spanWidth/speed;
  
  let tl = gsap.timeline();
    //tl.to( '.ticker-wrapper', { x: 0,  ease: "none", duration: initDuration } );
    tl.to( '.ticker-wrapper' , { x: -spanWidth,  ease: "none", repeat: -1, duration: loopDuration } );
    tl.delay(1);


  $('.return-top').on('click', function(e) {
    e.preventDefault();
    gsap.to(window, {duration: 2, scrollTo: {y: 0}});
  });

  gsap.fromTo(".stars", {
    rotation: 0
    }, {
    rotation: 360,
    duration: 60,
    repeat: -1,
    ease: "none",
  })

  const navLinks = gsap.utils.toArray("nav .nav-link");
  //console.log(navLinks);
  navLinks.forEach((link, i) => {
    link.addEventListener("click", function(e) {
      var href = e.currentTarget.getAttribute("href")
      var anchor = href.substring(href.indexOf("#"))

      if(document.querySelectorAll(anchor).length > 0) {
        e.preventDefault();
        gsap.to(window, {duration: 1.5, scrollTo: {y: anchor, offsetY: 100 }});
      }
    });
  });

});

(function($,sr){

  // debouncing function from John Hann
  // http://unscriptable.com/index.php/2009/03/20/debouncing-javascript-methods/
  var debounce = function (func, threshold, execAsap) {
      var timeout;

      return function debounced () {
          var obj = this, args = arguments;
          function delayed () {
              if (!execAsap)
                  func.apply(obj, args);
              timeout = null;
          };

          if (timeout)
              clearTimeout(timeout);
          else if (execAsap)
              func.apply(obj, args);

          timeout = setTimeout(delayed, threshold || 100);
      };
  }
  // smartresize 
  jQuery.fn[sr] = function(fn){  return fn ? this.bind('resize', debounce(fn)) : this.trigger(sr); };

})(jQuery,'smartresize');