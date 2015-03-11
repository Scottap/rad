<!--Cabecera-->
<div class="container">	
    <img src="assets/front/img/rad.jpg" class="img-responsive" align="left">	
</div>

<div class="row">
    <div class="col-sm-6 col-md-6 col-lg-6 col-md-offset-3">
        <div class="col-xs-12">
            <div class="">
                <h1 class="text-center">RA(D)</h1>
                <p class="text-center">Registro de Asistencia (Dactilar)</p>
            </div>
            <div class="panel panel-default">
                <div class="panel-body">
                    <form id="formSimulacro" action="simulacro/cargar" method="POST" enctype="multipart/form-data">
                        <div class="form-group">
                            <center><img style="text-center" src="holder.js/140x140"></center> 
                        </div>
                        <center>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Cargue su huella</label>
                            <input id="adjuntos" type="file" class="form-control" name="attachment[]" value="" multiple/>
                        </div>
                        <button type="submit" class="btn btn-primary btn-lg">Marcar</button>
                        </center>
                    </form>
                    <div class="alert alert-success alert-dismissible fade in" role="alert">
                    	<strong><?php echo $this->session->flashdata('mensaje');?></strong>
                    </div>
                </div>
            </div>
            <div id="panel_mensaje"></div>
        </div>
    </div>
    <br/>
</div>