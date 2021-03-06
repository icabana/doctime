<script type="text/javascript">

    function nuevo_saliente() {

        abrirVentanaContenedor(
            'radicados', 'Salientes', 'nuevo', '', ''
        );

    }

    function editar_saliente(id_saliente) {

        abrirVentanaContenedor(
            'radicados',
            'Salientes',
            'editar',
            'id_saliente=' + id_saliente,
            ""
        );

    }

    
    function nuevo_radicado_entrante(saliente_entrante) {

      abrirVentanaContenedor(
          'radicados', 'Entrantes', 'nuevo_desde_salida', 'saliente_entrante='+saliente_entrante, ''
      );

      }

      
    function ver_radicado_entrante(id_entrante) {

        abrirVentanaContenedor(
            'radicados',
            'Entrantes',
            'editar',
            'id_entrante=' + id_entrante,
            ""
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

        mover_carpeta();

    }


    function mover_carpeta() {

      $('#exampleModal').modal('hide');

      var radicados = "";

      $("input[name=check_radicados]:checked").each(
          function(){
              radicados += $(this).val()+",";
          }
      );

      radicados += '0';

      ejecutarAccion(
        'radicados',
        'Salientes',
        'mover_default',
        'carpeta_saliente='+$("#carpeta_saliente").val()+'&radicados='+radicados,
        'mover_carpeta2(data)'
      );

    }

    function mover_carpeta2(data) {

        if (data == 1) {
          mensaje_alertas("success", "Cambio de Carpeta Exitoso", "center");
          cargar_salientes();
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

        cambiar_responsable();

    }

    function cambiar_responsable() {

      $('#exampleModal2').modal('hide');
        
      var radicados = "";

      $("input[name=check_radicados]:checked").each(
          function(){
              radicados += $(this).val()+",";
          }
      );

      radicados += '0';

      ejecutarAccion(
        'radicados',
        'Salientes',
        'cambiar_default',
        'responsable_saliente='+$("#responsable_saliente").val()+'&radicados='+radicados,
        'cambiar_responsable2(data)'
      );

    }

    function cambiar_responsable2(data) {

        
          mensaje_alertas("success", "Ajuste Exitoso", "center");
       

    } 



  function cambiar_estado0() {

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

cambiar_estado();

}

function cambiar_estado() {

$('#exampleModal7').modal('hide');

var radicados = "";

$("input[name=check_radicados]:checked").each(
  function(){
      radicados += $(this).val()+",";
  }
);

radicados += '0';

ejecutarAccion(
'radicados',
'Salientes',
'cambiarestado_default',
'estado_saliente='+$("#estado_saliente").val()+'&radicados='+radicados,
'cambiar_estado2(data)'
);

}

function cambiar_estado2(data) {

  cargar_salientes();
  mensaje_alertas("success", "Ajuste Exitoso", "center");


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

        nueva_bitacora();

    }

    function nueva_bitacora() {

      if($("#bitacora_saliente").val() == ""){
        mensaje_alertas("error", "Debe escribir alguna bitacora", "center");
        return 0;
      }
       
      $('#exampleModal3').modal('hide');

      var radicados = "";

      $("input[name=check_radicados]:checked").each(
          function(){
              radicados += $(this).val()+",";
          }
      );

      radicados += '0';

        ejecutarAccion(
          'radicados',
          'Salientes',
          'nueva_default',
          'bitacora_saliente='+$("#bitacora_saliente").val()+'&radicados='+radicados,
          'nueva_bitacora2(data)'
        );

    }

    function nueva_bitacora2(data) {

       mensaje_alertas("success", "Bitacora registrada Exitosamente", "center");       

    } 



    function seleccionar_check() {
   
      var cont = 0;

        $("input[name=check_radicados]:checked").each(
            function(){
                cont++;
            }
        );

        if(cont == 0){
          $("input:checkbox").prop('checked', true)
        }else{
          $("input:checkbox").prop('checked', false)
        }
       

    }

    function eliminar_saliente() {

        var cont = 0;

        $("input[name=check_radicados]:checked").each(
            function(){
                cont++;
            }
        );

        if(cont == 0){
          mensaje_alertas("error", "Debe seleccionar algún registro");
        }else{
          mensaje_confirmar("¿Está seguro de eliminar los radicados seleccionados?", "eliminar_saliente2(); ");
        }

    }

    function eliminar_saliente2() {

        var radicados = "";

        $("input[name=check_radicados]:checked").each(
            function(){
                radicados += $(this).val()+",";
            }
        );

        radicados += '0';

        ejecutarAccion(
            'radicados',
            'Salientes',
            'eliminar',
            "radicados=" + radicados,
            ' mensaje_alertas("success", "Eliminados con Éxito", "center"); cargar_salientes();'
        );

    }


    
    function enviar_bandeja_saliente() {

      var cont = 0;

      $("input[name=check_radicados]:checked").each(
          function(){
              cont++;
          }
      );

      if(cont == 0){
        mensaje_alertas("error", "Debe seleccionar algún registro");
      }else{
        mensaje_confirmar("¿Está seguro de enviar a la Bandeja de Entrada?", "enviar_bandeja_saliente2(); ");
      }

  }

function enviar_bandeja_saliente2() {

    var radicados = "";

    $("input[name=check_radicados]:checked").each(
        function(){
            radicados += $(this).val()+",";
        }
    );

    radicados += '0';

    ejecutarAccion(
        'radicados',
        'Salientes',
        'enviarBandejaSaliente',
        "radicados=" + radicados,
        ' mensaje_alertas("success", "Enviado a la bandeja de entrada", "center"); cargar_salientes();'
    );

}

</script>

<?php
  $froms = new Formularios();
?>

<div class="row">


    <div style="padding:25px" class="box-body table-responsive no-padding">

        <div class="card">
          
        <div class="col-md-12">
          <div class="card card-primary card-outline">
            <div class="card-header">
              <h3 class="card-title">Radicados de Salida</h3>

              <div class="card-tools">
                <div class="input-group input-group-sm">
                <button onclick="nuevo_saliente(); return false;" class="btn btn-success btn-sm">
                                Nuevo Radicado de Salida
                    </button>
                </div>
              </div>
              </div>
              <!-- /.card-tools -->
            </div>
            <!-- /.card-header -->
            <div class="card-body p-0">
              <div class="mailbox-controls">
                <!-- Check all button -->
                <button type="button" class="btn btn-default btn-sm checkbox-toggle"><i onclick="seleccionar_check(); return false;" class="far fa-square"></i>
                </button>
                <div class="btn-group ">
                  <button title="Eliminar Radicado" onclick="eliminar_saliente();" type="button" class="btn btn-default btn-sm"><i class="far fa-trash-alt"></i></button>
                   <button title="Agregar Bitacora" data-toggle="modal" data-target="#exampleModal3" type="button" class="btn btn-default btn-sm"><i class="fas fa-plus"></i></button>
                  </div>
               
                <!-- /.btn-group -->
                <button title="Actualizar Lista de Radicados" onclick="cargar_salientes();" type="button" class="btn btn-default btn-sm"><i class="fas fa-sync-alt"></i></button>
                
                <!-- /.float-right -->
              </div>


              <br>
              <div class="table-responsive mailbox-messages">
                <table id="tabla_salientes" style="width:100%; font-size:12px" class="table table-hover table-striped">
                <thead>
                        <tr>
                            <th style='background-color:lavender'></th>
                            <th style='background-color:lavender'>No. Radicado</th>
                            <th style='background-color:lavender; '>Remitente</th>
                            <th style='background-color:lavender; '>Destinatario</th>
                            <th style='background-color:lavender; '>Asunto</th>
                            <th style='background-color:lavender; '></th>                            
                            <th style='background-color:lavender; width:15px'></th>
                            <th style='background-color:lavender; width:15px'></th>
                        </tr>
                    </thead>
                <tbody>

                  <?php

                    foreach($salientes as $saliente){


                        $id_check = "check".$saliente['id_saliente'];                        
                  
                        $fecha_actual = date("Y-m-d");
                        $dias = $this->fechas->diasEntreFechas($fecha_actual, $saliente['fecharadicado_saliente']);

                        if($dias == 0){
                           $dia = "Hoy";
                        }
                        if($dias == 1){
                          $dia = "Ayer";
                        }
                        if($dias > 1){
                          $dia = "Hace ".number_format($dias, 0, ',', '.')." días";
                        }

                  ?>
                  <tr>
                    <td>
                      <div class="icheck-primary">
                        <input class="check" name="check_radicados" type="checkbox" value="<?php echo $saliente['id_saliente']; ?>" id="check<?php echo $id_check; ?>">
                        <label for="check<?php echo $id_check; ?>"></label>
                      </div>
                    </td>
                    
                    <td class="mailbox-star">
                        
                            <?php echo $saliente['numero_saliente'] ?>
                        
                    </td>

                    <td class="mailbox-name">
                        
                    <?php echo $saliente['nombres_empleado']." ".$saliente['apellidos_empleado']; ?>
                        
                    </td>
                    <td class="mailbox-name">
                        
                    <?php echo $saliente['nombre_tercero']; ?>
                            
                        
                    </td>

                    <td class="mailbox-subject">
                        <?php echo substr($saliente['asunto_saliente'], 0, 75)."..."; ?>
                    </td>

                  

                    <td class="mailbox-date"><?php echo $dia; ?></td>

                    <?php
                        echo "<td><a class='btn btn-sm btn-success' style='padding:5px 11px 5px 11px' href='#' onclick='editar_saliente(" . $saliente['id_saliente'] . ");' ><i
                                    class='fas fa-edit'></i></a></td>";
                        if($saliente['entrante_saliente'] == '' || $saliente['entrante_saliente'] == '0'){
                            echo "<td><a class='btn btn-sm btn-success' style='padding:5px 11px 5px 11px' href='#' title='Crear Radicado Entrante' onclick='nuevo_radicado_entrante(" . $saliente['id_saliente'] . ");' ><i
                                                class='fas fa-plus-square'></i></a></td>";
                        }else{
                          echo "<td><a class='btn btn-sm btn-success' style='padding:5px 11px 5px 11px' href='#' title='Ver Radicado Entrante' onclick='ver_radicado_entrante(" . $saliente['entrante_saliente'] . ");' ><i
                          class='fas fa-arrow-left'></i></a></td>";
                        }
                      ?>

                  </tr>
                  <?php
                    }
                  ?>
                  
                  </tbody>
                </table>
                <!-- /.table -->
              </div>
              <!-- /.mail-box-messages -->
            </div>
            <!-- /.card-body -->
           
          </div>
          <!-- /.card -->
        </div>
        <!-- /.col -->
        </div>
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
              'carpeta_saliente',
              '',
              '',
              ''
            );
          ?>
        </div>
      </div>
      <div class="modal-footer">        
        <button onclick="mover_carpeta0();" type="button" class="btn btn-primary">Aceptar</button>
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
              'responsable_saliente',
              '',
              '',
              ''
            );
          ?>
        </div>
      </div>
      <div class="modal-footer">        
        <button onclick="cambiar_responsable0();" type="button" class="btn btn-primary">Aceptar</button>
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
          <textarea class="form-control" id="bitacora_saliente" cols="32"  name="bitacora_saliente" rows="4"></textarea>
        </div>
      </div>
      <div class="modal-footer">        
        <button onclick="nueva_bitacora0();" type="button" class="btn btn-primary">Aceptar</button>
      </div>
      
    </div>
  </div>
</div>



<!-- Modal 7-->
<div class="modal fade" id="exampleModal7" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
              'estado_saliente',
              '',
              '',
              ''
            );
          ?>
        </div>
      </div>
      <div class="modal-footer">        
        <button onclick="cambiar_estado0();" type="button" class="btn btn-primary">Aceptar</button>
      </div>
    </div>
  </div>
</div>