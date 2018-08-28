$(document).ready(function(){  

  $('body').click(function(){
    if ($('.js-sidenav').hasClass('is-visible')) {
      $('.js-sidenav').removeClass('is-visible');
    }
  });

  $('.js-sidenav').click(function(ev){
    if (!$(ev.target).is('a')) {
      return false;
    }
  });

  $('.js-burger').click(function(){
    $('.js-sidenav').addClass('is-visible');
    return false;
  })

  $('.js-close').click(function(){
    $('.js-sidenav').removeClass('is-visible');
    return false;
  });

  $('body').on('change','.JS--textarea textarea',function(){
    if ($.trim($('.JS--textarea textarea').val()).length < 1) {

      $('.textarea-group').removeClass('has-content');

    } else {
      $('.textarea-group').addClass('has-content');

    }
  });


  var swiper = new Swiper('.swiper-container.JS--testimonials-slider', {
    navigation: {
      nextEl: '.swiper-button-next',
      prevEl: '.swiper-button-prev',
    },
  });


});