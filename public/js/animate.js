$(function(){
	var effects = 'animated heartBeat slow';
	var effectsEnd = 'animationEnd oAnimationEnd mozAnimationEnd webkitAnimationEnd';

	$('categorias').hover(function(){
		$(this).addClass(effects).one(effectsEnd, function(){
			$(this).removeClass(effects);
		});
	});

	
});