
$(document).ready(function(){
  $('.banner-slider').slick({
    prevArrow: '<i class="fas fa-chevron-left"></i>',
    nextArrow: '<i class="fas fa-chevron-right"></i>',
  });
  $('.project-slider').slick({
    prevArrow: '<i class="fas fa-chevron-left"></i>',
    nextArrow: '<i class="fas fa-chevron-right"></i>',
    
  });

  var $item = $('.navigation-items__item')
  if( $item.hasClass('slick-active') ){
      $item.css('background', 'url(../img/Lian-Bg.png) ');
  };
  $('.burger').on('click', function(event){
    $('.mob-menu').toggleClass('show-mob-menu ');
    $('.mob-menu-list').toggleClass('active');
  })
});
let hideDiv = document.querySelectorAll('div');
hideDiv[0].classList.add('hide');

let navIcon = document.querySelectorAll('.navigation-items li:not(:last-child)');

for(let i = 0; i< navIcon.length; i++){
  navIcon[i].addEventListener('click',  function(){
    swal("sorry it's only demo page", "but soon we will make you happy )","error");
  });
};

document.querySelector('.postBtn').addEventListener('click', (e)=>{
  e.preventDefault() ;
  swal("sorry it's only demo page", "but soon we will make you happy )","error");
})
/*  IntersectionObserver image loading*/
document.addEventListener("DOMContentLoaded", function() {
  var lazyloadImages;    

  if ("IntersectionObserver" in window) {
    lazyloadImages = document.querySelectorAll(".lazy");
    var imageObserver = new IntersectionObserver(function(entries, observer) {
      entries.forEach(function(entry) {
        if (entry.isIntersecting) {
          var image = entry.target;
          image.src = image.dataset.src;
          image.classList.remove("lazy");
          imageObserver.unobserve(image);
        }
      });
    });

    lazyloadImages.forEach(function(image) {
      imageObserver.observe(image);
    });
  } else {  
    var lazyloadThrottleTimeout;
    lazyloadImages = document.querySelectorAll(".lazy");
    
    function lazyload () {
      if(lazyloadThrottleTimeout) {
        clearTimeout(lazyloadThrottleTimeout);
      }    

      lazyloadThrottleTimeout = setTimeout(function() {
        var scrollTop = window.pageYOffset;
        lazyloadImages.forEach(function(img) {
            if(img.offsetTop < (window.innerHeight + scrollTop)) {
              img.src = img.dataset.src;
              img.classList.remove('lazy');
            }
        });
        if(lazyloadImages.length == 0) { 
          document.removeEventListener("scroll", lazyload);
          window.removeEventListener("resize", lazyload);
          window.removeEventListener("orientationChange", lazyload);
        }
      }, 20);
    }

    document.addEventListener("scroll", lazyload);
    window.addEventListener("resize", lazyload);
    window.addEventListener("orientationChange", lazyload);
  }
})