
jQuery(document).ready(function(){
	jQuery('input[name="dcsoffset"]').val(0);
	// jQuery(document).on('click','.dcsLoadMorePostsbtn',function(){
	// 	var ajaxurl = dcs_frontend_ajax_object.ajaxurl;
	// 	var dcsPostType = jQuery('input[name="dcsPostType"]').val();
	// 	var offset = parseInt(jQuery('input[name="dcsoffset"]').val() );
	// 	console.log(offset);
	// 	var dcsloadMorePosts = parseInt(jQuery('input[name="dcsloadMorePosts"]').val() );
	// 	var newOffset = offset+dcsloadMorePosts;
	// 	jQuery('.btnLoadmoreWrapper').hide();
	// 	jQuery.ajax({
	// 		type: "POST",
	// 		url: ajaxurl,
	// 		data: ({
	// 			action: "dcsAjaxLoadMorePostsAjaxReq",
	// 			offset: newOffset,
	// 			dcsloadMorePosts: dcsloadMorePosts,
	// 			postType: dcsPostType,
	// 		}),
	// 		success: function(response){
	// 			if (!jQuery.trim(response)){ 
	// 				// blank output
	// 				jQuery('.noMorePostsFound').show();
	// 			}else{
	// 				// append to last div
	// 				jQuery(response).insertAfter(jQuery('.loadMoreRepeat').last());
	// 				jQuery('input[name="dcsoffset"]').val(newOffset);
	// 				jQuery('.btnLoadmoreWrapper').show();
	// 			}
	// 		},
	// 		beforeSend: function() {
	// 			jQuery('.dcsLoaderImg').show();
	// 		},
	// 		complete: function(){
	// 			jQuery('.dcsLoaderImg').hide();
	// 		},
	// 	});
	// });
});

jQuery(function($){
	var canBeLoaded = true, // this param allows to initiate the AJAX call only if necessary
	    bottomOffset = 1000; // the distance (in px) from the page bottom when you want to load more posts
 
	jQuery(window).scroll(function(){
		if( jQuery(document).scrollTop() > ( jQuery(document).height() - bottomOffset ) && canBeLoaded == true ){
			var ajaxurl = dcs_frontend_ajax_object.ajaxurl;
			var dcsPostType = jQuery('input[name="dcsPostType"]').val();
			var offset = parseInt(jQuery('input[name="dcsoffset"]').val() );
			// console.log(offset);
			var dcsloadMorePosts = parseInt(jQuery('input[name="dcsloadMorePosts"]').val() );
			var newOffset = offset+dcsloadMorePosts;
			jQuery('.btnLoadmoreWrapper').hide();
			jQuery.ajax({
				type: "POST",
				url: ajaxurl,
				data: ({
					action: "dcsAjaxLoadMorePostsAjaxReq",
					offset: newOffset,
					dcsloadMorePosts: dcsloadMorePosts,
					postType: dcsPostType,
				}),
				success: function(response){
					if (!jQuery.trim(response)){ 
						// blank output
						jQuery('.noMorePostsFound').show();
						canBeLoaded = false; 
					}else{
						// append to last div
						jQuery(response).insertAfter(jQuery('.cd_load_more_blog').last());
						jQuery('input[name="dcsoffset"]').val(newOffset);
						jQuery('.btnLoadmoreWrapper').show();
						canBeLoaded = true; 
					}
				},
				beforeSend: function() {
					jQuery('.dcsLoaderImg').show();
					canBeLoaded = false; 
				},
				complete: function(){
					jQuery('.dcsLoaderImg').hide();
				},
			});
		}
	});
});