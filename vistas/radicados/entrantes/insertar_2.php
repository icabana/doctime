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

    if (data != 0) {      
      
      abrirVentanaContenedor(
            'radicados',
            'Entrantes',
            'editar',
            'id_entrante=' + data,
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

    
  function cargar_subseries_entrantes() {

    ejecutarAccion(
      'radicados',
      'entrantes',
      'cargarSubseriesEntrantes',
      'id_serie_entrante='+$('#serie_entrante').val(),
      "$('#div_subseries_entrantes').html(data); cargar_tiposdocumentales_entrantes()"
    );

}
    
  function cargar_tiposdocumentales_entrantes() {

      ejecutarAccion(
        'radicados',
        'entrantes',
        'cargarTiposdocumentalesEntrantes',
        'id_subserie_entrante='+$('#subserie_entrante').val(),
        "$('#div_tiposdocumentales_entrantes').html(data);"
      );

  } 

</script>

<style>
    #modal_remitentes2{
      width: 80% !important;
    }
  </style>

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

      <input type="hidden" id="saliente_entrante" name="saliente_entrante" value="<?php echo $saliente_entrante; ?>">

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

                      <div class="col-md-4">

                        <label>No. de Radicado<span style="color:red">*</span></label>
                        <input type="text" readonly class="form-control requerido" id="numero_entrante" name="numero_entrante" onkeypress="return no_numeros(event)" value="<?php echo $numero_entrante; ?>">

                      </div>

                      <div class="col-md-4">
                        <label>Fecha Radicado<span style="color:red">*</span></label>
                        <input type="date" class="form-control requerido" id="fecharadicado_entrante" 
                        name="fecharadicado_entrante" value="<?php echo date("Y-m-d"); ?>">
                      </div>
                      
                      <div class="col-md-4">
                        <label>Fecha Max de Respuesta<span style="color:red">*</span></label>
                        <input type="date" class="form-control requerido" id="fechamaxima_entrante" name="fechamaxima_entrante">
                      </div>

                    

                    </div>


                    <br>


                    
                    <div class="row">

                      <div class="col-md-4">
                          <label>Tipo de Radicado<span style="color:red">*</span></label>
                          <a href="#" data-toggle="modal" data-target="#modal_tipo_radicado">
                            Crear Nuevo
                          </a>
                          <div id="div_tipo_radicado_entrante">
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

                      
                      <div class="col-md-4">
                        <label>Responsable (Funcionario Interno)<span style="color:red">*</span></label>
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


                    </div>

                    <br>

                    <div class="row">

                      <div class="col-md-4">
                        <label>Remitente<span style="color:red">*</span></label>
                        <a href="#" data-toggle="modal" data-target="#modal_remitentes">
                          Crear Nuevo
                        </a>
                        <input type="hidden" class="requerido" id="remitente_entrante" name="remitente_entrante">
                        <input type="text" class="form-control requerido" id="remitente_entrante2" name="remitente_entrante2" onkeyup="buscar_remitente(this.value); return false;">
                        <div id="vista_remitentes"></div>
                      </div>


                      <div class="col-md-4">
                        <label>Enviado Por<span style="color:red">*</span></label>
                        <input type="text" class="form-control requerido" id="enviadopor_entrante" name="enviadopor_entrante">
                      </div>

                      <div class="col-md-4">
                        <label>Destinatario<span style="color:red">*</span></label>
                        <a href="#" data-toggle="modal" data-target="#modal_destinatarios">
                          Crear Nuevo
                        </a>
                        <input type="hidden" class="requerido" id="destinatario_entrante" name="destinatario_entrante">
                        <input type="text"  class="form-control requerido" id="destinatario_entrante2" name="destinario_entrante2" onkeyup="buscar_destinatario(this.value); return false;">
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

                      <div class="col-md-4">
                        <label>Prioridad</label>
                        <?php
                        echo $froms->Lista_Desplegable(
                          $prioridades,
                          'nombre_prioridad',
                          'id_prioridad',
                          'prioridad_entrante',
                          '',
                          '',
                          ''
                        );
                        ?>

                      </div>



                      <div class="col-md-4">
                          <label>¿Tiene Anexos?<span style="color:red">*</span></label>
                       
                          <?php
                          echo $froms->Lista_Desplegable(
                             $estados2,
                            'nombre_estado',
                            'id_estado',
                            'tieneanexos_entrante',
                            '',
                            '',
                            ''
                          );
                          ?>                   
                      </div>


                      <div class="col-md-4">
                        <label>N&uacute;mero de Folios</label>
                        <input onkeypress="return no_numeros(event)" type="text" class="form-control"
                         id="numerofolios_entrante" name="numerofolios_entrante">
                      </div>

                    </div>

                    <br>

                  

                    <div class="row">

                      <div class="col-md-12">
                        <label>Descripci&oacute;n de los folios</label>
                        <textarea class="form-control" rows="3" id="descripcionfolios_entrante"
                         name="descripcionfolios_entrante"></textarea>
                      </div>

                    </div>

                  </div>


                </div>
              </div>
            </div>
          </div>
          <button onclick="cargar_salientes();" class="btn btn-danger">Cancelar</button>
          <button onclick="insertar_entrante(); return false;" class="btn btn-success">Guardar</button>

        </div>

      </form>

    </div>
  </div>

  <?php

    require_once("vistas/radicados/entrantes/modales/tipos_radicado.php");
    require_once("vistas/radicados/entrantes/modales/remitentes.php");
    require_once("vistas/radicados/entrantes/modales/destinatarios.php");    
    

  ?>