jQuery(document).on('click', '.youtube-video-open', function(e){
		e.preventDefault();
		var src = 'https://www.youtube.com/embed/'+jQuery(this).attr('data-id');
		jQuery('#youtube-video iframe').attr('src',src);
		if(jQuery('#youtube-video').is(':hidden')){
			jQuery('#youtube-video').fadeIn('slow');
		}
		jQuery('html, body').animate({
			scrollTop: jQuery('#youtube-video').offset().top - 50
		}, 'slow');
    });

	//ajax youtube
	if(jQuery('#youtube-feed').length){
		var data = {
			'action': 'youtube_brasa_social_feed'
		};
		jQuery.ajax({
			type: 'POST',
			url:odin.ajax_url,
			data: data,
			complete: function(data){
			  	jQuery('#youtube-feed').html(data.responseText);
			  	if(data.getResponseHeader('next-page-token') && data.getResponseHeader('next-page-token') !== null){
			  		jQuery('#youtube-feed-btn').attr('data-next-page',data.getResponseHeader('next-page-token'));
			  	}
			  	else{
			  		jQuery('#youtube-feed-btn').fadeOut('slow');
			  	}
			}
	    });
	}

	jQuery('#youtube-feed-btn').on('click',function(e){
		e.preventDefault();
		if(jQuery(this).hasClass('disable')){
			return;
		}

		var default_html = jQuery(this).html();
		jQuery(this).html(jQuery(this).attr('data-loading'));
		jQuery(this).addClass('disable');
	    var data = {
			'action': 'youtube_brasa_social_feed',
			'next_page': jQuery(this).attr('data-next-page')
		};
		jQuery.ajax({
			type: 'POST',
			url: odin.ajax_url,
			data: data,
			complete: function(data){
			  	jQuery('#youtube-feed').append(data.responseText);
			  	if(data.getResponseHeader('next-page-token') && data.getResponseHeader('next-page-token') !== null){
			  		jQuery('#youtube-feed-btn').attr('data-next-page',data.getResponseHeader('next-page-token'));
			  		jQuery('#youtube-feed-btn').removeClass('disable');
			  		jQuery('#youtube-feed-btn').html(default_html);
			  	}
			  	else{
			  		jQuery('#youtube-feed-btn').fadeOut('slow');
			  	}
			}
	    });
	});