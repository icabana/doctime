<script type="text/javascript">

  function insertar_tercero() {

      var datos = $('#formTerceros').serialize();

      ejecutarAccion(
        'configuracion',
        'Terceros',
        'insertar',
        datos,
        'insertar_tercero2(data)'
      );

  }

  function insertar_tercero2(data) {

      if (data == 1) {
        mensaje_alertas("success", "Tercero Registrado Exitosamente", "center");
        cargar_terceros();
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
            <h3 class="card-title">Registrar Tercero</h3>
          </div>

          <form autocomplete="on" id="formTerceros" method="post">

            <div class="card-body">


            <div class="form-group">
                  <label>Tipo de Documento</label>
                  <?php
                  echo $froms->Lista_Desplegable(
                    $roles,
                    'nombre_tipodocumento',
                    'id_tipodocumento',
                    'tipodocumento_tercero',
                    $datos['rol_usuario'],
                    '',
                    ''
                  );
                  ?>
                </div>

              <div class="form-group">
                <label>Documento</label>
                <input type="text" class="form-control" id="documento_tercero" name="documento_tercero">
              </div>


              <div class="form-group">
                <label>Nombres</label>
                <input type="text" class="form-control" id="nombres_tercero" name="nombres_tercero">
              </div>


              <div class="form-group">
                <label>Apellidos</label>
                <input type="text" class="form-control" id="apellidos_tercero" name="apellidos_tercero">
              </div>


              <div class="form-group">
                <label>Telefono</label>
                <input type="text" class="form-control" id="telefono_tercero" name="telefono_tercero">
              </div>


              <div class="form-group">
                <label>Celular</label>
                <input type="text" class="form-control" id="celular_tercero" name="celular_tercero">
              </div>

              <div class="form-group">
                <label>Direcci&oacute;n</label>
                <input type="text" class="form-control" id="direccion_tercero" name="direccion_tercero">
              </div>

              <div class="form-group">
                <label>Ciudad</label>
                <input type="text" class="form-control" id="ciudad_tercero" name="ciudad_tercero">
              </div>



            </div>


            <div class="card-footer">
              <button onclick="cargar_terceros();" class="btn btn-danger">Cancelar</button>
              <button onclick="insertar_tercero(); return false;" class="btn btn-success">Guardar</button>
            </div>

            
          </form>
        </div>
      </div>
      
    </div>
  </div>
</div>