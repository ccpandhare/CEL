function navbar(){
	if($(window).width() <= 767) {
		$('ul').slideUp('fast');
		$('span.glyphicon').stop().fadeIn('fast');
	}
	else {
		$('ul').slideDown('fast');
		$('span.glyphicon').stop().fadeOut('fast');
	}
}

$(document).load(navbar());

$(window).resize(function(){
	navbar()
});

$('.close').click(function(){
	$('ul').slideToggle('fast');
});
