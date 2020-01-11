<script type="text/javascript">



    function generar_reporte_terceros(){
      
        ejecutarAccion(
          'reportes', 
          'Reportes', 
          'generarReporteTerceros',
          '',
          "cargarVisorPDF(data); "
        );
        
    }
  


    function generar_reporte_terceros_excel(){
      
        ejecutarAccion(
          'reportes', 
          'Reportes', 
          'generarReporteTercerosExcel', 
          '',
          "location.href = data"         
        );
        
    }


    
</script>   


<?php
  $froms = new Formularios();
?>


<div class="row">
<div style="padding:25px" class="box-body table-responsive no-padding">
<div class="card">







    <div class="card-header">
      <div class="box">
        <div class="row">



            <div class="col-md-8">
                <h4 style="color:grey">REPORTE DE TERCEROS</h4>
            </div>



            <div class="col-md-2">
              <button onclick="generar_reporte_terceros(); return false;" class="btn btn-primary pull-right" 
              style="margin-right: 5px;"><i class="fa fa-download"></i> Generate PDF</button>
            </div>


            <div class="col-md-2">
              <button onclick="generar_reporte_terceros_excel();" class="btn btn-success pull-right" 
              style="margin-right: 5px;"><i class="fa fa-download"></i> Generar Excel</button>
            </div>



        </div>
      </div>
    </div>






    <div class="card-body">
      <div class="row">     
        

   



    </div>
        <div id="div_reporte_tercero">
          <?php      
              include 'vistas/reportes/tabla_terceros.php';      
          ?> 
          </div> 
    </div>






</div>
</div>
</div>