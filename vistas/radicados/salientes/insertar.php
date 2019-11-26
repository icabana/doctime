<script type="text/javascript">

  function insertar_saliente() {

      var datos = $('#formSalientes').serialize();

      ejecutarAccion(
        'configuracion',
        'Salientes',
        'insertar',
        datos,
        'insertar_saliente2(data)'
      );

  }

  function insertar_saliente2(data) {

      if (data == 1) {
        mensaje_alertas("success", "Saliente Registrado Exitosamente", "center");
        cargar_salientes();
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
            <h3 class="card-title">Registrar Saliente</h3>
          </div>

          <form autocomplete="on" id="formSalientes" method="post">

            <div class="card-body">
              <div class="form-group">
                <label>Nombre del Saliente</label>
                <input type="text" class="form-control" id="nombre_saliente" name="nombre_saliente">
              </div>
            </div>

            <div class="card-footer">
              <button onclick="cargar_salientes();" class="btn btn-danger">Cancelar</button>
              <button onclick="insertar_saliente(); return false;" class="btn btn-success">Guardar</button>
            </div>
            
          </form>
        </div>
      </div>
      
    </div>
  </div>
</div>