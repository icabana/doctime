<script type="text/javascript">
  function editar_entrante() {

    if (!validar_requeridos()) {
      return 0;
    }

    var datos = $('#formEntrantes').serialize();

    ejecutarAccion(
      'radicados',
      'Entrantes',
      'guardar',
      datos,
      'editar_entrante2(data)'
    );

  }

  function editar_entrante2(data) {

      mensaje_alertas("success", "Entrante Registrado Exitosamente", "center");
      cargar_entrantes_finalizados();
   

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

      $("#destinatario_entrante").val(id_destinatario);
      $("#destinatario_entrante2").val(nombres_destinatario + ' ' + apellidos_destinatario);

      $('#vista_destinatarios').hide();

  }



  function mover_carpeta_editar() {

    $('#exampleModal').modal('hide');

    ejecutarAccion(
      'radicados',
      'Entrantes',
      'mover',
      'carpeta_entrante=' + $("#carpeta_entrante_editar").val() + '&id_entrante=' + $("#id_entrante").val(),
      'mover_carpeta_editar2(data)'
    );

  }

  function modificar_nombre_archivo(documento_soporte) {

      $('#documento_soporte').val(documento_soporte);

  }

  function actualizar_upload_archivo() {

    $('form#form_upload').submit();
    
    window.open('','_parent',''); 
   window.close(); 

    $('#exampleModal5_editar_entrante').modal('hide');
     $('.modal-backdrop fade show').remove();
   
     actualizar_vista_soportes();

  }

  function actualizar_vista_soportes() {


    ejecutarAccion(
        'radicados',
        'Entrantes',
        'actualizarUpload',
        'id_entrante='+$("#id_entrante").val(),
        "$('#vista_soportes').html(data); "

    );
 

  }

  

  function mover_carpeta_editar2(data) {

    if (data == 1) {
      mensaje_alertas("success", "Cambio de Carpeta Exitoso", "center");
      cargar_entrantes_finalizados();
    } else {
      mensaje_alertas("error", "Error al cambiar de carpeta", "center");
    }

  }


  function nuevo_documento() {

    $('#exampleModal4_editar_entrante').modal('hide');

      ejecutarAccion(
          'radicados',
          'Entrantes',
          'nuevoDocumento',
          'documento=' + $("#documento").val() + '&id_entrante=' + $("#id_entrante").val(),
          'nuevo_documento2(data)'
      );

    }

    function nuevo_documento2(data) {

      if (data == 1) {
        actualizar_vista_soportes();
        //mensaje_alertas("success", "Nuevo Documento registrado", "center");
        //cargar_entrantes_finalizados();
      } else {
          mensaje_alertas("error", "Error al crear nuevo documento", "center");
      }

    }



function cambiar_estado_editar() {

    $('#exampleModal7_editar').modal('hide');


    ejecutarAccion(
      'radicados',
      'Entrantes',
      'cambiarestado',
      'estado_entrante='+$("#estado_entrante_editar").val()+'&radicados='+$("#id_entrante").val(),
      'cambiar_estado2_editar(data)'
    );

}

function cambiar_estado2_editar(data) {

    cargar_entrantes_finalizados();
    mensaje_alertas("success", "Ajuste Exitoso", "center");


} 





  function cambiar_responsable_editar() {

    $('#exampleModal2_editar').modal('hide');

    ejecutarAccion(
      'radicados',
      'Entrantes',
      'cambiar',
      'responsable_entrante=' + $("#responsable_entrante_editar").val() + '&id_entrante=' + $("#id_entrante").val(),
      'cambiar_responsable_editar2(data)'
    );

  }

  function cambiar_responsable_editar2(data) {
    cargar_entrantes_finalizados();
    mensaje_alertas("success", "Ajuste Exitoso", "center");

  }



  function nueva_bitacora_editar() {

    if ($("#bitacora_entrante_editar").val() == "") {
      mensaje_alertas("error", "Debe ingresar una bitacora", "center");
      return 0;
    }

    $('#exampleModal3_editar').modal('hide');

    ejecutarAccion(
      'radicados',
      'Entrantes',
      'nueva',
      'bitacora_entrante_editar=' + $("#bitacora_entrante_editar").val() + '&id_entrante=' + $("#id_entrante").val(),
      'nueva_bitacora_editar2(data)'
    );

  }


  function nueva_bitacora_editar2(data) {
    actualizar_vista_trazabilidad();
      mensaje_alertas("success", "Bitacora almacenada con Exito", "center");
   
  }


  function actualizar_vista_trazabilidad() {

        ejecutarAccion(
            'radicados',
            'Entrantes',
            'actualizarTrazabilidad',
            'id_entrante='+$("#id_entrante").val(),
            "$('#vista_trazabilidad').html(data); "

        );
  }


    
  function enviar_bandeja_entrante_editar() {


  mensaje_confirmar("¿Está seguro de enviar a la Bandeja de Entrada?", "enviar_bandeja_entrante_editar2(); ");


}

