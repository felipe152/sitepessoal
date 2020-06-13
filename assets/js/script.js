function isMobile(){
	if(/Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent) ) {
		return true;
	}
	return false;
}
jQuery(document).ready(function($) {
	M.AutoInit();
	$('#wpadminbar').remove();
    $('.sidenav').sidenav();
    $('.slider').slider({indicators: false});
    $('.scrollspy').scrollSpy();
    $('.tooltipped').tooltip();


    if (typeof AOS !== 'undefined') {
	  AOS.init();
	}

	var minHeight = 0;
	$('.page-id-30 .card-content p').each(function( index ) {
  		var height = $(this).height();
  		if (height>minHeight) {
  			minHeight = height;
  		}
	});
	$('.page-id-30 .card-content p').css('min-height', minHeight);

	var minHeight = 0;
	$('.page-id-30 .card-content .card-title').each(function( index ) {
  		var height = $(this).height();
  		if (height>minHeight) {
  			minHeight = height;
  		}
	});
	$('.page-id-30 .card-content .card-title').css('min-height', minHeight);

	/*BLOG*/
	$(".single-post figure img").each(function( index ) {
  		$(this).addClass('materialboxed');
	});
	//Materialbox
	$('.materialboxed').materialbox({
		onOpenStart: function(e) {
			var instance = M.Materialbox.getInstance(e);
			var fullSRC = $(e).attr('data-imagefull');
			if (typeof fullSRC === "undefined") { return; }
			var wxh = $(e).attr('data-imagewhfull').split('x');
			$(e).attr('src',fullSRC);
			instance.originalWidth = wxh[0];
			instance.originalHeight = wxh[1];
		},
		onCloseEnd: function(e) {
			var thumbSRC = $(e).attr('data-imagethumb');
			if (typeof thumbSRC === "undefined") { return; }
			$(e).attr('src',thumbSRC);
		},
	});

});
