
<script type="text/javascript">
  function insertar_entrante() {

    if(!validar_requeridos()){
        return 0;
    }

    var datos = $('#formEntrantes').serialize();

    ejecutarAccion(
      'radicados',
      'Entrantes',
      'insertar',
      datos,
      'insertar_entrante2(data)'
    );

  }

  function insertar_entrante2(data) {

    if (data == 1) {
      mensaje_alertas("success", "Entrante Registrado Exitosamente", "center");
      cargar_entrantes();
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
        <h3 class="card-title">Editar Radicado de Entrada</h3>
      </div>

      <form autocomplete="on" id="formEntrantes" method="post">

        <div class="card-body">

          <div class="row">
            <div class="col-12">
              <!-- Custom Tabs -->
              <div class="card">


                <ul class="nav nav-pills ml-auto p-2">
                  <li class="nav-item"><a class="nav-link active" href="#tab_1" data-toggle="tab">Informaci&oacute;n Principal</a></li>
                  <li class="nav-item"><a class="nav-link" href="#tab_2" data-toggle="tab">Informaci&oacute;n Secundaria</a></li>
                  <li class="nav-item"><a class="nav-link" href="#tab_3" data-toggle="tab">Documentos</a></li>
                  <li class="nav-item"><a class="nav-link" href="#tab_3" data-toggle="tab">Trazabilidad</a></li>
                </ul>

                <div class="tab-content">
                  <div style="padding: 20px;" class="tab-pane active" id="tab_1">
                    <div class="row">

                      <div class="col-md-3">

                        <label>No. de Radicado<span style="color:red">*</span></label>
                        <input type="text" class="form-control radicado" id="numero_entrante" name="numero_entrante"
                        onkeypress="return no_numeros(event)" value="<?php echo $datos['numero_empleado']; ?>">

                      </div>

                      <div class="col-md-3">
                        <label>Fecha Radicado<span style="color:red">*</span></label>
                        <input type="text" class="form-control radicado" id="fecharadicado_entrante" name="fecharadicado_entrante"
                        value="<?php echo $datos['fecharadicao_empleado']; ?>">
                      </div>

                      <div class="col-md-3">
                        <label>Fecha Recibido<span style="color:red">*</span></label>
                        <input type="text" class="form-control radicado" id="fecharecibido_entrante" name="fecharecibido_entrante"
                        value="<?php echo $datos['fecharecibido_empleado']; ?>">
                      </div>

                      <div class="col-md-3">
                        <label>Tipo de Radicado<span style="color:red">*</span></label>
                        <?php
                        echo $froms->Lista_Desplegable(
                          $tiposradicado,
                          'nombre_tiporadicado',
                          'id_tiporadicado',
                          'tiporadicado_entrante',
                          '',
                          '',
                          ''
                        );
                        ?>
                      </div>
                    </div>

                    <br>

                    <div class="row">

                      <div class="col-md-4">
                        <label>Remitente<span style="color:red">*</span></label>
                        <input type="text" class="form-control radicado" id="remitente_entrante" name="remitente_entrante"
                        value="<?php echo $datos['remitente_empleado']; ?>">
                      </div>


                      <div class="col-md-4">
                        <label>Enviado Por<span style="color:red">*</span></label>
                        <input type="text" class="form-control radicado" id="enviadopor_entrante" name="enviadopor_entrante"
                        value="<?php echo $datos['enviadopor_entrante']; ?>">
                      </div>

                      <div class="col-md-4">
                        <label>Destinatario<span style="color:red">*</span></label>
                        <input type="text" class="form-control radicado" id="destinatario_entrante" name="destinario_entrante"
                        value="<?php echo $datos['destinatario_entrante']; ?>">
                      </div>

                    </div>

                    <br>

                    <div class="row">

                      <div class="col-md-12">
                        <label>Asunto<span style="color:red">*</span></label>
                        <textarea class="form-control radicado" rows="3" id="asunto_entrante" name="asunto_entrante"></textarea
                        value="<?php echo $datos['asunto_entrante']; ?>">
                      </div>

                    </div>


                  </div>

                  <div style="padding: 20px;" class="tab-pane" id="tab_2">

                    <div class="row">

                      <div class="col-md-3">
                        <label>Prioridad</label>
                        <input type="text" class="form-control" id="prioridad_entrante" name="prioridad_entrante"
                        value="<?php echo $datos['prioridad_entrante']; ?>">
                      </div>


                      <div class="col-md-3">
                        <label>Fecha de Respuesta</label>
                        <input type="text" class="form-control" id="fechamaxima_entrante" name="fechamaxima_entrante"
                        value="<?php echo $datos['fechamaxima_entrante']; ?>">
                      </div>


                      <div class="col-md-3">
                        <label>Responsable<span style="color:red">*</span></label>
                        <?php
                        echo $froms->Lista_Desplegable(
                          $responsables,
                          'nombre_responsable',
                          'id_responsable',
                          'responsable_entrante',
                          '',
                          '',
                          ''
                        );
                        ?>
                      </div>


                      <div class="col-md-3">
                        <label>N&uacute;mero de Folios</label>
                        <input type="text" class="form-control" id="numerofolios_entrante" name="numerofolios_entrante"
                        value="<?php echo $datos['numerofolios_empleado']; ?>" onkeypress="return no_numeros(event)">
                      </div>

                    </div>

                    <br>

                    <div class="row">



                      <div class="col-md-12">
                        <label>Descripci&oacute;n de los folios</label>
                        <textarea class="form-control" rows="3" id="descripcionfolios_entrante" name="descipcionfolios_entrante">
                        <?php echo $datos['descripcionfolios_empleado']; ?>  
                      </textarea>
                        
                      </div>

                    </div>


                  </div>



                  <div style="padding: 20px;" class="tab-pane" id="tab_3">

                    <div class="row">
                      <div class="col-md-3">
                        <label>Nombre de Usuario</label>
                        <input type="text" class="form-control" id="nombreusuario_entrante" name="nombreusuario_entrante"
                        value="<?php echo $datos['nombreusuario_empleado']; ?>">
                      </div>

                      <div class="col-md-3">
                        <label>Contrase&ntilde;a</label>
                        <input type="text" class="form-control" id="contraseña_entrante" name="contraseña_entrante"
                        value="<?php echo $datos['contraseña_empleado']; ?>">
                      </div>

                      <div class="col-md-3">
                        <label>Estado</label>

                        <?php
                        echo $froms->Lista_Desplegable(
                          $estados,
                          'nombre_estado',
                          'id_estado',
                          'estado_entrante',
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
          <button onclick="cargar_entrantes();" class="btn btn-danger">Cancelar</button>
          <button onclick="insertar_entrante(); return false;" class="btn btn-success">Guardar</button>

        </div>

      </form>

    </div>
  </div>