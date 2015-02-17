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

	$("#btn_query").click(function(){
		$("#query").toggle("slow");	
		if ($("#btn_query").html() == "")
		{
			$("#btn_query").html("Buscar").removeClass("icon-search").addClass("btn btn-success");
		}
		else {
			$("#btn_query").html("").removeClass("btn btn-success").addClass("icon-search");
		} 
	});
	if $("")

});

