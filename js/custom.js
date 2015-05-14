jQuery(function($) {
	$('#search-toggle').on('click',function(e){
		var open = $(this).attr('data-open');
		if(open == 'false'){
			$('#search-input').fadeIn('slow');
			$('#search-input').focus();
			$(this).attr('data-open','true');
		}
		if(open == 'true'){
			$('#search-input').fadeOut('slow');
			$(this).attr('data-open','false');
		}
	});
	$(window).load(function(e){
		if(window.location.hash == '#goto-query-noticias'){
			$('html, body').animate({
				scrollTop: parseInt($('#forma-noticias').offset().top) - 130
			}, 1300);
		}
	});

	$('.close-reveal-modal').click(function() {
		$('#fundo-modal').css('width', '0');
		$('#reveal-modal-id').css('visibility', 'hidden');
		
	});
	$(".content").fitVids();

})
