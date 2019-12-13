<script type="text/javascript">

function generar_reporte_contratistas(){
  
    ejecutarAccion(
    
            'reportes', 'Reportes', 'generarReporteContratistas', "", "cargarVisorPDF(data); " 
        
    );
     
}
  
function generar_reporte_contratistas_excel(){
  
    ejecutarAccion(
            
            'reportes', 'Reportes', 'generarReporteContratistasExcel', "", "$('#salida_reporte_excel').html(data);" 
        
    );
     
}
  
  

$( document ).ready(function() {
       
  crearDatePickerfull('#fecha1_reporte');
  crearDatePickerfull('#fecha2_reporte');
  CrearTabla('tabla_contratos');
  
});

</script>   


<div class="col-md-12">
          <!-- Widget: user widget style 1 -->
          <div class="box box-widget widget-user">
            <!-- Add the bg color to the header using any of the bg-* classes -->
            <div class="widget-user-header bg-aqua-active text-center">
                <br>
                <h3><b>REPORTE DE CONTRATISTAS</b></h3>
            </div>
            <div class="box-footer">
              <div class="row">
                
                   
                <div class="col-md-3">
                
                     
                  
                      <button onclick="generar_reporte_contratistas(); return false;" class="btn btn-primary pull-right" style="margin-right: 5px;"><i class="fa fa-download"></i> Generate PDF</button>
                      
                  <!-- /.description-block -->
                </div>
                <div class="col-md-3">
                
                      <button onclick="generar_reporte_contratistas_excel();" class="btn btn-success pull-right" style="margin-right: 5px;"><i class="fa fa-download"></i> Generate Excel</button>
                   
                     <div id="salida_reporte_excel"></div>
                  <!-- /.description-block -->
                </div>
  
                
              </div>
              <!-- /.row -->
            </div>
          </div>
          <!-- /.widget-user -->
        </div> 

<div  class="row" style="padding: 16px" id="tabla_contratistas">
                
                <?php
                
                    include 'vistas/reportes/tabla_contratistas.php';
                
                ?>
                
         </div>





                    
                    
  