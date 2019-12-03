<script type="text/javascript">
  function editar_serie() {

    var datos = $('#formSeries').serialize();

    ejecutarAccion(
      'administracion',
      'Series',
      'guardar',
      datos,
      'editar_serie2(data)'
    );

  }

  function editar_serie2(data) {

    if (data == 1) {
      mensaje_alertas("success", "Serie Editado Exitosamente", "center");
      cargar_series();
    } else {
      mensaje_alertas("error", "El Nick ya se encuentra registrado", "center");
    }

  }
</script>


<?php
$froms = new Formularios();
?>

<form id="formSeries" method="post">

  <div class="box box-default">

    <div class="box-body">

      <div class="row">
        <div class="col-md-3"></div>
        <div style="padding: 25px" class="col-md-6">
          <!-- general form elements -->
          <div class="card card-primary">
            <div class="card-header">
              <h3 class="card-title">Editar Serie Documental</h3>
            </div>

            <form role="form">

              <input type="hidden" class="form-control" id="id_serie" name="id_serie" 
                        value="<?php echo $datos['id_serie']; ?>">

              <div class="card-body">

              <div class="form-group">
                  <label>C&oacute;digo</label>

                  <input type="text" class="form-control" id="codigo_serie" name="codigo_serie" 
                        value="<?php echo $datos['codigo_serie']; ?>">
                </div>

                <div class="form-group">
                  <label>Nombre de la Serie</label>

                  <input type="text" class="form-control" id="nombre_serie" name="nombre_serie" 
                        value="<?php echo $datos['nombre_serie']; ?>">
                </div>
              </div>

              <div class="card-footer">
                <button onclick="cargar_series();" class="btn btn-danger">Cancelar</button>
                <button onclick="editar_serie(); return false;" class="btn btn-success">Guardar</button>
              </div>
            </form>
          </div>
        </div>
        <div class="col-md-3"></div>
      </div>

    </div>

  </div>
</form>