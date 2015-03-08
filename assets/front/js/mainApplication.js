$(function() {
      $('#message').hide();
	$('#btnMarcar').click(function(){
            
		var url = 'reportes/marcar';

		$.ajax({
      		url:        url,
                  type:       'POST',
                  dataType:   'json',
                  data: $('#formMarcar').serialize(),
                  success: function(json)
                  {
                        $('#message').hide();
                  	$('#message').html(json.mensaje);
                        $('#message').fadeIn();
                  }
		});

		return false;
            
	});

});