function enviar_bandeja_entrante_editar2() {


  ejecutarAccion(
    'radicados',
    'Entrantes',
    'enviarBandejaEntrante',
    "radicados=" + $("#id_entrante").val(),
    ' mensaje_alertas("success", "Enviado a la bandeja de entrada", "center"); cargar_entrantes_finalizados();'
  );

}

  function eliminar_entrante_editar() {

mensaje_confirmar("¿Está seguro de eliminar el radicado?", "eliminar_entrante_editar2(); ");

}

function eliminar_entrante_editar2() {

ejecutarAccion(
    'radicados',
    'Entrantes',
    'eliminar',
    "radicados=" + $("#id_entrante").val(),
    ' mensaje_alertas("success", "Carpeta Eliminada con Éxito", "center"); cargar_entrantes_finalizados();'
);

}



function eliminar_archivo_entrante(archivo_entrante) {

var opcion = confirm("¿Está seguro de eliminar este archivo?");
if (opcion != true) return 0;

ejecutarAccion(
  'radicados',
  'Entrantes',
  'eliminarArchivo',
  'archivo=' + archivo_entrante+'&id_entrante=' + $("#id_entrante").val(),
  "$('#vista_documentos_estrantes').html(data);  mensaje_alertas('success', 'Archivo Eliminado correctamente', 'center'); "

);

}

function actualizar_documentos_entrante() {

ejecutarAccion(
  'radicados',
  'Entrantes',
  'actualizarDocumentos',
  'id_entrante=' + $("#id_entrante").val(),
  "$('#vista_documentos_estrantes').html(data);  "

); 

}



