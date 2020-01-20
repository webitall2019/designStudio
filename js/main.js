
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
    swal("sorry it's only demo page", "but soon we will make u happy )","success");
  });
}
