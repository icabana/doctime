<script type="text/javascript">
  function editar_tiporadicado() {

    var datos = $('#formTiposradicado').serialize();

    ejecutarAccion(
      'administracion',
      'Tiposradicado',
      'guardar',
      datos,
      'editar_tiporadicado2(data)'
    );

  }

  function editar_tiporadicado2(data) {

    if (data == 1) {
      mensaje_alertas("success", "Tiporadicado Editado Exitosamente", "center");
      cargar_tiposradicado();
    } else {
      mensaje_alertas("error", "El Nick ya se encuentra registrado", "center");
    }

  }
</script>


<?php
$froms = new Formularios();
?>

<form id="formTiposradicado" method="post">

  <div class="box box-default">


    <div class="box-body">

      <div class="row">
        <div class="col-md-3"></div>
        <div style="padding: 25px" class="col-md-6">
          <!-- general form elements -->
          <div class="card card-primary">
            <div class="card-header">
              <h3 class="card-title">Editar Tipo de radicado</h3>
            </div>

            <form role="form">

              <input type="hidden" class="form-control" id="id_tiporadicado" name="id_tiporadicado" 
                        value="<?php echo $datos['id_tiporadicado']; ?>">

              <div class="card-body">


                <div class="form-group">
                  <label>Tipo de radicado</label>

                  <input type="text" class="form-control" id="nombre_tiporadicado" name="nombre_tiporadicado" 
                        value="<?php echo $datos['nombre_tiporadicado']; ?>">
                </div>


              </div>

              <div class="card-footer">
                <button onclick="cargar_tiposradicado();" class="btn btn-danger">Cancelar</button>
                <button onclick="editar_tiporadicado(); return false;" class="btn btn-success">Guardar</button>
              </div>
            </form>
          </div>
        </div>
        <div class="col-md-3"></div>
      </div>

    </div>

  </div>
</form>