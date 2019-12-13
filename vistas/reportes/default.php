<script type="text/javascript">

function generar_reporte_entrantes(){
  
    ejecutarAccion(
      'reportes', 
      'Reportes', 
      'generarReporteEntrantes',
      "estado="+$("#estado_reporte").val()+"&fecha1="+$("#fecha1_reporte").val()+"&fecha2="+$("#fecha2_reporte").val(), 
      "cargarVisorPDF(data); "
    );
     
}
  
function generar_reporte_entrantes_excel(){
  
    ejecutarAccion(
      'reportes', 
      'Reportes', 
      'generarReporteEntrantesExcel', 
      "estado="+$("#estado_reporte").val()+"&fecha1="+$("#fecha1_reporte").val()+"&fecha2="+$("#fecha2_reporte").val(), 
      "$('#salida_reporte_excel').html(data);"         
    );
     
}
  
function cargarReporte(){
 
    ejecutarAccion(
      'reportes',
      'Reportes',
      'cargarReporte',
      "estado="+$("#estado_reporte").val()+"&fecha1="+$("#fecha1_reporte").val()+"&fecha2="+$("#fecha2_reporte").val(), 
      "$('#tabla_entrantes_reportes').html(data);"    
    );
     
}
  

</script>   


<div class="col-md-12">
          <!-- Widget: user widget style 1 -->
          <div class="box box-widget widget-user">
            <!-- Add the bg color to the header using any of the bg-* classes -->
            <div class="widget-user-header bg-aqua-active text-center">
                <br>
                <h3><b>REPORTE DE RADICADOS DE ENTRADA</b></h3>
            </div>
            <div class="box-footer">
              <div class="row">
                  
                
                  
                  
                
                <div class="col-sm-3 border-right">
                  <div class="description-block">
                      <h5 class="description-header">Seleccionar Estado</h5>
                    <span class="description-text">
                        <select onchange="cargarReporte(); return false;" class="form-control" id="estado_reporte" name="estado_reporte">
                            <option value="TODOS">TODOS</option>
                            <option value="1">ACTIVO</option>
                            <option value="2">FINALIZADO</option>
                            <option value="3">ARCHIVADO</option>
                        </select>
                    </span>
                  </div>
                  <!-- /.description-block -->
                </div>
                <!-- /.col -->
                
                
                
                  <div class="col-sm-3 border-right">
                  <div class="description-block">
                    <h5 class="description-header">Por Rango de Fechas</h5>
                    <span class="description-text">
                        <input onchange="cargarReporte(); return false;" type="date" class="form-control" id="fecha1_reporte" name="fecha1_reporte"> - 
                        <input onchange="cargarReporte(); return false;" type="date" class="form-control" id="fecha2_reporte" name="fecha2_reporte">
                    </span>
                  </div>
                  <!-- /.description-block -->
                </div>
                  
                   
                <div class="col-md-3">
                                   
                      <button onclick="generar_reporte_entrantes(); return false;" class="btn btn-primary pull-right" style="margin-right: 5px;"><i class="fa fa-download"></i> Generate PDF</button>
                      
                  <!-- /.description-block -->
                </div>
                <div class="col-md-3">
                
                      <button onclick="generar_reporte_entrantes_excel();" class="btn btn-success pull-right" style="margin-right: 5px;"><i class="fa fa-download"></i> Generate Excel</button>
                   
                     <div id="salida_reporte_excel"></div>
                  <!-- /.description-block -->
                </div>
  
                
              </div>
              <!-- /.row -->
            </div>
          </div>
          <!-- /.widget-user -->
        </div> 


<div class="table-responsive mailbox-messages" style="padding: 16px">
<div  class="row" style="padding: 16px" id="tabla_entrantes_reportes">
               
 
                <?php
                
                    include 'vistas/reportes/tabla_entrantes.php';
                
                ?>
                  </div>
         </div>





                    
                    
  