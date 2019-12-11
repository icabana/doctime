<script type="text/javascript">
  function insertar_saliente() {

    if (!validar_requeridos()) {
      return 0;
    }

    var datos = $('#formSalientes').serialize();

    ejecutarAccion(
      'radicados',
      'Salientes',
      'insertar',
      datos,
      'insertar_saliente2(data)'
    );

  }

  function insertar_saliente2(data) {

    if (data != 0) {      
      
      abrirVentanaContenedor(
            'radicados',
            'Salientes',
            'editar',
            'id_saliente=' + data,
            ""
        );

    } else {
      mensaje_alertas("error", "Error al registrar radicado", "center");
    }

  }


  function buscar_remitente(texto) {

    if (texto.length < 3) {

      $('#vista_remitentes').hide();

    } else {

      ejecutarAccion("radicados", "Salientes", "buscarRemitente", "texto=" + texto,
        "$('#vista_remitentes').show(); $('#vista_remitentes').html(data);");

    }

  }


  function buscar_destinatario(texto) {

    if (texto.length < 3) {

      $('#vista_destinatarios').hide();

    } else {

      ejecutarAccion("radicados", "Salientes", "buscarDestinatario", "texto=" + texto,
        "$('#vista_destinatarios').show(); $('#vista_destinatarios').html(data);");

    }

  }


  function seleccionar_destinatario(id_remitente, nombres_remitente, apellidos_remitente) {


    var nombre_remitente = nombres_remitente + ' ' + apellidos_remitente;

    $("#remitente_saliente").val(id_remitente);
    $("#remitente_saliente2").val(nombre_remitente);

    $('#vista_remitentes').hide();

  }

  function seleccionar_remitente(id_destinatario, nombre_destinatario) {


    $("#destinatario_saliente").val(id_destinatario);
    $("#destinatario_saliente2").val(nombre_destinatario);

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

      <form autocomplete="on" id="formSalientes" method="post">

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
                        <input type="text" readonly class="form-control requerido" id="numero_saliente" name="numero_saliente" onkeypress="return no_numeros(event)" value="<?php echo $numero_saliente; ?>">

                      </div>

                      <div class="col-md-3">
                        <label>Fecha Radicado<span style="color:red">*</span></label>
                        <input type="date" class="form-control requerido" id="fecharadicado_saliente" 
                        name="fecharadicado_saliente" value="<?php echo date("Y-m-d"); ?>">
                      </div>

                    
                      <div class="col-md-3">
                        <label>Tipo de Radicado<span style="color:red">*</span></label>
                        <?php
                        echo $froms->Lista_Desplegable(
                          $tiposradicado,
                          'nombre_tiporadicado',
                          'id_tiporadicado',
                          'tiporadicado_saliente',
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
                        <input type="hidden" class="requerido" id="remitente_saliente" name="remitente_saliente">
                        <input type="text" class="form-control requerido" id="remitente_saliente2" name="remitente_saliente2" onkeyup="buscar_remitente(this.value); return false;">
                        <div id="vista_remitentes"></div>
                      </div>


                      <div class="col-md-4">
                        <label>Destinatario<span style="color:red">*</span></label>
                        <input type="hidden" class="requerido" id="destinatario_saliente" name="destinatario_saliente">
                        <input type="text"  class="form-control requerido" id="destinatario_saliente2" name="destinario_saliente2" onkeyup="buscar_destinatario(this.value); return false;">
                        <div id="vista_destinatarios"></div>
                      </div>

                    </div>

                    <br>

                    <div class="row">

                      <div class="col-md-12">
                        <label>Asunto<span style="color:red">*</span></label>
                        <textarea class="form-control requerido" rows="3" id="asunto_saliente" name="asunto_saliente"></textarea>
                      </div>

                    </div>


                  </div>

                  <div style="padding: 20px;" class="tab-pane" id="tab_2">

                    <div class="row">
                    


                      <div class="col-md-3">
                        <label>N&uacute;mero de Folios</label>
                        <input onkeypress="return no_numeros(event)" type="text" class="form-control" id="numerofolios_saliente" name="numerofolios_saliente">
                      </div>

                    </div>

                    <br>

                    <div class="row">

                      <div class="col-md-12">
                        <label>Descripci&oacute;n de los folios</label>
                        <textarea class="form-control" rows="3" id="descripcionfolios_saliente" name="descripcionfolios_saliente"></textarea>
                      </div>

                    </div>

                  </div>


                </div>
              </div>
            </div>
          </div>
          <button onclick="cargar_salientes();" class="btn btn-danger">Cancelar</button>
          <button onclick="insertar_saliente(); return false;" class="btn btn-success">Guardar</button>

        </div>

      </form>

    </div>
  </div>