function upload_entradas(){//Funcion encargada de enviar el archivo via AJAX

$(".upload-msg").text('Cargando...');
    var inputFileImage = document.getElementById("fileToUploadEntradas");
    var file = inputFileImage.files[0];
    var data = new FormData();
    data.append('fileToUploadEntradas',file);
    
    data.append('id_entrante', $("#id_entrante").val());
    data.append('numero_entrante', $("#numero_entrante2").val());
    
    console.log(data);
          
    $.ajax({
      url: "libs/uploads/upload_entrantes.php",        // Url to which the request is send
      type: "POST",             // Type of request to be send, called as method
      data: data, 			  // Data sent to server, a set of key/value pairs (i.e. form fields and values)
      contentType: false,       // The content type used when sending data to the server.
      cache: false,             // To unable request pages to be cached
      processData:false,        // To send DOMDocument or non processed data file it is set to false
      success: function(data)   // A function to be called if request succeeds
      {
        $(".upload-msg").html(data);
        actualizar_documentos_entrante();
        $('#exampleModal4_editar_entrante').modal('hide');
          $('#fileToUploadEntradas').val('');
        window.setTimeout(function() {
        $(".alert-dismissible").fadeTo(500, 0).slideUp(500, function(){
        $(this).remove();
        });	}, 2000);
      }
    });
    
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
      
        <div class="btn-group ">
          <?php
            if($_SESSION['rol'] == '1'){
          ?>
          <button title="Eliminar Radicado" onclick="eliminar_entrante_editar();" type="button" class="btn btn-default btn-sm"><i class="far fa-trash-alt"></i></button>
          <?php
              }
          ?>
          <button data-toggle="modal" data-target="#exampleModal" type="button" class="btn btn-default btn-sm"><i class="fas fa-share"></i></button>
          <button title="Enviar a Bandeja de Entrada" onclick="enviar_bandeja_entrante_editar();"  type="button" class="btn btn-default btn-sm"><i class="fas fa-reply"></i></button>
        
          <button title="Cambiar de responsable"  data-toggle="modal" data-target="#exampleModal2_editar" type="button" class="btn btn-default btn-sm"><i class="fas fa-user"></i></button>
          <button title="Agregar Bitacora" data-toggle="modal" data-target="#exampleModal3_editar" type="button" class="btn btn-default btn-sm"><i class="fas fa-plus"></i></button>
          <button title="Cambiar Estado" data-toggle="modal" data-target="#exampleModal7_editar" type="button" class="btn btn-default btn-sm"><i class="fas fa-tags"></i></button>
        </div>


        <!-- /.float-right -->
      </div>

      <form autocomplete="on" id="formEntrantes" method="post">

      <input type="hidden" id="id_entrante" name="id_entrante" value="<?php echo $datos['id_entrante']; ?>">
      <input type="hidden" id="numero_entrante2" name="numero_entrante2" value="<?php echo $datos['numero_entrante']; ?>">

        <div class="card-body">

          <div class="row">
            <div class="col-12">
              <!-- Custom Tabs -->
              <div class="card">


                <ul class="nav nav-pills ml-auto p-2">
                  <li class="nav-item"><a class="nav-link active" href="#tab_1" data-toggle="tab">Informaci&oacute;n Principal</a></li>
                  <li class="nav-item"><a class="nav-link" href="#tab_2" data-toggle="tab">Informaci&oacute;n Secundaria</a></li>
                  <li class="nav-item"><a class="nav-link" href="#tab_3" data-toggle="tab">Documentos</a></li>
                  <li class="nav-item"><a class="nav-link" href="#tab_4" data-toggle="tab">Trazabilidad</a></li>
                </ul>

                <div class="tab-content">
                  <div style="padding: 20px;" class="tab-pane active" id="tab_1">
                    <div class="row">

                      <div class="col-md-3">

                        <label>No. de Radicado<span style="color:red">*</span></label>
                        <input readonly type="text" class="form-control radicado" id="numero_entrante" name="numero_entrante" 
                        value="<?php echo $datos['numero_entrante']; ?>">

                      </div>

                      <div class="col-md-3">
                        <label>Fecha Radicado<span style="color:red">*</span></label>
                        <input type="date" class="form-control radicado" id="fecharadicado_entrante" 
                        name="fecharadicado_entrante" value="<?php echo $datos['fecharadicado_entrante']; ?>">
                      </div>

                      <div class="col-md-3">
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
                          $datos['tiporadicado_entrante'],
                          '',
                          ''
                        );
                        ?>
                      </div>
                      </div>

                      <div class="col-md-3">
                          <label>¿Tiene Anexos?<span style="color:red">*</span></label>
                       
                          <?php
                          echo $froms->Lista_Desplegable(
                             $estados2,
                            'nombre_estado',
                            'id_estado',
                            'tieneanexos_entrante',
                            $datos['tieneanexos_entrante'],
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
                        <input type="hidden" class="requerido" id="remitente_entrante" name="remitente_entrante" 
                        value="<?php echo $datos['remitente_entrante']; ?>">
                        <input type="text"  class="form-control requerido" id="remitente_entrante2" 
                        name="remitente_entrante2" value="<?php echo $datos['nombre_tercero']; ?>" 
                        onkeyup="buscar_remitente(this.value); return false;">
                        <div id="vista_remitentes"></div>
                      </div>


                      <div class="col-md-4">
                        <label>Enviado Por<span style="color:red">*</span></label>
                        <input type="text" class="form-control requerido" id="enviadopor_entrante" 
                        name="enviadopor_entrante" value="<?php echo $datos['enviadopor_entrante']; ?>">
                      </div>

                      <div class="col-md-4">
                        <label>Destinatario<span style="color:red">*</span></label>
                        <a href="#" data-toggle="modal" data-target="#modal_destinatarios">
                          Crear Nuevo
                        </a>
                        <input type="hidden" class="requerido" id="destinatario_entrante" name="destinatario_entrante" 
                        value="<?php echo $datos['destinatario_entrante']; ?>">
                        <input type="text"  class="form-control requerido" id="destinatario_entrante2" 
                        name="destinario_entrante2" 
                        value="<?php echo $datos['nombres_empleado'] . " " . $datos['apellidos_empleado']; ?>" 
                        onkeyup="buscar_destinatario(this.value); return false;">
                        <div id="vista_destinatarios"></div>
                      </div>

                    </div>

                    <br>

                    <div class="row">

                      <div class="col-md-12">
                        <label>Asunto<span style="color:red">*</span></label>
                        <textarea class="form-control radicado" rows="3" id="asunto_entrante" 
                        name="asunto_entrante"><?php echo $datos['asunto_entrante']; ?></textarea
                        value="">
                      </div>

                    </div>


                  </div>

                  <div style="padding: 20px;" class="tab-pane" id="tab_2">

                    <div class="row">

                      <div class="col-md-3">
                        <label>Prioridad</label>
                        <?php
                          echo $froms->Lista_Desplegable(
                            $prioridades,
                            'nombre_prioridad',
                            'id_prioridad',
                            'prioridad_entrante',
                            $datos['prioridad_entrante'],
                            '',
                            ''
                          );
                        ?>
                     
                      </div>


                      <div class="col-md-3">
                        <label>Fecha de Respuesta</label>
                        <input type="date" class="form-control" id="fechamaxima_entrante" name="fechamaxima_entrante"
                        value="<?php echo $datos['fechamaxima_entrante']; ?>">
                      </div>


                      <div class="col-md-3">
                        <label>Responsable<span style="color:red">*</span></label>
                        <?php
                            echo $froms->Lista_Desplegable(
                              $empleados,
                              'nombre_empleado',
                              'id_empleado',
                              'responsable_entrante',
                              $datos['responsable_entrante'],
                              '',
                              ''
                            );
                        ?>
                      </div>

                      <div class="col-md-3">
                        <label>N&uacute;mero de Folios</label>
                        <input type="text" class="form-control" id="numerofolios_entrante" name="numerofolios_entrante"
                        value="<?php echo $datos['numerofolios_entrante']; ?>" onkeypress="return no_numeros(event)">
                      </div>

                    </div>

                    <br>
                    
            

                    <div class="row">

                      <div class="col-md-12">
                        <label>Descripci&oacute;n de los folios</label>
                        <textarea class="form-control" rows="3" id="descripcionfolios_entrante" 
                        name="descripcionfolios_entrante"><?php echo $datos['descripcionfolios_entrante']; ?></textarea>

                      </div>

                    </div>

                  </div>



                  <div style="padding: 20px;" class="tab-pane" id="tab_3">

                    <h3>Documentos soportes</h3>

                    <div id="vista_documentos_estrantes">
                      <?php
                      $id_entrante = $datos['id_entrante'];
                      require_once 'tabla_documentos.php';
                      echo $tabla_documentos;
                      ?>
                    </div>

                  </div>


                  <div style="padding: 20px;" class="tab-pane" id="tab_4">

                    <h3>Trazabilidad</h3>

                    <div id="vista_trazabilidad">

                      <?php
                          include("tabla_trazabilidad.php");
                      ?>

                    </div>

                  </div>



                </div>
              </div>
            </div>
          </div>
          <button onclick="cargar_entrantes_finalizados();" class="btn btn-danger">Cancelar</button>
          <button onclick="editar_entrante(); return false;" class="btn btn-success">Guardar</button>

        </div>

      </form>

    </div>
  </div>










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
              'carpeta_entrante_editar',
              '',
              '',
              ''
            );
            ?>
          </div>
        </div>
        <div class="modal-footer">
          <button onclick="mover_carpeta_editar();" type="button" class="btn btn-primary">Aceptar</button>
        </div>
      </div>
    </div>
  </div>




  <!-- Modal 2-->
  <div class="modal fade" id="exampleModal2_editar" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
              'responsable_entrante_editar',
              '',
              '',
              ''
            );
            ?>
          </div>
        </div>
        <div class="modal-footer">
          <button onclick="cambiar_responsable_editar();" type="button" class="btn btn-primary">Aceptar</button>
        </div>
      </div>
    </div>
  </div>



  <!-- Modal 3-->
  <div class="modal fade" id="exampleModal3_editar" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
            <label>Agregar Bitacora</label><br>
            <textarea id="bitacora_entrante_editar" name="bitacora_entrante_editar" cols="60" rows="4"></textarea>
          </div>
        </div>
        <div class="modal-footer">
          <button onclick="nueva_bitacora_editar();" type="button" class="btn btn-primary">Aceptar</button>
        </div>
      </div>
    </div>
  </div>

    <!-- Modal 4-->
  <div class="modal fade" id="exampleModal4_editar_entrante" tabindex="-1" role="dialog" aria-labelledby="exampleModal4_editar_entrante" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModal4_editar_entrante">Registrar Nuevo Documento</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>


      <div class="modal-body">

      <div class="text-center">
            <form>
          <div class="form-group">
          <label for="exampleInputFile">Subir archivo</label>
            <input type="file"  id="fileToUploadEntradas" onchange="upload_entradas();">
          <p class="help-block">Seleccion un archivo.</p>
          </div>
          <div class="upload-msg"></div><!--Para mostrar la respuesta del archivo llamado via ajax -->
        
        </form>
          </div>

      </div>
     
      

    </div>
  </div>
</div>







<!-- Modal 7-->
<div class="modal fade" id="exampleModal7_editar" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Cambiar Estado:</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <div class="col-md-12">
          <label>Seleccionar Estado: </label>
          <select class="form-control"  id='estado_entrante_editar' name='estado_entrante_editar'>
            <option value='1' >ACTIVO</option>
          </select>
        </div>
      </div>
      <div class="modal-footer">        
        <button onclick="cambiar_estado_editar();" type="button" class="btn btn-primary">Aceptar</button>
      </div>
    </div>
  </div>
</div>



<?php

require_once("vistas/radicados/entrantes/modales/tipos_radicado.php");
require_once("vistas/radicados/entrantes/modales/remitentes.php");
require_once("vistas/radicados/entrantes/modales/destinatarios.php");    

?>