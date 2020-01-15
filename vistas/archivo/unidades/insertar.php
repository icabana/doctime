<script type="text/javascript">

  function insertar_unidad() {

      var datos = $('#formUnidades').serialize();

      ejecutarAccion(
        'configuracion',
        'Unidades',
        'insertar',
        datos,
        'insertar_unidad2(data)'
      );

  }

  function insertar_unidad2(data) {

      if (data == 1) {
        mensaje_alertas("success", "Tipoarchivo Registrado Exitosamente", "center");
        cargar_unidades();
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
            <h3 class="card-title">Registrar Unidad de Conservacion</h3>
          </div>

          <form autocomplete="on" id="formUnidades" method="post">

            <div class="card-body">
              <div class="form-group">
                <label>Nombre Unidad de Conservacion</label>
                <input type="text" class="form-control" id="nombre_unidad" name="nombre_unidad">
              </div>
            </div>

            <div class="card-footer">
              <button onclick="cargar_unidades();" class="btn btn-danger">Cancelar</button>
              <button onclick="insertar_unidad(); return false;" class="btn btn-success">Guardar</button>
            </div>
            
          </form>
        </div>
      </div>
      
    </div>
  </div>
</div>