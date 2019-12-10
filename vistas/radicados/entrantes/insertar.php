<script type="text/javascript">
  function insertar_entrante() {

    if (!validar_requeridos()) {
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
      mensaje_alertas("success", "Radicado Registrado con Exito", "center");
      cargar_entrantes();
    } else {
      mensaje_alertas("error", "Error al registrar radicado", "center");
    }

  }


  function buscar_remitente(texto) {

    if (texto.length < 3) {

      $('#vista_remitentes').hide();

    } else {

      ejecutarAccion("radicados", "Entrantes", "buscarRemitente", "texto=" + texto,
        "$('#vista_remitentes').show(); $('#vista_remitentes').html(data);");

    }

  }


  function buscar_destinatario(texto) {

    if (texto.length < 3) {

      $('#vista_destinatarios').hide();

    } else {

      ejecutarAccion("radicados", "Entrantes", "buscarDestinatario", "texto=" + texto,
        "$('#vista_destinatarios').show(); $('#vista_destinatarios').html(data);");

    }

  }


  function seleccionar_remitente(id_remitente, nombre_remitente) {

    $("#remitente_entrante").val(id_remitente);
    $("#remitente_entrante2").val(nombre_remitente);

    $('#vista_remitentes').hide();

  }

  function seleccionar_destinatario(id_destinatario, nombres_destinatario, apellidos_destinatario) {

    var nombre_destinatario = nombres_destinatario + ' ' + apellidos_destinatario;

    $("#destinatario_entrante").val(id_destinatario);
    $("#destinatario_entrante2").val(nombre_destinatario);

    $('#vista_destinatarios').hide();

  }
</script>


<?php
$froms = new Formularios();
?>


<div class="box box-default">

  <div style="padding: 25px" class="box-body">

    <div class="card card-primary">
      <div class="card-header">
        <h3 class="card-title">Crear Nuevo Radicado de Entrada</h3>
      </div>

      <form autocomplete="on" id="formEntrantes" method="post">

        <div class="card-body">

          <div class="row">
            <div class="col-12">
              <!-- Custom Tabs -->
              <div class="card">

                <ul class="nav nav-pills ml-auto p-2">
                  <li class="nav-item">
                    <a class="nav-link active" href="#tab_1" data-toggle="tab">Informaci&oacute;n Principal</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#tab_2" data-toggle="tab">Informaci&oacute;n Secundaria</a>
                  </li>
                </ul>

                <div class="tab-content">
                  <div style="padding: 20px;" class="tab-pane active" id="tab_1">
                    <div class="row">

                      <div class="col-md-3">

                        <label>No. de Radicado<span style="color:red">*</span></label>
                        <input type="text" readonly class="form-control requerido" id="numero_entrante" name="numero_entrante" onkeypress="return no_numeros(event)" value="<?php echo $numero_entrante; ?>">

                      </div>

                      <div class="col-md-3">
                        <label>Fecha Radicado<span style="color:red">*</span></label>
                        <input type="date" class="form-control requerido" id="fecharadicado_entrante" name="fecharadicado_entrante">
                      </div>

                      <div class="col-md-3">
                        <label>Fecha Recibido<span style="color:red">*</span></label>
                        <input type="date" class="form-control requerido" id="fecharecibido_entrante" name="fecharecibido_entrante">
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
                        <input type="text" class="requerido" id="remitente_entrante" name="remitente_entrante">
                        <input type="text" class="form-control requerido" id="remitente_entrante2" name="remitente_entrante2" onkeyup="buscar_remitente(this.value); return false;">
                        <div id="vista_remitentes"></div>
                      </div>


                      <div class="col-md-4">
                        <label>Enviado Por<span style="color:red">*</span></label>
                        <input type="text" class="form-control requerido" id="enviadopor_entrante" name="enviadopor_entrante">
                      </div>

                      <div class="col-md-4">
                        <label>Destinatario<span style="color:red">*</span></label>
                        <input type="text" class="requerido" id="destinatario_entrante" name="destinario_entrante">
                        <input type="text" class="form-control requerido" id="destinatario_entrante2" name="destinario_entrante2" onkeyup="buscar_destinatario(this.value); return false;">
                        <div id="vista_destinatarios"></div>
                      </div>

                    </div>

                    <br>

                    <div class="row">

                      <div class="col-md-12">
                        <label>Asunto<span style="color:red">*</span></label>
                        <textarea class="form-control requerido" rows="3" id="asunto_entrante" name="asunto_entrante"></textarea>
                      </div>

                    </div>


                  </div>

                  <div style="padding: 20px;" class="tab-pane" id="tab_2">

                    <div class="row">

                      <div class="col-md-3">
                        <label>Prioridad</label>
                        <?php
                        echo $froms->Lista_Desplegable(
                          $empleados,
                          'nombre_prioridad',
                          'id_prioridad',
                          'prioridad_entrante',
                          '',
                          '',
                          ''
                        );
                        ?>

                      </div>


                      <div class="col-md-3">
                        <label>Fecha de Respuesta</label>
                        <input type="date" class="form-control" id="fechamaxima_entrante" name="fechamaxima_entrante">
                      </div>


                      <div class="col-md-3">
                        <label>Responsable<span style="color:red">*</span></label>
                        <?php
                        echo $froms->Lista_Desplegable(
                          $empleados,
                          'nombre_empleado',
                          'id_empleado',
                          'responsable_entrante',
                          '',
                          '',
                          ''
                        );
                        ?>
                      </div>


                      <div class="col-md-3">
                        <label>N&uacute;mero de Folios</label>
                        <input onkeypress="return no_numeros(event)" type="text" class="form-control" id="numerofolios_entrante" name="numerofolios_entrante">
                      </div>

                    </div>

                    <br>

                    <div class="row">

                      <div class="col-md-12">
                        <label>Descripci&oacute;n de los folios</label>
                        <textarea class="form-control" rows="3" id="descripcionfolios_entrante" name="descripcionfolios_entrante"></textarea>
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