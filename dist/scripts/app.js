(window.webpackJsonp=window.webpackJsonp||[]).push([[1],{0:function(e,t,n){n("xYjq"),e.exports=n("nau3")},nau3:function(e,t){},xYjq:function(e,t,n){"use strict";n.r(t),function(e){n("xeH2"),n("3yRE"),n("e42n");var t,r=n("bTu8"),i=n("g0Ox"),o=(n("IXsZ"),n("z/o8")),a=n("Haw6"),u=n("lCAa");r.a.use([i.a]),o.a.registerPlugin(a.a,u.a),e(document).ready((function(){new r.a(".coffee-slider",{loop:!0,slidesPerView:"auto",loopedSlide:1,grabCursor:!0,centeredSlides:!0,preventClicks:!1,navigation:{nextEl:".swiper-next",prevEl:".swiper-prev"}}),e(".ticker").width();var t=e(".ticker .ticker-items").width();e(".ticker .ticker-items").clone().appendTo(".ticker-wrapper");var n=t/50,i=o.a.timeline();i.to(".ticker-wrapper",{x:-t,ease:"none",repeat:-1,duration:n}),i.delay(1),e(".return-top").on("click",(function(e){e.preventDefault(),o.a.to(window,{duration:2,scrollTo:{y:0}})})),o.a.fromTo(".stars",{rotation:0},{rotation:360,duration:60,repeat:-1,ease:"none"}),o.a.utils.toArray("nav .nav-link").forEach((function(e,t){e.addEventListener("click",(function(e){var t=e.currentTarget.getAttribute("href"),n=t.substring(t.indexOf("#"));document.querySelectorAll(n).length>0&&(e.preventDefault(),o.a.to(window,{duration:1.5,scrollTo:{y:n,offsetY:100}}))}))}))})),jQuery,t="smartresize",jQuery.fn[t]=function(e){return e?this.bind("resize",(n=e,function(){var e=this,t=arguments;function a(){i||n.apply(e,t),o=null}o?clearTimeout(o):i&&n.apply(e,t),o=setTimeout(a,r||100)})):this.trigger(t);var n,r,i,o}}.call(this,n("xeH2"))},xeH2:function(e,t){!function(){e.exports=this.jQuery}()}},[[0,0,4]]]);