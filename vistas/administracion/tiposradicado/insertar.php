<script type="text/javascript">

  function insertar_tiporadicado() {

      var datos = $('#formTiposradicado').serialize();

      ejecutarAccion(
        'administracion',
        'Tiposradicado',
        'insertar',
        datos,
        'insertar_tiporadicado2(data)'
      );

  }

  function insertar_tiporadicado2(data) {

      if (data == 1) {
        mensaje_alertas("success", "Tiporadicado Registrado Exitosamente", "center");
        cargar_tiposradicado();
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
            <h3 class="card-title">Registrar Tipo de radicado</h3>
          </div>

          <form autocomplete="on" id="formTiposradicado" method="post">

            <div class="card-body">


              <div class="form-group">
                <label>Tipo de radicado</label>
                <input type="text" class="form-control" id="nombre_tiporadicado" name="nombre_tiporadicado">
              </div>



            </div>

            <div class="card-footer">
              <button onclick="cargar_tiposradicado();" class="btn btn-danger">Cancelar</button>
              <button onclick="insertar_tiporadicado(); return false;" class="btn btn-success">Guardar</button>
            </div>
            
          </form>
        </div>
      </div>
      
    </div>
  </div>
</div>