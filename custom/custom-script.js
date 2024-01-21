/* Toggle menu */
let hamburger = document.querySelector('.header__hamburger');
hamburger.addEventListener("click", function() {
    document.body.classList.toggle('menu-open');
});


// animazione header scroll
var prevScrollpos = window.pageYOffset;
window.onscroll = function() {
  var currentScrollPos = window.pageYOffset;
  if (prevScrollpos > currentScrollPos) {
    document.querySelector("header").classList.remove("hide");
  } else {
    document.querySelector("header").classList.add("hide");
  }
  prevScrollpos = currentScrollPos;
}



// Add class on scroll
window.addEventListener('scroll', function(e) {
  if(window.scrollY > 200){
    document.body.classList.add('scroll-down-header');
  } else {
    document.body.classList.remove('scroll-down-header');
  }
});

// Add class on scroll
window.addEventListener('scroll', function(e) {
  if(window.scrollY > 550){
    document.body.classList.add('scroll-down');
  } else {
    document.body.classList.remove('scroll-down');
  }
});

// Add class on scroll
window.addEventListener('scroll', function(e) {
  if(window.scrollY > 2000){
    document.body.classList.add('scroll-down-2');
  } else {
    document.body.classList.remove('scroll-down-2');
  }
});

// Add class on scroll
window.addEventListener('scroll', function(e) {
  if(window.scrollY > 3500){
    document.body.classList.add('scroll-down-3');
  } else {
    document.body.classList.remove('scroll-down-3');
  }
});


/* Scroll animation*/
ScrollTrigger.batch(".fade-down",{
  start: "top 50%",
  onEnter: (elements, triggers) => {
      gsap.to(elements, {opacity: 1, stagger: 0.7, y:0, duration: 1.5, ease: Power2.easeOut});
  }
});


/* Scroll animation*/
ScrollTrigger.batch(".fade-up",{
    start: "top 70%",
    onEnter: (elements, triggers) => {
        gsap.to(elements, {opacity: 1, stagger: 0.7, y:0, duration: 1.5, ease: Power2.easeOut});
    }
});

/* Scroll animation*/
ScrollTrigger.batch(".fade-up--rombo",{
  start: "top 100%",
  onEnter: (elements, triggers) => {
      gsap.to(elements, {opacity: 1, y:0, duration: 1.5, ease: Power2.easeOut});
  }
});

/* Scroll animation*/
ScrollTrigger.batch(".fade-up--container",{
  start: "top 70%",
  onEnter: (elements, triggers) => {
      gsap.to(elements, {opacity: 1, stagger: 0.3, y:0, duration: 1.5, ease: Power2.easeOut});
  }
});


/* Scroll animation*/
ScrollTrigger.batch(".fade-right",{
  start: "top 70%",
  onEnter: (elements, triggers) => {
      gsap.to(elements, {opacity: 1, stagger: 0.3, x:0, duration: 1.5, ease: Power2.easeOut});
  }
});


/* Scroll animation*/
ScrollTrigger.batch(".fade-left",{
  start: "top 70%",
  onEnter: (elements, triggers) => {
      gsap.to(elements, {opacity: 1, stagger: 0.3, x:0, duration: 1.5, ease: Power2.easeOut});
  }
});


/* Cover animation */
let tl = gsap.timeline();
tl.to(".fade-in", {opacity: 1, y:0, duration: 2, stagger: 0.3, ease: Power2.easeOut}, "1")
.from(".cover__bg", {scale: 0.6, duration: 4, opacity: 0, ease: Power2.easeOut}, "0");

gsap.to(".text-reveal", {clipPath: "polygon(0 0, 100% 0, 100% 100%, 0 100%)", y:0, duration: 1, stagger: 0.7, ease: Power2.easeOut});


/* Add class when text__container in viewport */
document.addEventListener('DOMContentLoaded', function() {
  const fadeLeft = document.querySelector('.text__container');
  const options = {
    rootMargin: '0px',
    threshold: 0.5 // quando l'elemento è al 50% della viewport
  }
  const observer = new IntersectionObserver((entries, observer) => {
    entries.forEach(entry => {
      if (entry.isIntersecting) {
        entry.target.classList.add('visible');
      } 
    });
  }, options);
  observer.observe(fadeLeft);
});


/* Add class when text__container-2 in viewport */
document.addEventListener('DOMContentLoaded', function() {
  const fadeLeft = document.querySelector('.text__container-2');
  const options = {
    rootMargin: '0px',
    threshold: 0.5 // quando l'elemento è al 50% della viewport
  }
  const observer = new IntersectionObserver((entries, observer) => {
    entries.forEach(entry => {
      if (entry.isIntersecting) {
        entry.target.classList.add('visible');
      }
    });
  }, options);
  observer.observe(fadeLeft);
});


/*  -----------------------------------------------------------------------------------------------
  Slider foto Apedivino
--------------------------------------------------------------------------------------------------- */
if(document.querySelectorAll('.splide').length > 0){
  var splide = new Splide( '.splide', {
    type: 'loop',
    perPage: 3,
    autoplay: true,
    gap: '1rem', 
    breakpoints: {
        1200: { perPage: 2,  gap: '1rem' },
        640 : { perPage: 1, gap: 0 },
        },
    } );
    splide.mount();
}


/*  -----------------------------------------------------------------------------------------------
  Cards Capi
--------------------------------------------------------------------------------------------------- */
jQuery(document).ready(function($) {

  //Count nr. of square classes
  var countSquare = $('.square').length;

  //For each Square found add BG image
  for (i = 0; i < countSquare; i++) {
    var firstImage = $('.square').eq([i]);

    var getImage = firstImage.attr('data-image');

    firstImage.css('background-image', 'url(' + getImage + ')');
  }
});


/*  -----------------------------------------------------------------------------------------------
IsMobile
--------------------------------------------------------------------------------------------------- */
var isMobile = /iPhone|iPad|iPod|Android/i.test(navigator.userAgent);
  var phoneLink = document.getElementById("phone-link");
  if (isMobile) {
      phoneLink.href ="tel:+390331291157";
  } else {
      phoneLink.href = "#";
      phoneLink.addEventListener("click", function(event) {
          event.preventDefault();
          alert("Il nostro numero di telefono è: +39 0331 291157");
      });
  }

  var isMobile = /iPhone|iPad|iPod|Android/i.test(navigator.userAgent);
  var phoneLink = document.getElementById("phone-link-2");
  if (isMobile) {
      phoneLink.href ="tel:+390331291157";
  } else {
      phoneLink.href = "#";
      phoneLink.addEventListener("click", function(event) {
          event.preventDefault();
          alert("Il nostro numero di telefono è: +39 0331 291157");
      });
  }

