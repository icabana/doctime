<script type="text/javascript">

    function nuevo_entrante() {

        abrirVentanaContenedor(
            'radicados', 'Entrantes', 'nuevo', '', ''
        );

    }

    function editar_entrante(id_entrante) {

        abrirVentanaContenedor(
            'radicados',
            'Entrantes',
            'editar',
            'id_entrante=' + id_entrante,
            ''
        );

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

    function eliminar_entrante() {

        var cont = 0;

        $("input[name=check_radicados]:checked").each(
            function(){
                cont++;
            }
        );

        if(cont == 0){
          mensaje_alertas("error", "Debe seleccionar algún registro");
        }else{
          mensaje_confirmar("¿Está seguro de eliminar los radicados seleccionados?", "eliminar_entrante2(); ");
        }

    }

    function eliminar_entrante2() {

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
            'eliminar',
            "radicados=" + radicados,
            ' mensaje_alertas("success", "Eliminados con Éxito", "center"); cargar_entrantes();'
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
              <h3 class="card-title">Radicados de Entrada</h3>

              <div class="card-tools">
                <div class="input-group input-group-sm">
                <button onclick="nuevo_entrante(); return false;" class="btn btn-success btn-sm">
                                Nuevo Radicado de Entrada
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
                  <button title="Eliminar Radicado" onclick="eliminar_entrante();" type="button" class="btn btn-default btn-sm"><i class="far fa-trash-alt"></i></button>
                  <button  data-toggle="modal" data-target="#exampleModal" type="button" class="btn btn-default btn-sm"><i class="fas fa-share"></i></button>
                  <button  data-toggle="modal" data-target="#exampleModal2" type="button" class="btn btn-default btn-sm"><i class="fas fa-user"></i></button>
                </div>
               

                <!-- /.btn-group -->
                <button onclick="cargar_entrantes();" type="button" class="btn btn-default btn-sm"><i class="fas fa-sync-alt"></i></button>
                
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
                            <th style='background-color:lavender; '>Asunto</th>
                            <th style='background-color:lavender; '></th>
                            <th style='background-color:lavender; '></th>                            
                            <th style='background-color:lavender; width:15px'></th>
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
                        <a href="read-mail.html">
                            <?php echo $entrante['numero_entrante'] ?>
                        </a>
                    </td>

                    <td class="mailbox-name">
                        <a href="read-mail.html">
                            <?php echo $entrante['nombre_tercero'] ?>
                        </a>
                    </td>
                    <td class="mailbox-subject">
                        <?php echo substr($entrante['asunto_entrante'], 0, 35)."..."; ?>
                    </td>
                    <td class="mailbox-attachment"><i class="fas fa-paperclip"></i></td>


                    <td class="mailbox-date"><?php echo $dia; ?></td>

                    <?php
                    echo "<td><a href='#'><i onclick='editar_entrante(" . $items['id_entrante'] . ");' 
                                    class='fas fa-edit'></i></a></td>";
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
        <h5 class="modal-title" id="exampleModalLabel">Enviar a Carpeta:</h5>
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
        <button type="button" class="btn btn-primary">Aceptar</button>
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
        <button type="button" class="btn btn-primary">Aceptar</button>
      </div>
    </div>
  </div>
</div>