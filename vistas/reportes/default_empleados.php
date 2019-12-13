<script type="text/javascript">

function generar_reporte_empleados(){
  
    ejecutarAccion(    
        'reportes', 
        'Reportes', 
        'generarReporteEmpleados',
        "", 
        "cargarVisorPDF(data); "         
    );
     
}
  
function generar_reporte_empleados_excel(){
  
    ejecutarAccion(
      'reportes', 
      'Reportes', 
      'generarReporteEmpleadosExcel', 
      "", 
      "$('#salida_reporte_excel').html(data);"         
    );
     
}  
  
$( document ).ready(function() {       

    CrearTabla('tabla_empleados');  
});

</script>   


<div class="row">

<div  class="box-body table-responsive no-padding">

    <div class="card">
        <div class="card-header">
            <div class="box">
                <div class="row">
                    <div class="col-md-8">
                        <h4 style="color:grey">REPORTE DE EMPLEADOS</h4>
                    </div>
                    <div class="col-md-2">

                    <button onclick="generar_reporte_empleados(); return false;" class="btn btn-primary pull-right" style="margin-right: 5px;"><i class="fa fa-download"></i> Generar PDF</button>

                    </div>
                    <div class="col-md-2">
                    <button onclick="generar_reporte_empleados_excel();" class="btn btn-success pull-right" style="margin-right: 5px;"><i class="fa fa-download"></i> Generar Excel</button>
                    </div>
                </div>
            </div>

        </div>
        <!-- /.card-header -->
        <div class="card-body">
        <div  class="row" style="padding: 16px">                
          <?php      
              include 'vistas/reportes/tabla_empleados.php';     
          ?>      
      </div>
        </div>
    </div>
</div>
</div>

