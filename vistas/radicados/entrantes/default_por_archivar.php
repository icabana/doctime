<script type="text/javascript">

  function archivar_radicado0() {

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

    if (!validar_requeridos_archivar()) {
      return 0;
    }

   

archivar_radicado();

}

function archivar_radicado() {

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
'Entrantes',
'archivar_default',
'archivador='+$("#archivador_archivar").val()+'&fechainicio='+$("#fechainicio_archivar").val()+
'&fechafinal='+$("#fechafinal_archivar").val()+'&unidad='+$("#unidad_archivar").val()+
'&codigo='+$("#codigo_archivar").val()+'&folios='+$("#folios_archivar").val()+
'&anexos='+$("#anexos_archivar").val()+'&radicados='+radicados,
'archivar_radicado2(data)'
);

}

function archivar_radicado2(data) {

  mensaje_alertas("success", "Radicados Archivados Correctamente", "center");


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
              <h3 class="card-title">Radicados por Archivar</h3>

            
              </div>
              <!-- /.card-tools -->
            </div>
            <!-- /.card-header -->
            <div class="card-body p-0">
              <div class="mailbox-controls">
                <!-- Check all button -->
                <button type="button" class="btn btn-default btn-sm checkbox-toggle"><i onclick="seleccionar_check(); return false;" class="far fa-square"></i>
                </button>
                <button title="Cambiar Estado" data-toggle="modal" data-target="#exampleModal7" type="button" class="btn btn-default btn-sm"><i class="fas fa-tags"></i></button>
                <!-- /.btn-group -->
                <button title="Actualizar Lista de Radicados" onclick="cargar_archivar();" type="button" class="btn btn-default btn-sm"><i class="fas fa-sync-alt"></i></button>
                
                <!-- /.float-right -->
              </div>


              <br>
              <div class="table-responsive mailbox-messages">
                <table id="tabla_entrantes" class="table table-hover table-striped">
                <thead>
                        <tr>
                            <th style='background-color:lavender'></th>
                            <th style='background-color:lavender'>No. Radicado</th>
                            <th style='background-color:lavender; '>Remitente</th>
                            <th style='background-color:lavender; '>Destinatario</th>
                            <th style='background-color:lavender; '>Asunto</th>
                            <th style='background-color:lavender; width:20px '></th>
                            <th style='background-color:lavender; width:20px '></th>                            
                        </tr>
                    </thead>
                <tbody>

                  <?php

                    foreach($entrantes as $entrante){


                        $id_check = "check".$entrante['id_entrante'];                        
                  
                        $fecha_actual = date("Y-m-d");
                        $dias = $this->fechas->diasEntreFechas($fecha_actual, $entrante['fecharadicado_entrante']);

                        if($dias == 0){
                           $dia = "Hoy";
                        }
                        if($dias == 1){
                          $dia = "Ayer";
                        }
                        if($dias > 1){
                          $dia = "Hace ".$dias." días";
                        }

                  ?>
                  <tr>
                    <td>
                      <div class="icheck-primary">
                        <input class="check" name="check_radicados" type="checkbox" value="<?php echo $entrante['id_entrante']; ?>" id="check<?php echo $id_check; ?>">
                        <label for="check<?php echo $id_check; ?>"></label>
                      </div>
                    </td>
                    
                    <td class="mailbox-star">
                        
                            <?php echo $entrante['numero_entrante'] ?>
                        
                    </td>

                    <td class="mailbox-name">
                        
                            <?php echo $entrante['nombre_tercero']; ?>
                        
                    </td>
                    <td class="mailbox-name">
                        
                            <?php echo $entrante['nombres_empleado']." ".$entrante['apellidos_empleado']; ?>
                        
                    </td>

                    <td class="mailbox-subject">
                        <?php echo substr($entrante['asunto_entrante'], 0, 35)."..."; ?>
                    </td>

                    <?php
                        $adjuntos = 0;
                        if($entrante['numerofolios_entrante'] != "" && $entrante['numerofolios_entrante'] != 0){
                            $adjuntos = $entrante['numerofolios_entrante'];
                        }
                    ?>    

                    <td class="mailbox-attachment"><?php echo $adjuntos." ";  ?><i class="fas fa-paperclip"></i></td>


                    <td class="mailbox-date"><?php echo $dia; ?></td>

                   
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







<!-- Modal 7-->
<div class="modal fade" id="exampleModal7" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Archivar Radicado</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">

        <div class="row">
          <div class="col-md-12">
            <label>Seleccionar Archivo<span style="color:red">*</span></label>
            <?php
              echo $froms->Lista_Desplegable(
                $archivadores,
                'nombre_archivador',
                'id_archivador',
                'archivador_archivar',
                '',
                '',
                ''
              );
            ?>
          </div>        
        </div>

<br>

        <div class="row">
        <div class="col-md-6">
          <label>Fecha Inicio<span style="color:red">*</span></label>
          <input type="date" class="form-control requerido_archivar" id="fechainicio_archivar" name="fechainicio_archivar">
        </div>

        <div class="col-md-6">
          <label>Fecha Final<span style="color:red">*</span></label>
          <input type="date" class="form-control requerido_archivar" id="fechafinal_archivar" name="fechafinal_archivar">
        </div>
        </div>
<br>
        <div class="row">
        <div class="col-md-6">
          <label>Unidad de Conservación<span style="color:red">*</span></label>
          <?php
            echo $froms->Lista_Desplegable(
              $unidades,
              'nombre_unidad',
              'id_unidad',
              'unidad_archivar',
              '',
              '',
              ''
            );
          ?>
        </div>
        <div class="col-md-6">
          <label>C&oacute;digo Unidad<span style="color:red">*</span></label>
          <input type="text" class="form-control requerido_archivar" id="codigo_archivar" name="codigo_archivar">
        </div>

      

        </div>
        <br>
        <div class="row">
        <div class="col-md-6">
          <label>Folios<span style="color:red">*</span></label>
          <input type="text" onkeypress="return no_numeros(event)" class="form-control requerido_archivar" id="folios_archivar" name="folios_archivar">
        </div>

        <div class="col-md-6">
          <label>Anexos<span style="color:red">*</span></label>
          <input type="text" onkeypress="return no_numeros(event)" class="form-control requerido_archivar" id="anexos_archivar" name="anexos_archivar">
        </div>
        </div>




      </div>

      <div class="modal-footer">        
        <button onclick="archivar_radicado0();" type="button" class="btn btn-primary">Aceptar</button>
      </div>
    </div>
  </div>
</div>