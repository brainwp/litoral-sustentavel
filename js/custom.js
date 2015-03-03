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
	})
})
