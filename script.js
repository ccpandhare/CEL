function resize(){
	if($(window).width() <= 767) {
		$('ul.nav').slideUp('fast');
		$('.close span.glyphicon').stop().fadeIn('fast');
		$('.jumbotron').css({'background': "#fff url('Jumbotron-small.jpg') center center no-repeat", "background-size": "auto 100%"});
	}
	else {
		$('ul.nav').slideDown('fast');
		$('.close span.glyphicon').stop().fadeOut('fast');
		$('.jumbotron').css({'background': "#fff url('Jumbotron.jpg') center center no-repeat", "background-size": "95% auto"});
	}
}

$(document).load(resize());

$(window).resize(function(){
	resize();
});

$('.close').click(function(){
	$('ul.nav').slideToggle('fast');
});
