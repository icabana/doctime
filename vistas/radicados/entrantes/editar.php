<script type="text/javascript">
  function editar_entrante() {

    var datos = $('#formEntrantes').serialize();

    ejecutarAccion(
      'configuracion',
      'Entrantes',
      'guardar',
      datos,
      'editar_entrante2(data)'
    );

  }

  function editar_entrante2(data) {

    if (data == 1) {
      mensaje_alertas("success", "Entrante Editado Exitosamente", "center");
      cargar_entrantes();
    } else {
      mensaje_alertas("error", "El Nick ya se encuentra registrado", "center");
    }

  }
</script>


<?php
$froms = new Formularios();
?>

<form id="formEntrantes" method="post">

  <div class="box box-default">


    <div class="box-body">

      <div class="row">
        <div class="col-md-3"></div>
        <div style="padding: 25px" class="col-md-6">
          <!-- general form elements -->
          <div class="card card-primary">
            <div class="card-header">
              <h3 class="card-title">Editar Entrante</h3>
            </div>

            <form role="form">

              <input type="hidden" class="form-control" id="id_entrante" name="id_entrante" 
                        value="<?php echo $datos['id_entrante']; ?>">

              <div class="card-body">
                <div class="form-group">
                  <label>Nombre del Entrante</label>

                  <input type="text" class="form-control" id="nombre_entrante" name="nombre_entrante" 
                        value="<?php echo $datos['nombre_entrante']; ?>">
                </div>
              </div>

              <div class="card-footer">
                <button onclick="cargar_entrantes();" class="btn btn-danger">Cancelar</button>
                <button onclick="editar_entrante(); return false;" class="btn btn-success">Guardar</button>
              </div>
            </form>
          </div>
        </div>
        <div class="col-md-3"></div>
      </div>

    </div>

  </div>
</form>