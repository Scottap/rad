$(function() {

	$(".mensual").click(function(){
		$(".form-mensual").fadeIn();
	});
	
	$(".mensual").focusout(function(){
		$(".form-mensual").fadeOut();
	});

	$(".employees").click(function(){
		$(".form-for-employees").fadeIn();
	});
	
	$(".employees").focusout(function(){
		$(".form-for-employees").fadeOut();
	});
	
});