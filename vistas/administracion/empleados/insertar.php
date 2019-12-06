<script type="text/javascript">
  function insertar_empleado() {

    var datos = $('#formEmpleados').serialize();

    ejecutarAccion(
      'administracion',
      'Empleados',
      'insertar',
      datos,
      'insertar_empleado2(data)'
    );

  }

  function insertar_empleado2(data) {

    if (data == 1) {
      mensaje_alertas("success", "Empleado Registrado Exitosamente", "center");
      cargar_empleados();
    } else {
      mensaje_alertas("error", "El Nick ya se encuentra registrado", "center");
    }

  }
</script>


<?php
$froms = new Formularios();
?>


<div class="box box-default">

  <div style="padding: 25px" class="box-body">

    <div class="card card-primary">
      <div class="card-header">
        <h3 class="card-title">Registrar Empleado</h3>
      </div>

      <form autocomplete="on" id="formEmpleados" method="post">

        <div class="card-body">

          <div class="row">
            <div class="col-12">
              <!-- Custom Tabs -->
              <div class="card">


                <ul class="nav nav-pills ml-auto p-2">
                  <li class="nav-item"><a class="nav-link active" href="#tab_1" data-toggle="tab">Informaci&oacute;n Principal</a></li>
                  <li class="nav-item"><a class="nav-link" href="#tab_2" data-toggle="tab">Informaci&oacute;n Secundaria</a></li>
                  <li class="nav-item"><a class="nav-link" href="#tab_3" data-toggle="tab">Datos de Usuario</a></li>

                </ul>

                <div class="tab-content">
                  <div style="padding: 20px;" class="tab-pane active" id="tab_1">
                    <div class="row">

                      <div class="col-md-3">

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

                      <div class="col-md-3">
                        <label>Documento</label>
                        <input type="text" class="form-control" id="documento_empleado" name="documento_empleado">
                      </div>

                     

                      <div class="col-md-6"></div>

                    </div>

                    <br>





                    <div class="row">

                      <div class="col-md-6">
                        <label>Nombres</label>
                        <input type="text" class="form-control" id="nombres_empleado" name="nombres_empleado">
                      </div>


                      <div class="col-md-6">
                        <label>Apellidos</label>
                        <input type="text" class="form-control" id="apellidos_empleado" name="apellidos_empleado">
                      </div>


                    </div>
                  </div>

                  <div style="padding: 20px;" class="tab-pane" id="tab_2">


                  <div class="row">
                    <div class="col-md-2">
                      <label>Celular</label>
                      <input type="text" class="form-control" id="celular_empleado" name="celular_empleado">
                    </div>

                    <div class="col-md-2">
                      <label>Tel&eacute;fono</label>
                      <input type="text" class="form-control" id="telefono_empleado" name="telefono_empleado">
                    </div>

                   
                      <div class="col-md-4">
                        <label>Direcci&oacute;n</label>
                        <input type="text" class="form-control" id="direccion_empleado" name="direccion_empleado">
                      </div>

                      <div class="col-md-4">
                        <label>Ciudad</label>
                        <input type="text" class="form-control" id="ciudad_empleado" name="ciudad_empleado">
                      </div>
                      </div>

<br>

                      <div class="row">
                      <div class="col-md-2">
                        <label>Sexo</label>

                        <?php
                        echo $froms->Lista_Desplegable(
                          $sexos,
                          'nombre_sexo',
                          'id_sexo',
                          'sexo_empleado',
                          '',
                          '',
                          ''
                        );
                        ?>
                      </div>

                      <div class="col-md-2">
                        <label>Estado Civil</label>

                        <?php
                        echo $froms->Lista_Desplegable(
                          $estadoscivil,
                          'nombre_estadocivil',
                          'id_estadocivil',
                          'estadocivil_empleado',
                          '',
                          '',
                          ''
                        );
                        ?>
                      </div>

                      <div class="col-md-3">
                        <label>Fecha de Nacimiento</label>

                        <input type="text" class="form-control" id="fechanacimiento_empleado" name="fechanacimiento_empleado" value="<?php echo $datos['fechanacimiento_empleado']; ?>">
                      </div>

                      <div class="col-md-3">
                        <label>Lugar de Nacimiento</label>

                        <input type="text" class="form-control" id="lugarnacimiento_empleado" name="lugarnacimiento_empleado" value="<?php echo $datos['lugarnacimiento_empleado']; ?>">
                      </div>
                    </div>
                    </div>



                  <div style="padding: 20px;" class="tab-pane" id="tab_3">

                    <div class="row">
                    <div class="col-md-3">
                      <label>Nombre de Usuario</label>
                      <input type="text" class="form-control" id="celular_empleado" name="celular_empleado">
                    </div>

                    <div class="col-md-3">
                      <label>Contrase&ntilde;a</label>
                      <input type="text" class="form-control" id="telefono_empleado" name="telefono_empleado">
                    </div>

                    <div class="col-md-3">
                        <label>Estado</label>

                        <?php
                        echo $froms->Lista_Desplegable(
                          $estados,
                          'nombre_estado',
                          'id_estado',
                          'estado_empleado',
                          '',
                          '',
                          ''
                        );
                        ?>
                      </div>
              
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <button onclick="cargar_empleados();" class="btn btn-danger">Cancelar</button>
          <button onclick="insertar_empleado(); return false;" class="btn btn-success">Guardar</button>

        </div>

      </form>

    </div>
  </div>