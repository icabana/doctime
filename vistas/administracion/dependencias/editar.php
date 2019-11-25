<script type="text/javascript">
  function editar_dependencia() {

    var datos = $('#formDependencias').serialize();

    ejecutarAccion(
      'configuracion',
      'Dependencias',
      'guardar',
      datos,
      'editar_dependencia2(data)'
    );

  }

  function editar_dependencia2(data) {

    if (data == 1) {
      mensaje_alertas("success", "Dependencia Editado Exitosamente", "center");
      cargar_dependencias();
    } else {
      mensaje_alertas("error", "El Nick ya se encuentra registrado", "center");
    }

  }
</script>


<?php
$froms = new Formularios();
?>

<form id="formDependencias" method="post">

  <div class="box box-default">


    <div class="box-body">

      <div class="row">
        <div class="col-md-3"></div>
        <div style="padding: 25px" class="col-md-6">
          <!-- general form elements -->
          <div class="card card-primary">
            <div class="card-header">
              <h3 class="card-title">Editar Dependencia</h3>
            </div>

            <form role="form">

              <input type="hidden" class="form-control" id="id_dependencia" name="id_dependencia" 
                        value="<?php echo $datos['id_dependencia']; ?>">

              <div class="card-body">
                <div class="form-group">
                  <label>Nombre del Dependencia</label>

                  <input type="text" class="form-control" id="nombre_dependencia" name="nombre_dependencia" 
                        value="<?php echo $datos['nombre_dependencia']; ?>">
                </div>
              </div>

              <div class="card-footer">
                <button onclick="cargar_dependencias();" class="btn btn-danger">Cancelar</button>
                <button onclick="editar_dependencia(); return false;" class="btn btn-success">Guardar</button>
              </div>
            </form>
          </div>
        </div>
        <div class="col-md-3"></div>
      </div>

    </div>

  </div>
</form>