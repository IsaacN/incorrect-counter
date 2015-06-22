$(document).ready(function(){
	$('.name').mouseenter(function(){
		var className = $(this).attr('class').split(' ')[1];
		$('.add.'+className).fadeIn(100);
	});
	$('.scorebox').mouseleave(function(){
		var className = $(this).find('.add').attr('class').split(' ')[1];
		$('.add.'+className).fadeOut(100);
	});
});