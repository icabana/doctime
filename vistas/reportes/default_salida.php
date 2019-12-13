<script type="text/javascript">

function generar_reporte_salientes(){
  
    ejecutarAccion(
      'reportes', 
      'Reportes', 
      'generarReporteSalientes',
      "fecha1="+$("#fecha1_reporte").val()+"&fecha2="+$("#fecha2_reporte").val(), 
      "cargarVisorPDF(data); "
    );
     
}
  
function generar_reporte_salientes_excel(){
  
    ejecutarAccion(
      'reportes', 
      'Reportes', 
      'generarReporteSalientesExcel', 
      "estado="+$("#estado_reporte").val()+"&fecha1="+$("#fecha1_reporte").val()+"&fecha2="+$("#fecha2_reporte").val(), 
      "$('#salida_reporte_excel').html(data);"         
    );
     
}
  
function cargarReporteSaliente(){
 
    ejecutarAccion(
      'reportes',
      'Reportes',
      'cargarReporteSaliente',
      "fecha1="+$("#fecha1_reporte_saliente").val()+"&fecha2="+$("#fecha2_reporte_saliente").val(), 
      "$('#tabla_salientes_reportes').html(data);"    
    );
     
}
  

</script>   


<div class="col-md-12">
          <!-- Widget: user widget style 1 -->
          <div class="box box-widget widget-user">
            <!-- Add the bg color to the header using any of the bg-* classes -->
            <div class="widget-user-header bg-aqua-active text-center">
                <br>
                <h3><b>REPORTE DE RADICADOS DE SALIDA</b></h3>
            </div>
            <div class="box-footer">
              <div class="row">
                  
                               
                
                  <div class="col-sm-3 border-right">
                  <div class="description-block">
                    <h5 class="description-header">Por Rango de Fechas</h5>
                    <span class="description-text">
                        <input onchange="cargarReporteSaliente(); return false;" type="date" class="form-control" id="fecha1_reporte_saliente" name="fecha1_reporte_saliente"> - 
                        <input onchange="cargarReporteSaliente(); return false;" type="date" class="form-control" id="fecha2_reporte_saliente" name="fecha2_reporte_saliente">
                    </span>
                  </div>
                  <!-- /.description-block -->
                </div>
                  
                   
                <div class="col-md-3">
                                   
                      <button onclick="generar_reporte_salientes(); return false;" class="btn btn-primary pull-right" style="margin-right: 5px;"><i class="fa fa-download"></i> Generate PDF</button>
                      
                  <!-- /.description-block -->
                </div>
                <div class="col-md-3">
                
                      <button onclick="generar_reporte_salientes_excel();" class="btn btn-success pull-right" style="margin-right: 5px;"><i class="fa fa-download"></i> Generate Excel</button>
                   
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

  <div  class="row" style="padding: 16px" id="tabla_salientes_reportes">                
      <?php      
          include 'vistas/reportes/tabla_salientes.php';      
      ?>
  </div>

</div>





                    
                    
  