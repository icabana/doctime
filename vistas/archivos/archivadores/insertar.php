<script type="text/javascript">

  function insertar_archivador() {

    if(!validar_requeridos()){
        return 0;
    }

      var datos = $('#formArchivadores').serialize();

      ejecutarAccion(
        'archivos',
        'Archivadores',
        'insertar',
        datos,
        'insertar_archivador2(data)'
      );

  }

  function insertar_archivador2(data) {

      if (data == 1) {
        mensaje_alertas("success", "Archivador Registrado Exitosamente", "center");
        cargar_archivadores();
      } else {
        mensaje_alertas("error", "Error al registrar archivador", "center");
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

          <form autocomplete="on" id="formArchivadores" method="post">

            <div class="card-body">


              <div class="form-group">
                <label>Nombre Archivador<span style="color:red">*</span></label>
                <input type="text" class="form-control requerido" id="nombre_archivador" name="nombre_archivador">
              </div>



              <div class="form-group">
                <label>Ciudad<span style="color:red">*</span></label>
                <input type="text" class="form-control requerido" id="ciudad_archivador" name="ciudad_archivador">
              </div>



              <div class="form-group">
                <label>Direcci&oacute;n<span style="color:red">*</span></label>
                <input type="text" class="form-control requerido" id="direccion_archivador" name="direccion_archivador">
              </div>



              <div class="form-group">
                <label>Descripci&oacute;n Ubicaci&oacute;n<span style="color:red">*</span></label>
                <textarea rows="3" class="form-control requerido" id="ubicacion_archivador" name="ubicacion_archivador"></textarea>
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