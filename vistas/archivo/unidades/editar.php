<script type="text/javascript">
  function editar_unidad() {

    var datos = $('#formUnidades').serialize();

    ejecutarAccion(
      'configuracion',
      'Unidades',
      'guardar',
      datos,
      'editar_unidad2(data)'
    );

  }

  function editar_unidad2(data) {

    if (data == 1) {
      mensaje_alertas("success", "Tipoarchivo Editado Exitosamente", "center");
      cargar_unidades();
    } else {
      mensaje_alertas("error", "El Nick ya se encuentra registrado", "center");
    }

  }
</script>


<?php
$froms = new Formularios();
?>

<form id="formUnidades" method="post">

  <div class="box box-default">


    <div class="box-body">

      <div class="row">
        <div class="col-md-3"></div>
        <div style="padding: 25px" class="col-md-6">
          <!-- general form elements -->
          <div class="card card-primary">
            <div class="card-header">
              <h3 class="card-title">Editar Unidad de Conservaci&oacute;n</h3>
            </div>

            <form role="form">

              <input type="hidden" class="form-control" id="id_unidad" name="id_unidad" 
                        value="<?php echo $datos['id_unidad']; ?>">

              <div class="card-body">
                <div class="form-group">
                  <label>Nombre Unidad de Conservaci&oacute;n</label>

                  <input type="text" class="form-control" id="nombre_unidad" name="nombre_unidad" 
                        value="<?php echo $datos['nombre_unidad']; ?>">
                </div>
              </div>

              <div class="card-footer">
                <button onclick="cargar_unidades();" class="btn btn-danger">Cancelar</button>
                <button onclick="editar_unidad(); return false;" class="btn btn-success">Guardar</button>
              </div>
            </form>
          </div>
        </div>
        <div class="col-md-3"></div>
      </div>

    </div>

  </div>
</form>