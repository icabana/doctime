<script type="text/javascript">

  function editar_empleado() {

      var datos = $('#formEmpleados').serialize();

      ejecutarAccion(
        'administracion',
        'Empleados',
        'guardar',
        datos,
        'editar_empleado2(data)'
      );

  }

  function editar_empleado2(data) {

      if (data == 1) {
        mensaje_alertas("success", "Empleado Editado Exitosamente", "center");
        cargar_empleados();
      } else {
        mensaje_alertas("error", "El Nick ya se encuentra registrado", "center");
      }

  }

</script>

<?php
$froms = new Formularios();
?>

<form id="formEmpleados" method="post">

  <div class="box box-default">

    <div class="box-body">

      <div class="row">
        <div class="col-md-3"></div>
        <div style="padding: 25px" class="col-md-6">
          <!-- general form elements -->
          <div class="card card-primary">
            <div class="card-header">
              <h3 class="card-title">Editar Empleado</h3>
            </div>

            <div class="card-body">
            <form role="form">
           
              <input type="hidden" class="form-control" id="id_empleado" name="id_empleado" 
                        value="<?php echo $datos['id_empleado']; ?>">

                <div class="form-group">
                  <label>Tipo de Documento</label>
                  <?php
                    echo $froms->Lista_Desplegable(
                        $tiposdocumento,
                        'nombre_tipodocumento',
                        'id_tipodocumento',
                        'tipodocumento_empleado',
                        $datos['rol_usuario'],
                        '',
                        ''
                    );
                  ?>
                </div>
              
                <div class="form-group">
                  <label>Documento</label>

                  <input type="text" class="form-control" id="documento_empleado" name="documento_empleado" 
                        value="<?php echo $datos['documento_empleado']; ?>">
                </div>
           


                <div class="form-group">
                  <label>Nombres</label>

                  <input type="text" class="form-control" id="nombres_empleado" name="nombres_empleado" 
                        value="<?php echo $datos['nombres_empleado']; ?>">
                </div>
             


                <div class="form-group">
                  <label>Apellidos</label>

                  <input type="text" class="form-control" id="apellidos_empleado" name="apellidos_empleado" 
                        value="<?php echo $datos['apellidos_empleado']; ?>">
                </div>
            
             
                <div class="form-group">
                  <label>Telefono</label>

                  <input type="text" class="form-control" id="telefono_empleado" name="telefono_empleado" 
                        value="<?php echo $datos['telefono_empleado']; ?>">
                </div>           

                <div class="form-group">
                  <label>Celular</label>

                  <input type="text" class="form-control" id="celular_empleado" name="celular_empleado" 
                        value="<?php echo $datos['celular_empleado']; ?>">
                </div>

                <div class="form-group">
                  <label>Direcci&oacute;n</label>

                  <input type="text" class="form-control" id="direccion_empleado" name="direccion_empleado" 
                        value="<?php echo $datos['direccion_empleado']; ?>">
                </div>


                <div class="form-group">
                  <label>Ciudad</label>

                  <input type="text" class="form-control" id="ciudad_empleado" name="ciudad_empleado" 
                        value="<?php echo $datos['ciudad_empleado']; ?>">
                </div>

                <div class="form-group">
                  <label>Sexo</label>

                  <?php
                    echo $froms->Lista_Desplegable(
                        $sexos,
                        'nombre_sexo',
                        'id_sexo',
                        'sexo_empleado',
                        $datos['sexo_empleado'],
                        '',
                        ''
                    );
                  ?>
                </div>

                <div class="form-group">
                  <label>Estado Civil</label>

                  <?php
                    echo $froms->Lista_Desplegable(
                        $estadoscivil,
                        'nombre_estadocivil',
                        'id_estadocivil',
                        'estadocivil_empleado',
                        $datos['estadocivil_empleado'],
                        '',
                        ''
                    );
                  ?>
                </div>

                <div class="form-group">
                  <label>Fecha de Nacimiento</label>

                  <input type="text" class="form-control" id="fechanacimiento_empleado" name="fechanacimiento_empleado" 
                        value="<?php echo $datos['fechanacimiento_empleado']; ?>">
                </div>

                <div class="form-group">
                  <label>Lugar de nacimiento</label>

                  <input type="text" class="form-control" id="lugarnacimiento_empleado" name="lugarnacimiento_empleado" 
                        value="<?php echo $datos['lugarnacimiento_empleado']; ?>">
                </div>

                <div class="form-group">
                  <label>Estado</label>

                  <?php
                    echo $froms->Lista_Desplegable(
                        $estados,
                        'nombre_estado',
                        'id_estado',
                        'estado_empleado',
                        $datos['estado_empleado'],
                        '',
                        ''
                    );
                  ?>
                </div>


              </div>

              <div class="card-footer">
                <button onclick="cargar_empleados();" class="btn btn-danger">Cancelar</button>
                <button onclick="editar_empleado(); return false;" class="btn btn-success">Guardar</button>
              </div>
            </form>
          </div>
        </div>
        <div class="col-md-3"></div>
      </div>

    </div>

  </div>
</form>