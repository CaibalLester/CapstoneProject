
jQuery(function($){'use strict';$('.mean-menu').meanmenu({meanScreenWidth:"991"});$(".others-option-for-responsive .dot-menu").on("click",function(){$(".others-option-for-responsive .container .container").toggleClass("active");});$(window).on('scroll',function(){if($(this).scrollTop()>100){$('.navbar-area').addClass("is-sticky");}
else{$('.navbar-area').removeClass("is-sticky");}});$('.searchbtn').on('click',function(){$('.search-area').toggleClass('active');});$('.close-searchbox').on('click',function(){$('.search-area').removeClass('active');});$('.odometer').appear(function(e){var odo=$(".odometer");odo.each(function(){var countNumber=$(this).attr("data-count");$(this).html(countNumber);});});$('.popup-youtube, .popup-vimeo, .popup-gmaps').magnificPopup({disableOn:100,type:'iframe',mainClass:'mfp-fade',removalDelay:160,preloader:false,fixedContentPos:false});scrollCue.init();$('.panther-slider').owlCarousel({loop:true,margin:20,nav:false,dots:false,autoplay:true,smartSpeed:1000,autoplayHoverPause:true,navText:["<i class='bx bx-chevron-left'></i>","<i class='bx bx-chevron-right'></i>",],responsivee:{0:{items:2},570:{items:2},768:{items:4},992:{items:3},1200:{items:4}}});$('.panther-slider-two').owlCarousel({loop:true,margin:20,nav:false,dots:false,autoplay:true,smartSpeed:1000,autoplayHoverPause:true,navText:["<i class='bx bx-chevron-left'></i>","<i class='bx bx-chevron-right'></i>",],responsivee:{0:{items:2},570:{items:3},768:{items:3},992:{items:4},1200:{items:5}}});$('.experts-slider').owlCarousel({loop:true,margin:20,nav:true,dots:false,autoplay:true,smartSpeed:1000,autoplayHoverPause:true,navText:["<i class='bx bx-chevron-left'></i>","<i class='bx bx-chevron-right'></i>",],responsivee:{0:{items:1},570:{items:2},768:{items:2},992:{items:3},1200:{items:3}}});$('.portfolio-slider').owlCarousel({loop:true,margin:20,nav:true,dots:false,autoplay:true,smartSpeed:1000,autoplayHoverPause:true,navText:["<i class='bx bx-chevron-left'></i>","<i class='bx bx-chevron-right'></i>",],responsivee:{0:{items:1},570:{items:2},768:{items:2},992:{items:3},1200:{items:4}}});$('.team-slider').owlCarousel({loop:true,margin:20,nav:true,dots:false,autoplay:true,smartSpeed:1000,autoplayHoverPause:true,navText:["<i class='bx bx-chevron-left'></i>","<i class='bx bx-chevron-right'></i>",],responsivee:{0:{items:1},570:{items:2},768:{items:2},992:{items:3},1200:{items:3}}});$('.services-three-slider').owlCarousel({loop:true,margin:25,nav:true,dots:false,autoplay:true,smartSpeed:1000,autoplayHoverPause:true,navText:["<i class='bx bx-chevron-left'></i>","<i class='bx bx-chevron-right'></i>",],responsivee:{0:{items:1},570:{items:2},768:{items:2},992:{items:3},1200:{items:3}}});$('.testimonials-slider').owlCarousel({loop:true,margin:20,nav:true,dots:false,autoplay:true,smartSpeed:1000,autoplayHoverPause:true,navText:["<i class='bx bx-chevron-right'></i>","<i class='bx bx-chevron-left'></i>",],responsivee:{0:{items:1},570:{items:1},768:{items:2},992:{items:1},1200:{items:1}}});$('.testimonials-three-slider').owlCarousel({loop:true,margin:20,nav:true,dots:false,autoplay:true,smartSpeed:1000,autoplayHoverPause:true,navText:["<i class='bx bx-chevron-left'></i>","<i class='bx bx-chevron-right'></i>",],responsivee:{0:{items:1},570:{items:1},768:{items:2},992:{items:2},1200:{items:2}}});$('.blog-slider').owlCarousel({loop:true,margin:20,nav:true,dots:false,autoplay:true,smartSpeed:1000,autoplayHoverPause:true,navText:["<i class='bx bx-chevron-left'></i>","<i class='bx bx-chevron-right'></i>",],responsivee:{0:{items:1},570:{items:1},768:{items:2},992:{items:2},1200:{items:2}}});const settings={fill:'#F76031',background:'transparent'}
const sliders=document.querySelectorAll('.range-slider');Array.prototype.forEach.call(sliders,(slider)=>{slider.querySelector('input').addEventListener('input',(event)=>{slider.querySelector('span').innerHTML=event.target.value;applyFill(event.target);});applyFill(slider.querySelector('input'));});function applyFill(slider){const percentage=100*(slider.value-slider.min)/(slider.max-slider.min);const bg=`linear-gradient(90deg, ${settings.fill} ${percentage}%, ${settings.background} ${percentage+0.1}%)`;slider.style.background=bg;}
$(function(){$(window).on('scroll',function(){var scrolled=$(window).scrollTop();if(scrolled>100)$('.go-top').addClass('active');if(scrolled<100)$('.go-top').removeClass('active');});$('.go-top').on('click',function(){$("html, body").animate({scrollTop:"0"},100);});});function makeTimer(){var endTime=new Date("november  30, 2025 17:00:00 PDT");var endTime=(Date.parse(endTime))/1000;var now=new Date();var now=(Date.parse(now)/1000);var timeLeft=endTime-now;var days=Math.floor(timeLeft/86400);var hours=Math.floor((timeLeft-(days*86400))/3600);var minutes=Math.floor((timeLeft-(days*86400)-(hours*3600))/60);var seconds=Math.floor((timeLeft-(days*86400)-(hours*3600)-(minutes*60)));if(hours<"10"){hours="0"+hours;}
if(minutes<"10"){minutes="0"+minutes;}
if(seconds<"10"){seconds="0"+seconds;}
$("#days").html(days+"<span>Days</span>");$("#hours").html(hours+"<span>Hours</span>");$("#minutes").html(minutes+"<span>Minutes</span>");$("#seconds").html(seconds+"<span>Seconds</span>");}
setInterval(function(){makeTimer();},300);jQuery(window).on('load',function(){$('.preloader').addClass('preloader-deactivate');})
$('body').append("<div class='switch-box'><label id='switch' class='switch'><input type='checkbox' onchange='toggleTheme()' id='slider'><span class='slider round'></span></label></div>");}(jQuery));function setTheme(themeName){localStorage.setItem('inon_theme',themeName);document.documentElement.className=themeName;}
function toggleTheme(){if(localStorage.getItem('inon_theme')==='theme-dark'){setTheme('theme-light');}else{setTheme('theme-dark');}}
(function(){if(localStorage.getItem('inon_theme')==='theme-dark'){setTheme('theme-dark');document.getElementById('slider').checked=false;}else{setTheme('theme-light');document.getElementById('slider').checked=true;}})();

