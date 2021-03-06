<script type="text/javascript">

  function insertar_carpeta() {

      if(!validar_requeridos()){
        return 0;
      }

      var datos = $('#formCarpetas').serialize();

      ejecutarAccion(
        'radicados',
        'Carpetas',
        'insertar',
        datos,
        'insertar_carpeta2(data)'
      );

  }

  function insertar_carpeta2(data) {

      if (data == 1) {
        mensaje_alertas("success", "Carpeta Registrado Exitosamente", "center");
        location.reload();
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
            <h3 class="card-title">Registrar Carpeta</h3>
          </div>

          <form autocomplete="on" id="formCarpetas" method="post">

            <div class="card-body">
              <div class="form-group">
                <label>Nombre del Carpeta <span style="color:red">*</span></label>
                <input type="text" class="form-control requerido" id="nombre_carpeta" name="nombre_carpeta">
              </div>
            </div>

            <div class="card-footer">
              <button onclick="cargar_carpetas();" class="btn btn-danger">Cancelar</button>
              <button onclick="insertar_carpeta(); return false;" class="btn btn-success">Guardar</button>
            </div>
            
          </form>
        </div>
      </div>
      
    </div>
  </div>
</div>