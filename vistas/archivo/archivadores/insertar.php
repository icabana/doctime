<script type="text/javascript">

  function insertar_archivador() {

      var datos = $('#formTiposarchivo').serialize();

      ejecutarAccion(
        'configuracion',
        'Tiposarchivo',
        'insertar',
        datos,
        'insertar_archivador2(data)'
      );

  }

  function insertar_archivador2(data) {

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
                <label>Nombre Archivador</label>
                <input type="text" class="form-control" id="nombre_archivador" name="nombre_archivador">
              </div>



              <div class="form-group">
                <label>Ciudad</label>
                <input type="text" class="form-control" id="ciudad_archivador" name="ciudad_archivador">
              </div>



              <div class="form-group">
                <label>Direccion</label>
                <input type="text" class="form-control" id="direccion_archivador" name="direccion_archivador">
              </div>



              <div class="form-group">
                <label>Ubicacion</label>
                <input type="text" class="form-control" id="ubicacion_archivador" name="ubicacion_archivador">
              </div>



            </div>

            <div class="card-footer">
              <button onclick="cargar_tiposarchivo();" class="btn btn-danger">Cancelar</button>
              <button onclick="insertar_archivador(); return false;" class="btn btn-success">Guardar</button>
            </div>
            
          </form>
        </div>
      </div>
      
    </div>
  </div>
</div>