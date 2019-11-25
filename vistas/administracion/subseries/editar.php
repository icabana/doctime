<script type="text/javascript">
  function editar_subserie() {

    var datos = $('#formSubseries').serialize();

    ejecutarAccion(
      'configuracion',
      'Subseries',
      'guardar',
      datos,
      'editar_subserie2(data)'
    );

  }

  function editar_subserie2(data) {

    if (data == 1) {
      mensaje_alertas("success", "Subserie Editado Exitosamente", "center");
      cargar_subseries();
    } else {
      mensaje_alertas("error", "El Nick ya se encuentra registrado", "center");
    }

  }
</script>


<?php
$froms = new Formularios();
?>

<form id="formSubseries" method="post">

  <div class="box box-default">


    <div class="box-body">

      <div class="row">
        <div class="col-md-3"></div>
        <div style="padding: 25px" class="col-md-6">
          <!-- general form elements -->
          <div class="card card-primary">
            <div class="card-header">
              <h3 class="card-title">Editar Subserie</h3>
            </div>

            <form role="form">

              <input type="hidden" class="form-control" id="id_subserie" name="id_subserie" 
                        value="<?php echo $datos['id_subserie']; ?>">

              <div class="card-body">
                <div class="form-group">
                  <label>Nombre del Subserie</label>

                  <input type="text" class="form-control" id="nombre_subserie" name="nombre_subserie" 
                        value="<?php echo $datos['nombre_subserie']; ?>">
                </div>
              </div>

              <div class="card-footer">
                <button onclick="cargar_subseries();" class="btn btn-danger">Cancelar</button>
                <button onclick="editar_subserie(); return false;" class="btn btn-success">Guardar</button>
              </div>
            </form>
          </div>
        </div>
        <div class="col-md-3"></div>
      </div>

    </div>

  </div>
</form>