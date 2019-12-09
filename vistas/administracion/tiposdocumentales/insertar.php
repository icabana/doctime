<script type="text/javascript">

  function insertar_tipodocumental() {

    if(!validar_requeridos()){
        return 0;
    }


      var datos = $('#formTiposdocumentales').serialize();

      ejecutarAccion(
        'administracion',
        'Tiposdocumentales',
        'insertar',
        datos,
        'insertar_tipodocumental2(data)'
      );

  }

  function insertar_tipodocumental2(data) {

      if (data == 1) {
        mensaje_alertas("success", "Tipodocumental Registrado Exitosamente", "center");
        cargar_tiposdocumentales();
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
            <h3 class="card-title">Registrar Tipo Documental</h3>
          </div>

          <form autocomplete="on" id="formTiposdocumentales" method="post">

            <div class="card-body">
              <div class="form-group">
                <label>Tipo Documental<span style="color:red">*</span></label>
                <input type="text" class="form-control requerido" id="nombre_tipodocumental" name="nombre_tipodocumental">
              </div>
            </div>

            <div class="card-footer">
              <button onclick="cargar_tiposdocumentales();" class="btn btn-danger">Cancelar</button>
              <button onclick="insertar_tipodocumental(); return false;" class="btn btn-success">Guardar</button>
            </div>
            
          </form>
        </div>
      </div>
      
    </div>
  </div>
</div>