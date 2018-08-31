$( document ).ready(function() {

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

  $("[data-scroll-to]").on("click", function(e){
    e.preventDefault();
		var wrapper = window;
		var $this = $( this );
		var $target = $( "#" + $this.data('scroll-to') );
		var offset = 115;

		if( $this.data('scroll-to-offset') ) {
			var $offsetContainer = $( "#" + $this.data('scroll-to-offset'));
			var offset =+ $offsetContainer.outerHeight();
		}

		let location = $target.offset().top - offset;

		wrapper.scroll({
			top: location,
			left: 0, behavior: 'smooth'
		});

	});

});
