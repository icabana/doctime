<script type="text/javascript">

  function insertar_subserie() {

      var datos = $('#formSubseries').serialize();

      ejecutarAccion(
        'configuracion',
        'Subseries',
        'insertar',
        datos,
        'insertar_subserie2(data)'
      );

  }

  function insertar_subserie2(data) {

      if (data == 1) {
        mensaje_alertas("success", "Subserie Registrado Exitosamente", "center");
        cargar_subseries();
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
            <h3 class="card-title">Registrar Subserie</h3>
          </div>

          <form autocomplete="on" id="formSubseries" method="post">

            <div class="card-body">
              <div class="form-group">
                <label>Nombre del Subserie</label>
                <input type="text" class="form-control" id="nombre_subserie" name="nombre_subserie">
              </div>
            </div>

            <div class="card-footer">
              <button onclick="cargar_subseries();" class="btn btn-danger">Cancelar</button>
              <button onclick="insertar_subserie(); return false;" class="btn btn-success">Guardar</button>
            </div>
            
          </form>
        </div>
      </div>
      
    </div>
  </div>
</div>