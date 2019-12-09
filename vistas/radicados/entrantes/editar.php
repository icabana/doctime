
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


    
  function buscar_remitente(texto) {

      if(texto.length < 3) {

        $('#vista_remitentes').hide();

      } else {

          ejecutarAccion("radicados", "Entrantes", "buscarRemitente", "texto="+texto, 
          "$('#vista_remitentes').show(); $('#vista_remitentes').html(data);");

      }

  }


  function buscar_destinatario(texto) {

      if(texto.length < 3) {

        $('#vista_destinatarios').hide();

      } else {

          ejecutarAccion("radicados", "Entrantes", "buscarDestinatario", "texto="+texto, 
          "$('#vista_destinatarios').show(); $('#vista_destinatarios').html(data);");

      }

  }


  function seleccionar_remitente(id_remitente, nombre_remitente){

      $("#remitente_entrante").val(id_remitente);
      $("#remitente_entrante2").val(nombre_remitente);

      $('#vista_remitentes').hide();

  }	

  function seleccionar_destinatario(id_destinatario, nombres_destinatario, apellidos_destinatario){

      $("#destinatario_entrante").val(id_destinatario);
      $("#destinatario_entrante2").val(nombre_destinatario+' '+apellidos_destinatario);

      $('#vista_destinatarios').hide();

  }

  function abrir_upload_archivo(id_soporte, documento_soporte){

    abrirVentanaContenedor(
        'radicados', 
        'Entrantes', 
        'abrirDocumentosContrato2',
        'id_soporte='+id_soporte+'&documento_soporte='+documento_soporte+'&id_contrato='+$("#id_contrato").val(), 
        "SubirArchivos('fileUpload_nuevo');"
    );	

  }


    
  function eliminar_archivo(id_soporte, nombre_soporte, archivo){

    var opcion = confirm("Está seguro de eliminar este archivo?");
    if(opcion!= true) return 0;

    ejecutarAccion(
        'radicados', 
        'Entrantes', 
        'eliminarDDocumento', 
        'id_radicado='+$("#id_radicado").val()+'&nombre_soporte='+nombre_soporte+'&archivo='+archivo+'&id_soporte='+id_soporte,
         "$('#vista_soportes_solicitud').html(data);  mensaje_alertas('success', 'Archivo Eliminado correctamente', 'center'); "
      
    );

  }

  function insertar_documento_modal() {

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



    function mover_carpeta0() {

          var cont = 0;

          $("input[name=check_radicados]:checked").each(
              function(){
                  cont++;
              }
          );

          if(cont == 0){
            mensaje_alertas("error", "Debe seleccionar algún registro");
            return 0;
          }

      }


    function mover_carpeta() {

          ejecutarAccion(
            'radicados',
            'Entrantes',
            'mover',
            'carpeta='+$("#carpeta_entrante").val()+'&id_entrante='+$("#id_entrante").val(),
            'mover_carpeta2(data)'
          );

    }

    function mover_carpeta2(data) {

          if (data == 1) {
            mensaje_alertas("success", "Cambio de Carpeta Exitoso", "center");
            cargar_entrantes();
          } else {
            mensaje_alertas("error", "Error al cambiar de carpeta", "center");
          }

      } 



      function cambiar_responsable0() {

          var cont = 0;

          $("input[name=check_radicados]:checked").each(
              function(){
                  cont++;
              }
          );

          if(cont == 0){
            mensaje_alertas("error", "Debe seleccionar algún registro");
            return 0;
          }

      }

      function cambiar_responsable() {

          if(!validar_requeridos()){
              return 0;
          }

          ejecutarAccion(
            'radicados',
            'Entrantes',
            'cambiar',
            'responsable_entrante='+$("#responsable_entrante").val()+'&id_entrante='+$("#id_entrante").val(),
            'cambiar_responsable2(data)'
          );

      }

      function cambiar_responsable2(data) {

          if (data == 1) {
            mensaje_alertas("success", "Cambio de Carpeta Exitoso", "center");
          } else {
            mensaje_alertas("error", "Error al cambiar de carpeta", "center");
          }

      } 


      function nueva_bitacora0() {

          var cont = 0;

          $("input[name=check_radicados]:checked").each(
              function(){
                  cont++;
              }
          );

          if(cont == 0){
            mensaje_alertas("error", "Debe seleccionar algún registro");
            return 0;
          }

      }

      function nueva_bitacora() {

          if(!validar_requeridos()){
              return 0;
          }

          ejecutarAccion(
            'radicados',
            'Entrantes',
            'nueva',
            'bitacora_entrante='+$("#bitacora_entrante").val()+'&id_entrante='+$("#id_entrante").val(),
            'nueva_bitacora2(data)'
          );

      }

      function nueva_bitacora2(data) {

          if (data == 1) {
            mensaje_alertas("success", "Cambio de Carpeta Exitoso", "center");
          } else {
            mensaje_alertas("error", "Error al cambiar de carpeta", "center");
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

      <div class="mailbox-controls">
                <!-- Check all button -->
                <button type="button" class="btn btn-default btn-sm checkbox-toggle"><i onclick="seleccionar_check(); return false;" class="far fa-square"></i>
                </button>
                <div class="btn-group ">
                  <button title="Eliminar Radicado" onclick="eliminar_entrante();" type="button" class="btn btn-default btn-sm"><i class="far fa-trash-alt"></i></button>
                  <button  data-toggle="modal" data-target="#exampleModal" type="button" class="btn btn-default btn-sm"><i class="fas fa-share"></i></button>
                  <button  data-toggle="modal" data-target="#exampleModal2" type="button" class="btn btn-default btn-sm"><i class="fas fa-user"></i></button>
                  <button  data-toggle="modal" data-target="#exampleModal3" type="button" class="btn btn-default btn-sm"><i class="fas fa-user"></i></button>
                </div>
               

                <!-- /.btn-group -->
                <button onclick="cargar_entrantes();" type="button" class="btn btn-default btn-sm"><i class="fas fa-sync-alt"></i></button>
                
                <!-- /.float-right -->
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
                        <input type="hidden" class="requerido" id="remitente_entrante" 
                        name="remitente_entrante">
                        <input type="text" class="form-control requerido" id="remitente_entrante2" name="remitente_entrante2"
                        value="<?php echo $datos['remitente_empleado']; ?>" 
                        onkeyup="buscar_remitente(this.value); return false;">
                        <div id="vista_remitentes"></div>
                      </div>


                      <div class="col-md-4">
                        <label>Enviado Por<span style="color:red">*</span></label>
                        <input type="text" class="form-control requerido" id="enviadopor_entrante" name="enviadopor_entrante"
                        value="<?php echo $datos['enviadopor_entrante']; ?>">
                      </div>

                      <div class="col-md-4">
                        <label>Destinatario<span style="color:red">*</span></label>
                        <input type="hidden" class="requerido" id="destinatario_entrante" 
                        name="destinario_entrante">
                        <input type="text" class="form-control requerido" id="destinatario_entrante2" name="destinario_entrante2"
                        value="<?php echo $datos['destinatario_entrante']; ?>"
                        onkeyup="buscar_destinatario(this.value); return false;">
                        <div id="vista_destinatarios"></div>
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

                  <h3>Documentos soportes</h3>
                          
                      <div id="vista_soportes">
                          
                          <?php
                            $id_entrante = $datos['id_entrante'];
                            require_once 'tabla_soportes.php';
                            echo $tabla_soportes;
                          ?>
                          
                      </div>
             
                </div>


                <div style="padding: 20px;" class="tab-pane" id="tab_3">

                  <h3>Trazabilidad</h3>
                          
                      <div id="vista_soportes">
                          
                      <table id="tabla_trazabilidad" class="table table-hover table-striped">
                      <thead>
                          <tr>
                              <th style='background-color:lavender'></th>
                              <th style='background-color:lavender'>Acci&oacute;n</th>                            
                              <th style='background-color:lavender; '>Usuario</th>
                              <th style='background-color:lavender; '>Fecha</th>
                          </tr>
                      </thead>
                <tbody>

                <?php
                        foreach ($trazabilidad as $NM => $items) {

                            echo "<tr>";

                            echo "<td>" . utf8_encode(strtolower($items['accion_trazabilidad'])) . "</td>";
                            echo "<td>" . utf8_encode(strtolower($items['nombres_empleado']." ".$items['apellidos_empleado'])) . "</td>";
                            echo "<td>" . utf8_encode(strtolower($items['fecha_trazabilidad'])) . "</td>";


                            echo "</tr>";
                        }
                        ?>
                  
                  </tbody>
                </table>
                          
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









////////////////////////////////
<!-- Modal 1-->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Mover a Carpeta:</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <div class="col-md-12">
          <label>Seleccionar Carpeta</label>
          <?php
            echo $froms->Lista_Desplegable(
              $carpetas,
              'nombre_carpeta',
              'id_carpeta',
              'carpeta_entrante',
              '',
              '',
              ''
            );
          ?>
        </div>
      </div>
      <div class="modal-footer">        
        <button onclick="mover_carpeta();" type="button" class="btn btn-primary">Aceptar</button>
      </div>
    </div>
  </div>
</div>




<!-- Modal 2-->
<div class="modal fade" id="exampleModal2" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Cambiar de Responsable:</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <div class="col-md-12">
          <label>Seleccionar Responsable</label>
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
      <div class="modal-footer">        
        <button onclick="cambiar_responsable();" type="button" class="btn btn-primary">Aceptar</button>
      </div>
    </div>
  </div>
</div>



<!-- Modal 3-->
<div class="modal fade" id="exampleModal3" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Registrar Nueva Bitacora:</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <div class="col-md-12">
          <label>Agregar Bitacora</label>
          <textarea id="bitacora_entrante" name="bitacora_entrante" rows="4"></textarea>
        </div>
      </div>
      <div class="modal-footer">        
        <button onclick="nueva_bitacora();" type="button" class="btn btn-primary">Aceptar</button>
      </div>
    </div>
  </div>
</div>