/**
* Template Name: Nova
* Updated: Sep 18 2023 with Bootstrap v5.3.2
* Template URL: https://bootstrapmade.com/nova-bootstrap-business-template/
* Author: BootstrapMade.com
* License: https://bootstrapmade.com/license/
*/
document.addEventListener('DOMContentLoaded', () => {
  "use strict";

  /**
   * Preloader
   */
  const preloader = document.querySelector('#preloader');
  if (preloader) {
    window.addEventListener('load', () => {
      preloader.remove();
    });
  }

  /**
   * Sticky header on scroll
   */
  const selectHeader = document.querySelector('#header');
  if (selectHeader) {
    document.addEventListener('scroll', () => {
      window.scrollY > 100 ? selectHeader.classList.add('sticked') : selectHeader.classList.remove('sticked');
    });
  }

  /**
   * Mobile nav toggle
   */
  const mobileNavShow = document.querySelector('.mobile-nav-show');
  const mobileNavHide = document.querySelector('.mobile-nav-hide');

  document.querySelectorAll('.mobile-nav-toggle').forEach(el => {
    el.addEventListener('click', function(event) {
      event.preventDefault();
      mobileNavToogle();
    })
  });

  function mobileNavToogle() {
    document.querySelector('body').classList.toggle('mobile-nav-active');
    mobileNavShow.classList.toggle('d-none');
    mobileNavHide.classList.toggle('d-none');
  }

  /**
   * Toggle mobile nav dropdowns
   */
  const navDropdowns = document.querySelectorAll('.navbar .dropdown > a');

  navDropdowns.forEach(el => {
    el.addEventListener('click', function(event) {
      if (document.querySelector('.mobile-nav-active')) {
        event.preventDefault();
        this.classList.toggle('active');
        this.nextElementSibling.classList.toggle('dropdown-active');

        let dropDownIndicator = this.querySelector('.dropdown-indicator');
        dropDownIndicator.classList.toggle('bi-chevron-up');
        dropDownIndicator.classList.toggle('bi-chevron-down');
      }
    })
  });

  /**
   * Scroll top button
   */
  const scrollTop = document.querySelector('.scroll-top');
  if (scrollTop) {
    const togglescrollTop = function() {
      window.scrollY > 100 ? scrollTop.classList.add('active') : scrollTop.classList.remove('active');
    }
    window.addEventListener('load', togglescrollTop);
    document.addEventListener('scroll', togglescrollTop);
    scrollTop.addEventListener('click', window.scrollTo({
      top: 0,
      behavior: 'smooth'
    }));
  }

  /**
   * Initiate glightbox
   */
  const glightbox = GLightbox({
    selector: '.glightbox'
  });

  /**
   * Init swiper slider with 1 slide at once in desktop view
   */
  new Swiper('.slides-1', {
    speed: 600,
    loop: true,
    autoplay: {
      delay: 5000,
      disableOnInteraction: false
    },
    slidesPerView: 'auto',
    pagination: {
      el: '.swiper-pagination',
      type: 'bullets',
      clickable: true
    },
    navigation: {
      nextEl: '.swiper-button-next',
      prevEl: '.swiper-button-prev',
    }
  });

  /**
   * Init swiper slider with 3 slides at once in desktop view
   */
  new Swiper('.slides-3', {
    speed: 600,
    loop: true,
    autoplay: {
      delay: 5000,
      disableOnInteraction: false
    },
    slidesPerView: 'auto',
    pagination: {
      el: '.swiper-pagination',
      type: 'bullets',
      clickable: true
    },
    navigation: {
      nextEl: '.swiper-button-next',
      prevEl: '.swiper-button-prev',
    },
    breakpoints: {
      320: {
        slidesPerView: 1,
        spaceBetween: 40
      },

      1200: {
        slidesPerView: 3,
      }
    }
  });

  /**
   * Porfolio isotope and filter
   */
  let portfolionIsotope = document.querySelector('.portfolio-isotope');

  if (portfolionIsotope) {

    let portfolioFilter = portfolionIsotope.getAttribute('data-portfolio-filter') ? portfolionIsotope.getAttribute('data-portfolio-filter') : '*';
    let portfolioLayout = portfolionIsotope.getAttribute('data-portfolio-layout') ? portfolionIsotope.getAttribute('data-portfolio-layout') : 'masonry';
    let portfolioSort = portfolionIsotope.getAttribute('data-portfolio-sort') ? portfolionIsotope.getAttribute('data-portfolio-sort') : 'original-order';

    window.addEventListener('load', () => {
      let portfolioIsotope = new Isotope(document.querySelector('.portfolio-container'), {
        itemSelector: '.portfolio-item',
        layoutMode: portfolioLayout,
        filter: portfolioFilter,
        sortBy: portfolioSort
      });

      let menuFilters = document.querySelectorAll('.portfolio-isotope .portfolio-flters li');
      menuFilters.forEach(function(el) {
        el.addEventListener('click', function() {
          document.querySelector('.portfolio-isotope .portfolio-flters .filter-active').classList.remove('filter-active');
          this.classList.add('filter-active');
          portfolioIsotope.arrange({
            filter: this.getAttribute('data-filter')
          });
          if (typeof aos_init === 'function') {
            aos_init();
          }
        }, false);
      });

    });

  }

  /**
   * Animation on scroll function and init
   */
  function aos_init() {
    AOS.init({
      duration: 800,
      easing: 'slide',
      once: true,
      mirror: false
    });
  }
  window.addEventListener('load', () => {
    aos_init();
  });

});
