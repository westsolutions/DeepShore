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

});