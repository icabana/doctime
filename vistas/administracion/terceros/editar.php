<script type="text/javascript">
  function editar_tercero() {

    var datos = $('#formTerceros').serialize();

    ejecutarAccion(
      'administracion',
      'Terceros',
      'guardar',
      datos,
      'editar_tercero2(data)'
    );

  }

  function editar_tercero2(data) {

    if (data == 1) {
      mensaje_alertas("success", "Tercero Editado Exitosamente", "center");
      cargar_terceros();
    } else {
      mensaje_alertas("error", "El Nick ya se encuentra registrado", "center");
    }

  }
</script>


<?php
$froms = new Formularios();
?>

<form id="formTerceros" method="post">

  <div class="box box-default">


    <div class="box-body">

      <div class="row">
        <div class="col-md-3"></div>
        <div style="padding: 25px" class="col-md-6">
          <!-- general form elements -->
          <div class="card card-primary">
            <div class="card-header">
              <h3 class="card-title">Editar Tercero</h3>
            </div>

            <div class="card-body">
            <form role="form">
           
              <input type="hidden" class="form-control" id="id_tercero" name="id_tercero" 
                        value="<?php echo $datos['id_tercero']; ?>">



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

                  <input type="text" class="form-control" id="documento_tercero" name="documento_tercero" 
                        value="<?php echo $datos['documento_tercero']; ?>">
                </div>
           


                <div class="form-group">
                  <label>Nombres</label>

                  <input type="text" class="form-control" id="nombres_tercero" name="nombres_tercero" 
                        value="<?php echo $datos['nombres_tercero']; ?>">
                </div>
             


                <div class="form-group">
                  <label>Apellidos</label>

                  <input type="text" class="form-control" id="apellidos_tercero" name="apellidos_tercero" 
                        value="<?php echo $datos['apellidos_tercero']; ?>">
                </div>
            
             
                <div class="form-group">
                  <label>Telefono</label>

                  <input type="text" class="form-control" id="telefono_tercero" name="telefono_tercero" 
                        value="<?php echo $datos['telefono_tercero']; ?>">
                </div>           

                <div class="form-group">
                  <label>Celular</label>

                  <input type="text" class="form-control" id="celular_tercero" name="celular_tercero" 
                        value="<?php echo $datos['celular_tercero']; ?>">
                </div>

                <div class="form-group">
                  <label>Direcci&oacute;n</label>

                  <input type="text" class="form-control" id="direccion_tercero" name="direccion_tercero" 
                        value="<?php echo $datos['celular_tercero']; ?>">
                </div>
                <div class="form-group">
                  <label>Ciudad</label>

                  <input type="text" class="form-control" id="ciudad_tercero" name="ciudad_tercero" 
                        value="<?php echo $datos['celular_tercero']; ?>">
                </div>

                <div class="form-group">
                  <label>Sexo</label>

                  <?php
                    echo $froms->Lista_Desplegable(
                        $estadis,
                        'nombre_sexo',
                        'id_sexo',
                        'sexo_tercero',
                        $datos['sexo_tercero'],
                        '',
                        ''
                    );
                  ?>
                </div>

                <div class="form-group">
                  <label>Estado Civil</label>

                  <?php
                    echo $froms->Lista_Desplegable(
                        $estados,
                        'nombre_estadocivil',
                        'id_estadocivil',
                        'estadocivil_tercero',
                        $datos['estadocivil_tercero'],
                        '',
                        ''
                    );
                  ?>
                </div>

                <div class="form-group">
                  <label>Fecha de Nacimiento</label>

                  <input type="text" class="form-control" id="fechanacimiento_tercero" name="fechanacimiento_tercero" 
                        value="<?php echo $datos['fechanacimiento_tercero']; ?>">
                </div>

                <div class="form-group">
                  <label>Lugar de nacimiento</label>

                  <input type="text" class="form-control" id="lugarnacimiento_tercero" name="lugarnacimiento_tercero" 
                        value="<?php echo $datos['lugarnacimiento_tercero']; ?>">
                </div>

                <div class="form-group">
                  <label>Estado</label>

                  <?php
                    echo $froms->Lista_Desplegable(
                        $estados,
                        'nombre_estado',
                        'id_estado',
                        'estado_tercero',
                        $datos['estado_tercero'],
                        '',
                        ''
                    );
                  ?>
                </div>

              </div>

              <div class="card-footer">
                <button onclick="cargar_terceros();" class="btn btn-danger">Cancelar</button>
                <button onclick="editar_tercero(); return false;" class="btn btn-success">Guardar</button>
              </div>
            </form>
          </div>
        </div>
        <div class="col-md-3"></div>
      </div>

    </div>

  </div>
</form>