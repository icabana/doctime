<script type="text/javascript">

  function editar_carpeta() {

    if(!validar_requeridos()){
        return 0;
    }

    var datos = $('#formCarpetas').serialize();

    ejecutarAccion(
      'radicados',
      'Carpetas',
      'guardar',
      datos,
      'editar_carpeta2(data)'
    );

  }

  function editar_carpeta2(data) {

    if (data == 1) {
      mensaje_alertas("success", "Carpeta Editado Exitosamente", "center");
      cargar_carpetas();
    } else {
      mensaje_alertas("error", "El Nick ya se encuentra registrado", "center");
    }

  }
</script>


<?php
$froms = new Formularios();
?>

<form id="formCarpetas" method="post">

  <div class="box box-default">


    <div class="box-body">

      <div class="row">
        <div class="col-md-3"></div>
        <div style="padding: 25px" class="col-md-6">
          <!-- general form elements -->
          <div class="card card-primary">
            <div class="card-header">
              <h3 class="card-title">Editar Carpeta</h3>
            </div>

            <form role="form">

              <input type="hidden" class="form-control" id="id_carpeta" name="id_carpeta" 
                        value="<?php echo $datos['id_carpeta']; ?>">

              <div class="card-body">
                <div class="form-group">
                  <label>Nombre del Carpeta<span style="color:red">*</span></label>

                  <input type="text" class="form-control requerido" id="nombre_carpeta" name="nombre_carpeta" 
                        value="<?php echo $datos['nombre_carpeta']; ?>">
                </div>
              </div>

              <div class="card-footer">
                <button onclick="cargar_carpetas();" class="btn btn-danger">Cancelar</button>
                <button onclick="editar_carpeta(); return false;" class="btn btn-success">Guardar</button>
              </div>
            </form>
          </div>
        </div>
        <div class="col-md-3"></div>
      </div>

    </div>

  </div>
</form>