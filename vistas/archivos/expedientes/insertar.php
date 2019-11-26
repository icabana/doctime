<script type="text/javascript">

  function insertar_expediente() {

      var datos = $('#formExpedientes').serialize();

      ejecutarAccion(
        'configuracion',
        'Expedientes',
        'insertar',
        datos,
        'insertar_expediente2(data)'
      );

  }

  function insertar_expediente2(data) {

      if (data == 1) {
        mensaje_alertas("success", "Expediente Registrado Exitosamente", "center");
        cargar_expedientes();
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
            <h3 class="card-title">Registrar Expediente</h3>
          </div>

          <form autocomplete="on" id="formExpedientes" method="post">

            <div class="card-body">
              <div class="form-group">
                <label>Nombre del Expediente</label>
                <input type="text" class="form-control" id="nombre_expediente" name="nombre_expediente">
              </div>
            </div>

            <div class="card-footer">
              <button onclick="cargar_expedientes();" class="btn btn-danger">Cancelar</button>
              <button onclick="insertar_expediente(); return false;" class="btn btn-success">Guardar</button>
            </div>
            
          </form>
        </div>
      </div>
      
    </div>
  </div>
</div>