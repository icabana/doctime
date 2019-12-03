<script type="text/javascript">

  function insertar_serie() {

      var datos = $('#formSeries').serialize();

      ejecutarAccion(
        'administracion',
        'Series',
        'insertar',
        datos,
        'insertar_serie2(data)'
      );

  }

  function insertar_serie2(data) {

      if (data == 1) {
        mensaje_alertas("success", "Serie Registrado Exitosamente", "center");
        cargar_series();
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
            <h3 class="card-title">Registrar Serie</h3>
          </div>

          <form autocomplete="on" id="formSeries" method="post">

            <div class="card-body">
              <div class="form-group">
                  <label>Codigo</label>
                  <input type="text" class="form-control" id="codigo_serie" name="codigo_serie">
              </div>

              <div class="form-group">
                <label>Nombre del Serie</label>
                <input type="text" class="form-control" id="nombre_serie" name="nombre_serie">
              </div>
            </div>

            <div class="card-footer">
              <button onclick="cargar_series();" class="btn btn-danger">Cancelar</button>
              <button onclick="insertar_serie(); return false;" class="btn btn-success">Guardar</button>
            </div>
            
          </form>
        </div>
      </div>
      
    </div>
  </div>
</div>