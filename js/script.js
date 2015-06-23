$(document).ready(function(){
	$('.add').click(function(){
		var positionWhole = ($(this).attr('class').split(' ')[1]);
		var pattern = /[0-9]+/g;
		var matches = positionWhole.match(pattern);
		//gets position number of user
	});
	$('.name').mouseenter(function(){
		var className = $(this).attr('class').split(' ')[1];
		$('.add.'+className).fadeIn(100);
	});
	$('.scorebox').mouseleave(function(){
		var className = $(this).find('.add').attr('class').split(' ')[1];
		$('.add.'+className).fadeOut(100);
	});
	
});