$( document ).ready(function() {

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
