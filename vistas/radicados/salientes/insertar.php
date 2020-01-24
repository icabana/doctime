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


  function seleccionar_destinatario(id_destinatario, nombre_destinatario) {

    $("#destinatario_saliente").val(id_destinatario);
    $("#destinatario_saliente2").val(nombre_destinatario);

    $('#vista_destinatarios').hide();

  }

  function seleccionar_remitente(id_remitente, nombres_remitente, apellidos_remitente) {

    nombre_remitente = nombres_remitente+" "+apellidos_remitente;

    $("#remitente_saliente").val(id_remitente);
    $("#remitente_saliente2").val(nombre_remitente);

    $('#vista_remitentes').hide();

  }

  
    
  function cargar_subseries_salientes() {

      ejecutarAccion(
        'radicados',
        'salientes',
        'cargarSubseriesSalientes',
        'id_serie_saliente='+$('#serie_saliente').val(),
        "$('#div_subseries_salientes').html(data); cargar_tiposdocumentales_salientes()"
      );

  } 

  function cargar_tiposdocumentales_salientes() {

    ejecutarAccion(
      'radicados',
      'salientes',
      'cargarTiposdocumentalesSalientes',
      'id_subserie_saliente='+$('#subserie_saliente').val(),
      "$('#div_tiposdocumentales_salientes').html(data);"
    );

  } 



</script>


<?php
$froms = new Formularios();
?>


<div class="box box-default">

  <div style="padding: 25px" class="box-body">

    <div class="card card-primary">
      <div class="card-header">
        <h3 class="card-title">Crear Nuevo Radicado de Salida</h3>
      </div>

      <form autocomplete="on" id="formSalientes" method="post">

      <input type="hidden" id="entrante_saliente" name="entrante_saliente"  value="<?php echo $entrante_saliente; ?>">

        <div class="card-body">

          <div class="row">
            <div class="col-12">

            
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

                    
                      <div class="col-md-4">
                        <label>Tipo de Radicado<span style="color:red">*</span></label>
                        <a href="#" data-toggle="modal" data-target="#modal_tipo_radicado_saliente">
                          Crear Nuevo
                        </a>
                        <div id="div_tipo_radicado_saliente">
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
                    </div>

                    <br>

                    <div class="row">

                      <div class="col-md-4">
                        <label>Remitente<span style="color:red">*</span></label>
                        <a href="#" data-toggle="modal" data-target="#modal_remitentes_saliente">
                          Crear Nuevo
                        </a>
                        <input type="hidden" class="requerido" id="remitente_saliente" name="remitente_saliente">
                        <input type="text" class="form-control requerido" id="remitente_saliente2" name="remitente_saliente2" onkeyup="buscar_remitente(this.value); return false;">
                        <div id="vista_remitentes"></div>
                      </div>


                      <div class="col-md-4">
                        <label>Destinatario<span style="color:red">*</span></label>
                        <a href="#" data-toggle="modal" data-target="#modal_destinatarios_saliente">
                          Crear Nuevo
                        </a>
                        <input type="hidden" class="requerido" id="destinatario_saliente" name="destinatario_saliente">
                        <input type="text"  class="form-control requerido" id="destinatario_saliente2" name="destinario_saliente2" onkeyup="buscar_destinatario(this.value); return false;">
                        <div id="vista_destinatarios"></div>
                      </div>

                      <div class="col-md-3">
                        <label>N&uacute;mero de Folios</label>
                        <input onkeypress="return no_numeros(event)" type="text" class="form-control" id="numerofolios_saliente" name="numerofolios_saliente">
                      </div>

                    </div>

                    <br>

                    <div class="row">

                      <div class="col-md-12">
                        <label>Asunto<span style="color:red">*</span></label>
                        <textarea class="form-control requerido" rows="2" id="asunto_saliente" name="asunto_saliente"></textarea>
                      </div>

                    </div>
<br>
                    <div class="row">
                      <div class="col-md-12">
                        <label>Descripci&oacute;n de los folios</label>
                        <textarea class="form-control" rows="2" id="descripcionfolios_saliente" name="descripcionfolios_saliente"></textarea>
                      </div>
                    </div>


                  </div>

                 


              
          </div>
          <br>
          <button onclick="cargar_salientes();" class="btn btn-danger">Cancelar</button>
          <button onclick="insertar_saliente(); return false;" class="btn btn-success">Guardar</button>

        </div>

      </form>

    </div>
  </div>


  
  <?php

    require_once("vistas/radicados/salientes/modales/tipos_radicado.php");
    require_once("vistas/radicados/salientes/modales/destinatarios.php");    
    require_once("vistas/radicados/salientes/modales/remitentes.php");
    
    

  ?>