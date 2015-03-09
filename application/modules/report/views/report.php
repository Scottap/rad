<div class="contaier-fluid">
	<div class="col-md-10 col-md-offset-1">		   	
	   	<form class="form-login" action="reportes/exportar" method="POST">
			<h2 class="text-center"><span class="icon-calendar"></span> Reporte</h2>
	  		<div class="form-group" action="reporte/exportar">
	  			<label><strong>Tipo de reporte</strong></label>
	  		</div>
	  		<div class="radio">
		  		<label>
		    		<input type="radio" name="typeReport" id="optionsRadios1" value="daily" checked>
		    			Diario
		  		</label>
			</div>
			<div class="radio">
		  		<label>
		    		<input class="mensual" type="radio" name="typeReport" id="optionsRadios2" value="monthly">
		    		Mensual
		    		<div class="form-mensual">
		    			<form>
			    			<div class="form-group">
					  			<label for="exampleInputEmail1">Mes</label>
					  			<input class="form-control" type="text" name="month" placeholder="Indique el mes que desea buscar"/>
							</div>
			    		</form>
		    		</div>
		  		</label>
		  		<br>
			<div class="radio">
				<label>
					<input class="employees" type="radio" name="typeReport" id="optionsRadios3" value="employee">
					Por empleado						
					<div class="form-for-employees">
						<form class>
							<div class="form-group">
								<label>Cedula</label>
								<input class="form-control" type="text" name="cedula"> 
							</div>
							<div class="form-group">
							  	<label>Desde</label>
							  	<input class="form-control" type="date" name="desde" />
							</div>
							<div class="form-group">
							  	<label>Hasta</label>
							  	<input class="form-control" type="date" name="hasta" />
							</div>
						</form>
					</div>
				</label>
			</div>
			<button type="submit" class="btn btn-success btn-lg btn-block green-google"><span class="glyphicon glyphicon-save-file"></span> Generar reporte </button>
			</div>
		</form>
	</div>
</div>