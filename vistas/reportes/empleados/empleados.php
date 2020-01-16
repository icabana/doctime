<script type="text/javascript">



    function generar_reporte_empleados(){
      
        ejecutarAccion(
          'reportes', 
          'Empleados', 
          'generarReporteEmpleados',
          "dependencia="+$("#dependencia_reporte").val()+
          "&sexo="+$("#sexo_reporte").val(),
          "cargarVisorPDF(data); "
        );
        
    }
  


    function generar_reporte_empleados_excel(){
      
        ejecutarAccion(
          'reportes', 
          'Empleados', 
          'generarReporteEmpleadosExcel', 
          "dependencia="+$("#dependencia_reporte").val()+
          "&sexo="+$("#sexo_reporte").val(),
          "location.href = data"         
        );
        
    }

  
</script>   



<div class="row">
<div style="padding:25px" class="box-body table-responsive no-padding">
<div class="card">







    <div class="card-header">
      <div class="box">
        <div class="row">



            <div class="col-md-8">
                <h4 style="color:grey">REPORTE DE EMPLEADOS</h4>
            </div>



            <div class="col-md-2">
              <button onclick="generar_reporte_empleados(); return false;" class="btn btn-primary pull-right" 
              style="margin-right: 5px;"><i class="fa fa-download"></i> Generar PDF</button>
            </div>


            <div class="col-md-2">
              <button onclick="generar_reporte_empleados_excel();" class="btn btn-success pull-right" 
              style="margin-right: 5px;"><i class="fa fa-download"></i> Generar Excel</button>
            </div>



        </div>
      </div>
    </div>






    <div class="card-body">
      <div class="row">     
        
      


    </div>
        <div id="div_reporte_empleado">
          <?php      
              include 'vistas/reportes/empleados/tabla_empleados.php';      
          ?> 
          </div> 
    </div>






</div>
</div>
</div>