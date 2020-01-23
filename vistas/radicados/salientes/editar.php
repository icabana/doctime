<script type="text/javascript">
  function editar_saliente() {

    if (!validar_requeridos()) {
      return 0;
    }

    var datos = $('#formSalientes').serialize();

    ejecutarAccion(
      'radicados',
      'Salientes',
      'guardar',
      datos,
      'editar_saliente2(data)'
    );

  }

  function editar_saliente2(data) {

    if (data == 1) {
      mensaje_alertas("success", "Saliente Registrado Exitosamente", "center");
      cargar_salientes();
    } else {
      mensaje_alertas("error", "El Nick ya se encuentra registrado", "center");
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

      $("#remitente_saliente").val(id_remitente);
      $("#remitente_saliente2").val(nombres_remitente + ' ' + apellidos_remitente);

      $('#vista_remitentes').hide();

  }


  function abrir_upload_archivo(id_soporte, documento_soporte) {

    abrirVentanaContenedor(
      'radicados',
      'Salientes',
      'abrirDocumentosContrato2',
      'id_soporte=' + id_soporte + '&documento_soporte=' + documento_soporte + '&id_contrato=' + $("#id_contrato").val(),
      "SubirArchivos('fileUpload_nuevo');"
    );

  }



  function eliminar_archivo(id_soporte, nombre_soporte, archivo) {

    var opcion = confirm("Está seguro de eliminar este archivo?");
    if (opcion != true) return 0;

    ejecutarAccion(
      'radicados',
      'Salientes',
      'eliminarDocumento',
      'id_radicado=' + $("#id_radicado").val() + '&nombre_soporte=' + nombre_soporte + '&archivo=' + archivo + '&id_soporte=' + id_soporte,
      "$('#vista_soportes_solicitud').html(data);  mensaje_alertas('success', 'Archivo Eliminado correctamente', 'center'); "

    );

  }



  function mover_carpeta_editar() {

    $('#exampleModal').modal('hide');

    ejecutarAccion(
      'radicados',
      'Salientes',
      'mover',
      'carpeta_saliente=' + $("#carpeta_saliente_editar").val() + '&id_saliente=' + $("#id_saliente").val(),
      'mover_carpeta_editar2(data)'
    );

  }

  function modificar_nombre_archivo(documento_soporte) {

      $('#documento_soporte').val(documento_soporte);

  }

  function actualizar_upload_archivo() {

    $('form#form_upload').submit();

    $('#exampleModal5_editar').modal('hide');
     $('.modal-backdrop fade show').remove();
   
     actualizar_vista_soportes_editar();

  }

  function actualizar_vista_soportes_editar() {


    ejecutarAccion(
        'radicados',
        'Salientes',
        'actualizarUpload',
        'id_saliente='+$("#id_saliente").val(),
        "$('#vista_soportes_editar').html(data); "

    );
   
    

  }

  

  function mover_carpeta_editar2(data) {

    if (data == 1) {
      mensaje_alertas("success", "Cambio de Carpeta Exitoso", "center");
      cargar_salientes();
    } else {
      mensaje_alertas("error", "Error al cambiar de carpeta", "center");
    }

  }


  function nuevo_documento_editar() {

    $('#exampleModal4_editar').modal('hide');

      ejecutarAccion(
          'radicados',
          'Salientes',
          'nuevoDocumento',
          'documento=' + $("#documento_editar").val() + '&id_saliente=' + $("#id_saliente").val(),
          'nuevo_documento2(data)'
      );

    }

    function nuevo_documento2(data) {

      if (data == 1) {
        actualizar_vista_soportes_editar();
        //mensaje_alertas("success", "Nuevo Documento registrado", "center");
        //cargar_salientes();
      } else {
          mensaje_alertas("error", "Error al crear nuevo documento", "center");
      }

    }



function cambiar_estado_editar() {

    $('#exampleModal7_editar').modal('hide');


    ejecutarAccion(
      'radicados',
      'Salientes',
      'cambiarestado',
      'estado_saliente='+$("#estado_saliente_editar").val()+'&radicados='+$("#id_saliente").val(),
      'cambiar_estado2_editar(data)'
    );

}

function cambiar_estado2_editar(data) {

    cargar_salientes();
    mensaje_alertas("success", "Ajuste Exitoso", "center");


} 





  function cambiar_responsable_editar() {

    $('#exampleModal2_editar').modal('hide');

    ejecutarAccion(
      'radicados',
      'Salientes',
      'cambiar',
      'responsable_saliente=' + $("#responsable_saliente_editar").val() + '&id_saliente=' + $("#id_saliente").val(),
      'cambiar_responsable_editar2(data)'
    );

  }

  function cambiar_responsable_editar2(data) {
    cargar_salientes();
    mensaje_alertas("success", "Ajuste Exitoso", "center");

  }



  function nueva_bitacora_editar() {

    if ($("#bitacora_saliente_editar").val() == "") {
      mensaje_alertas("error", "Debe ingresar una bitacora", "center");
      return 0;
    }

    $('#exampleModal3_editar').modal('hide');

    ejecutarAccion(
      'radicados',
      'Salientes',
      'nueva',
      'bitacora_saliente_editar=' + $("#bitacora_saliente_editar").val() + '&id_saliente=' + $("#id_saliente").val(),
      'nueva_bitacora_editar2(data)'
    );

  }


  function nueva_bitacora_editar2(data) {
    actualizar_vista_trazabilidad();
      mensaje_alertas("success", "Cambio de Carpeta Exitoso", "center");
   
  }


  function actualizar_vista_trazabilidad() {

    ejecutarAccion(
        'radicados',
        'Salientes',
        'actualizarTrazabilidad',
        'id_saliente='+$("#id_saliente").val(),
        "$('#vista_trazabilidad_salientes').html(data); "

    );

}



    
  function enviar_bandeja_saliente_editar() {


  mensaje_confirmar("¿Está seguro de enviar a la Bandeja de Entrada?", "enviar_bandeja_saliente_editar2(); ");


}

function enviar_bandeja_saliente_editar2() {


  ejecutarAccion(
    'radicados',
    'Salientes',
    'enviarBandejaSaliente',
    "radicados=" + $("#id_saliente").val(),
    ' mensaje_alertas("success", "Enviado a la bandeja de entrada", "center"); cargar_salientes();'
  );

}

  function eliminar_saliente_editar() {

mensaje_confirmar("¿Está seguro de eliminar el radicado?", "eliminar_saliente_editar2(); ");

}

function eliminar_saliente_editar2() {

ejecutarAccion(
    'radicados',
    'Salientes',
    'eliminar',
    "radicados=" + $("#id_saliente").val(),
    ' mensaje_alertas("success", "Carpeta Eliminada con Éxito", "center"); cargar_salientes();'
);

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





  function eliminar_archivo_saliente(archivo_saliente) {

      var opcion = confirm("¿Está seguro de eliminar este archivo?");
      if (opcion != true) return 0;

      ejecutarAccion(
        'radicados',
        'Salientes',
        'eliminarArchivo',
        'archivo=' + archivo_saliente+'&id_saliente=' + $("#id_saliente").val(),
        "$('#vista_documentos_salientes').html(data);  mensaje_alertas('success', 'Archivo Eliminado correctamente', 'center'); "

      );

    }

    function actualizar_documentos_saliente() {

        ejecutarAccion(
          'radicados',
          'Salientes',
          'actualizarDocumentos',
          'id_saliente=' + $("#id_saliente").val(),
          "$('#vista_documentos_salientes').html(data);  "

        ); 

    }

  function upload_entradas(){//Funcion encargada de enviar el archivo via AJAX

    $(".upload-msg").text('Cargando...');
				var inputFileImage = document.getElementById("fileToUploadSalidas");
				var file = inputFileImage.files[0];
				var data = new FormData();
				data.append('fileToUploadSalidas',file);
				
			  data.append('id_saliente', $("#id_saliente").val());
			  data.append('numero_saliente', $("#numero_saliente2").val());
				
        console.log(data);
							
				$.ajax({
					url: "libs/uploads/upload_salientes.php",        // Url to which the request is send
					type: "POST",             // Type of request to be send, called as method
					data: data, 			  // Data sent to server, a set of key/value pairs (i.e. form fields and values)
					contentType: false,       // The content type used when sending data to the server.
					cache: false,             // To unable request pages to be cached
					processData:false,        // To send DOMDocument or non processed data file it is set to false
					success: function(data)   // A function to be called if request succeeds
					{
						$(".upload-msg").html(data);
            actualizar_documentos_saliente();
            $('#exampleModal4_editar').modal('hide');
            $('#fileToUploadSalidas').val('');
						window.setTimeout(function() {
						$(".alert-dismissible").fadeTo(500, 0).slideUp(500, function(){
						$(this).remove();
						});	}, 5000);
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
        <h3 class="card-title">Editar Radicado de Salida</h3>
      </div>

      <div class="mailbox-controls">
        <!-- Check all button -->
      
        <div class="btn-group ">
          <button title="Eliminar Radicado" onclick="eliminar_saliente_editar();" type="button" class="btn btn-default btn-sm"><i class="far fa-trash-alt"></i></button>
              <button title="Agregar Bitacora" data-toggle="modal" data-target="#exampleModal3_editar" type="button" class="btn btn-default btn-sm"><i class="fas fa-plus"></i></button>
         </div>
                

        <!-- /.float-right -->
      </div>

      <form autocomplete="on" id="formSalientes" method="post">

      <input type="hidden" id="id_saliente" name="id_saliente" value="<?php echo $datos['id_saliente']; ?>">

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
                        <input readonly type="text" class="form-control radicado" id="numero_saliente" name="numero_saliente" 
                        value="<?php echo $datos['numero_saliente']; ?>">

                      </div>

                      <div class="col-md-3">
                        <label>Fecha Radicado<span style="color:red">*</span></label>
                        <input type="date" class="form-control radicado" id="fecharadicado_saliente" 
                        name="fecharadicado_saliente" value="<?php echo $datos['fecharadicado_saliente']; ?>">
                      </div>
                    

                      <div class="col-md-4">
                        <label>Tipo de Radicado<span style="color:red">*</span></label>
                        <a href="#" data-toggle="modal" data-target="#modal_tipo_radicado_saliente">
                          Crear Nuevo
                        </a>
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
                        <a href="#" data-toggle="modal" data-target="#modal_remitentes_saliente">
                          Crear Nuevo
                        </a>
                        <input type="hidden" class="requerido" id="remitente_saliente" name="remitente_saliente" 
                        value="<?php echo $datos['remitente_saliente']; ?>">
                        <input type="text"  class="form-control requerido" id="remitente_saliente2" 
                        name="remitente_saliente2" 
                        value="<?php echo $datos['nombres_empleado'] . " " . $datos['apellidos_empleado']; ?>" 
                        onkeyup="buscar_remitente(this.value); return false;">
                        <div id="vista_remitentes"></div>
                      </div>


                      <div class="col-md-4">
                        <label>Destinatario<span style="color:red">*</span></label>
                        <a href="#" data-toggle="modal" data-target="#modal_destinatarios_saliente">
                          Crear Nuevo
                        </a>
                        <input type="hidden" class="requerido" id="destinatario_saliente" name="destinatario_saliente" 
                        value="<?php echo $datos['destinatario_saliente']; ?>">
                        <input type="text"  class="form-control requerido" id="destinatario_saliente2" 
                        name="destinario_saliente2" 
                        value="<?php echo $datos['nombre_tercero']; ?>" 
                        onkeyup="buscar_destinatario(this.value); return false;">
                        <div id="vista_destinatarios"></div>
                      </div>

                    </div>

                    <br>

                    <div class="row">

                      <div class="col-md-12">
                        <label>Asunto<span style="color:red">*</span></label>
                        <textarea class="form-control radicado" rows="3" id="asunto_saliente" 
                        name="asunto_saliente"><?php echo $datos['asunto_saliente']; ?></textarea
                        value="">
                      </div>

                    </div>


                  </div>

                  <div style="padding: 20px;" class="tab-pane" id="tab_2">

                    <div class="row">

                  


                      <div class="col-md-3">
                        <label>N&uacute;mero de Folios</label>
                        <input type="text" class="form-control" id="numerofolios_saliente" name="numerofolios_saliente"
                        value="<?php echo $datos['numerofolios_saliente']; ?>" onkeypress="return no_numeros(event)">
                      </div>

                      
                   


                    





                    </div>

                    <br>

                    <div class="row">

                      <div class="col-md-12">
                        <label>Descripci&oacute;n de los folios</label>
                        <textarea class="form-control" rows="3" id="descripcionfolios_saliente" 
                        name="descripcionfolios_saliente"><?php echo $datos['descripcionfolios_saliente']; ?></textarea>

                      </div>

                    </div>

                  </div>



                  <div style="padding: 20px;" class="tab-pane" id="tab_3">

                    <h3>Documentos soportes</h3>

                    <div id="vista_documentos_salientes">
                      <?php
                      $id_saliente = $datos['id_saliente'];
                      require_once 'tabla_documentos.php';
                      echo $tabla_documentos;
                      ?>
                    </div>

                  </div>


                  <div style="padding: 20px;" class="tab-pane" id="tab_4">

                    <h3>Trazabilidad</h3>

                    <div id="vista_trazabilidad_salientes">

                    <?php
                          include("tabla_trazabilidad.php");
                      ?>

                    </div>

                  </div>



                </div>
              </div>
            </div>
          </div>
          <button onclick="cargar_salientes();" class="btn btn-danger">Cancelar</button>
          <button onclick="editar_saliente(); return false;" class="btn btn-success">Guardar</button>

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
              'carpeta_saliente_editar',
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
              'responsable_saliente_editar',
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
            <textarea id="bitacora_saliente_editar" name="bitacora_saliente_editar" cols="55" rows="4"></textarea>
          </div>
        </div>
        <div class="modal-footer">
          <button onclick="nueva_bitacora_editar();" type="button" class="btn btn-primary">Aceptar</button>
        </div>
      </div>
    </div>
  </div>

    <!-- Modal 4-->
  <div class="modal fade" id="exampleModal4_editar" tabindex="-1" role="dialog" aria-labelledby="exampleModal4_editar" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModal4_editar">Registrar Nueva Documento</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">


        

      <div class="text-center">
            <form>
          <div class="form-group">
          <label for="exampleInputFile">Subir archivo</label>
            <input type="file"  id="fileToUploadSalidas" onchange="upload_salidas();">
          <p class="help-block">Seleccion un archivo.</p>
          </div>
          <div class="upload-msg"></div><!--Para mostrar la respuesta del archivo llamado via ajax -->
        
        </form>
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
          <?php
            echo $froms->Lista_Desplegable(
              $estadosradicado,
              'nombre_estado',
              'id_estado',
              'estado_saliente_editar',
              '',
              '',
              ''
            );
          ?>
        </div>
      </div>
      <div class="modal-footer">        
        <button onclick="cambiar_estado_editar();" type="button" class="btn btn-primary">Aceptar</button>
      </div>
    </div>
  </div>
</div>


<?php

require_once("vistas/radicados/salientes/modales/tipos_radicado.php");
require_once("vistas/radicados/salientes/modales/remitentes.php");
require_once("vistas/radicados/salientes/modales/destinatarios.php");    


?>