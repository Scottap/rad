$(function() {

	/*
	$(".mensual").click(function(){
		$(".form-mensual").fadeIn();
	});
	
	$(".mensual").focusout(function(){
		$(".form-mensual").fadeOut();
	});
	*/

	$('.mensual').click(function() {
   		if($('.mensual').is(':checked'))
   		{ 
   			$(".form-mensual").fadeIn();
   		}
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


	function randomString()
	{
		var chars = "0123456789ABCDEFGHIJKLMNOPQRSTUVWXTZabcdefghiklmnopqrstuvwxyz";
		var string_length = 6;
		var randomstring = '';
		randomstring += chars.substring(rnum,rnum+1);
		document.code.text.value = randomstring;
	}

});

