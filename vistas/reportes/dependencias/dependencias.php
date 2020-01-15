<script type="text/javascript">



    function generar_reporte_dependencias(){
      
        ejecutarAccion(
          'reportes', 
          'Dependencias', 
          'generarReporteDependencias',
          '',
          "cargarVisorPDF(data); "
        );
        
    }
  


    function generar_reporte_dependencias_excel(){
      
        ejecutarAccion(
          'reportes', 
          'Dependencias', 
          'generarReporteDependenciasExcel', 
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
                <h4 style="color:grey">REPORTE DE DEPENDENCIAS</h4>
            </div>



            <div class="col-md-2">
              <button onclick="generar_reporte_dependencias(); return false;" class="btn btn-primary pull-right" 
              style="margin-right: 5px;"><i class="fa fa-download"></i> Generar PDF</button>
            </div>


            <div class="col-md-2">
              <button onclick="generar_reporte_dependencias_excel();" class="btn btn-success pull-right" 
              style="margin-right: 5px;"><i class="fa fa-download"></i> Generar Excel</button>
            </div>



        </div>
      </div>
    </div>






    <div class="card-body">
      <div class="row">     
        

   



    </div>
        <div id="div_reporte_dependencia">
          <?php      
              include 'vistas/reportes/dependencias/tabla_dependencias.php';      
          ?> 
          </div> 
    </div>






</div>
</div>
</div>