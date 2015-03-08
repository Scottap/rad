$(function() {
      $('#panel_mensaje').hide();
	$('#btnMarcar').click(function(){
            
		var url = 'reportes/marcar';

		$.ajax({
      		url:        url,
                  type:       'POST',
                  dataType:   'json',
                  data: $('#formMarcar').serialize(),
                  success: function(json)
                  {
                        $('#panel_mensaje').hide();

                        if(json.error)
                        {
                              $('#panel_mensaje').html(
                                    '<div class="alert alert-danger alert-dismissible fade in" role="alert" >' +
                                          '<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button>' +
                                          '<strong>' + json.error + '</strong>' +
                                    '</div>'
                              );
                        }
                        else
                        {
                              $('#panel_mensaje').html(
                                    '<div class="alert alert-success alert-dismissible fade in" role="alert">' +
                                          '<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button>' +
                                          '<strong>' + json.mensaje + '</strong>' +
                                    '</div>'
                              );
                        }

                        $('#panel_mensaje').fadeIn();
                        $('#code').val('');
                  }
		});

		return false;
            
	});

});

