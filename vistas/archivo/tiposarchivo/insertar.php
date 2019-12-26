<script type="text/javascript">

  function insertar_tipoarchivo() {

      var datos = $('#formTiposarchivo').serialize();

      ejecutarAccion(
        'configuracion',
        'Tiposarchivo',
        'insertar',
        datos,
        'insertar_tipoarchivo2(data)'
      );

  }

  function insertar_tipoarchivo2(data) {

      if (data == 1) {
        mensaje_alertas("success", "Tipoarchivo Registrado Exitosamente", "center");
        cargar_tiposarchivo();
      } else {
        mensaje_alertas("error", "El Nick ya se encuentra registrado", "center");
      }

  }
</script>


<?php
    $froms = new Formularios();
?>


<div class="box box-default">

  <div class="box-body">

    <div class="row">
      <div class="col-md-3"></div>
      <div style="padding: 25px" class="col-md-6">

        <div class="card card-primary">
          <div class="card-header">
            <h3 class="card-title">Registrar Tipos de Archivo</h3>
          </div>

          <form autocomplete="on" id="formTiposarchivo" method="post">

            <div class="card-body">
              <div class="form-group">
                <label>Tipo de archivo</label>
                <input type="text" class="form-control" id="nombre_tipoarchivo" name="nombre_tipoarchivo">
              </div>
            </div>

            <div class="card-footer">
              <button onclick="cargar_tiposarchivo();" class="btn btn-danger">Cancelar</button>
              <button onclick="insertar_tipoarchivo(); return false;" class="btn btn-success">Guardar</button>
            </div>
            
          </form>
        </div>
      </div>
      
    </div>
  </div>
</div>