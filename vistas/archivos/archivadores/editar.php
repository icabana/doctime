<script type="text/javascript">
  function editar_archivador() {

    if(!validar_requeridos()){
        return 0;
    }

    var datos = $('#formArchivadores').serialize();

    ejecutarAccion(
      'archivos',
      'Archivadores',
      'guardar',
      datos,
      'editar_archivador2(data)'
    );

  }

  function editar_archivador2(data) {

    if (data == 1) {
      mensaje_alertas("success", "Archivador Editado Exitosamente", "center");
      cargar_archivadores();
    } else {
      mensaje_alertas("error", "Error al registrar el archivador", "center");
    }

  }
</script>


<?php
$froms = new Formularios();
?>

<form id="formArchivadores" method="post">

  <div class="box box-default">


    <div class="box-body">

      <div class="row">
        <div class="col-md-3"></div>
        <div style="padding: 25px" class="col-md-6">
          <!-- general form elements -->
          <div class="card card-primary">
            <div class="card-header">
              <h3 class="card-title">Editar Tipo de archivo</h3>
            </div>

            <form role="form">

              <input type="hidden" class="form-control" id="id_archivador" name="id_archivador" 
                        value="<?php echo $datos['id_archivador']; ?>">

              <div class="card-body">


                <div class="form-group">
                  <label>Nombre Archivador<span style="color:red">*</span></label>

                  <input type="text" class="form-control requerido" id="nombre_archivador" name="nombre_archivador" 
                        value="<?php echo $datos['nombre_archivador']; ?>">
                </div>

                <div class="form-group">
                  <label>Ciudad<span style="color:red">*</span></label>

                  <input type="text" class="form-control requerido" id="ciudad_archivador" name="ciudad_archivador" 
                        value="<?php echo $datos['ciudad_archivador']; ?>">
                </div>


                <div class="form-group">
                  <label>Dirección<span style="color:red">*</span></label>

                  <input type="text" class="form-control requerido" id="direccion_archivador" name="direccion_archivador" 
                        value="<?php echo $datos['direccion_archivador']; ?>">
                </div>

                <div class="form-group">
                  <label>Descripci&oacute;n Ubicaci&oacute;n<span style="color:red">*</span></label>

                  <textarea rows="3" class="form-control requerido" id="ubicacion_archivador" name="ubicacion_archivador"><?php echo $datos['ubicacion_archivador']; ?></textarea>
                  
                </div>


              </div>

              <div class="card-footer">
                <button onclick="cargar_archivadores();" class="btn btn-danger">Cancelar</button>
                <button onclick="editar_archivador(); return false;" class="btn btn-success">Guardar</button>
              </div>
            </form>
          </div>
        </div>
        <div class="col-md-3"></div>
      </div>

    </div>

  </div>
</form>