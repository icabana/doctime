<script type="text/javascript">
  function editar_tipodocumental() {

    var datos = $('#formTiposdocumentales').serialize();

    ejecutarAccion(
      'administracion',
      'Tiposdocumentales',
      'guardar',
      datos,
      'editar_tipodocumental2(data)'
    );

  }

  function editar_tipodocumental2(data) {

    if (data == 1) {
      mensaje_alertas("success", "Tipodocumental Editado Exitosamente", "center");
      cargar_tiposdocumentales();
    } else {
      mensaje_alertas("error", "El Nick ya se encuentra registrado", "center");
    }

  }
</script>


<?php
$froms = new Formularios();
?>

<form id="formTiposdocumentales" method="post">

  <div class="box box-default">


    <div class="box-body">

      <div class="row">
        <div class="col-md-3"></div>
        <div style="padding: 25px" class="col-md-6">
          <!-- general form elements -->
          <div class="card card-primary">
            <div class="card-header">
              <h3 class="card-title">Editar Tipo Documental</h3>
            </div>

            <form role="form">

              <input type="hidden" class="form-control" id="id_tipodocumental" name="id_tipodocumental" 
                        value="<?php echo $datos['id_tipodocumental']; ?>">

              <div class="card-body">
                <div class="form-group">
                  <label>Tipo Documental</label>

                  <input type="text" class="form-control" id="nombre_tipodocumental" name="nombre_tipodocumental" 
                        value="<?php echo $datos['nombre_tipodocumental']; ?>">
                </div>
              </div>

              <div class="card-footer">
                <button onclick="cargar_tiposdocumentales();" class="btn btn-danger">Cancelar</button>
                <button onclick="editar_tipodocumental(); return false;" class="btn btn-success">Guardar</button>
              </div>
            </form>
          </div>
        </div>
        <div class="col-md-3"></div>
      </div>

    </div>

  </div>
</form>