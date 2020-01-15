<script type="text/javascript">



    function generar_reporte_salientes(){
      
        ejecutarAccion(
          'reportes', 
          'Salientes', 
          'generarReporteSalientes',
          "&fecha1="+$("#fecha1_reporte").val()+
          "&fecha2="+$("#fecha2_reporte").val()+ 
          "&remitente="+$("#remitente_saliente_reporte").val()+ 
          "&destinatario="+$("#destinatario_saliente_reporte").val(), 
          "cargarVisorPDF(data); "
        );
        
    }
  


    function generar_reporte_salientes_excel(){
      
        ejecutarAccion(
          'reportes', 
          'Salientes', 
          'generarReporteSalientesExcel', 
          "&fecha1="+$("#fecha1_reporte").val()+
          "&fecha2="+$("#fecha2_reporte").val()+ 
          "&remitente="+$("#remitente_saliente_reporte").val()+ 
          "&destinatario="+$("#destinatario_saliente_reporte").val(), 
          "location.href = data"         
        );
        
    }


      
    function cargarReporteSaliente(){
    
        ejecutarAccion(
          'reportes',
          'Salientes',
          'cargarTablaSalientes',
          "&fecha1="+$("#fecha1_reporte").val()+
          "&fecha2="+$("#fecha2_reporte").val()+ 
          "&remitente="+$("#remitente_saliente_reporte").val()+ 
          "&destinatario="+$("#destinatario_saliente_reporte").val(), 
          "$('#div_reporte_saliente').html(data);"    
        );
        
    }




    function buscar_remitente_saliente_reporte(texto) {

      $('#vista_remitente_saliente_reporte').hide();

        if (texto.length == 0) {

            cargarReporteSaliente();

        }
        if (texto.length < 3) {

          $('#remitente_saliente_reporte').val("");  
          

        } else {

          ejecutarAccion(
            "radicados", 
            "Salientes",
            "buscarRemitente", 
            "texto=" + texto,
            "$('#vista_remitente_saliente_reporte').show(); $('#vista_remitente_saliente_reporte').html(data);"
          );

        }

    }




    function buscar_destinatario_saliente_reporte(texto) {

        if (texto.length < 3) {

          $('#destinatario_saliente_reporte').val("");
          $('#vista_destinatarios_reporte').hide();

        } else {

          ejecutarAccion(
              "radicados", 
              "Salientes", 
              "buscarDestinatario",
              "texto=" + texto,
              "$('#vista_destinatario_saliente_reporte').show(); $('#vista_destinatario_saliente_reporte').html(data);");

        }

    }




    function seleccionar_remitente(id_remitente, nombres_remitente, apellidos_remitente) {

        var nombre_remitente = nombres_remitente + ' ' + apellidos_remitente;

        $("#remitente_saliente_reporte").val(id_remitente);
        $("#remitente_saliente_reporte2").val(nombre_remitente);
        

        $('#vista_remitente_saliente_reporte').hide();

        cargarReporteSaliente();

    }



    function seleccionar_destinatario(id_destinatario, nombre_destinatario) {

        

        $("#destinatario_saliente_reporte").val(id_destinatario);
        $("#destinatario_saliente_reporte2").val(nombre_destinatario);

        cargarReporteSaliente();

        $('#vista_destinatario_saliente_reporte').hide();

    }


  
</script>   



<div class="row">
<div style="padding:25px" class="box-body table-responsive no-padding">
<div class="card">







    <div class="card-header">
      <div class="box">
        <div class="row">



            <div class="col-md-8">
                <h4 style="color:grey">REPORTE DE RADICADOS DE SALIDA</h4>
            </div>



            <div class="col-md-2">
              <button onclick="generar_reporte_salientes(); return false;" class="btn btn-primary pull-right" 
              style="margin-right: 5px;"><i class="fa fa-download"></i> Generar PDF</button>
            </div>


            <div class="col-md-2">
              <button onclick="generar_reporte_salientes_excel();" class="btn btn-success pull-right" 
              style="margin-right: 5px;"><i class="fa fa-download"></i> Generar Excel</button>
            </div>



        </div>
      </div>
    </div>






    <div class="card-body">
      <div class="row">     
      

          
          <div class="col-sm-3 border-right">
          <div class="description-block">
              <h5 class="description-header">Fecha Inicial<?php echo $_SESSION['ruta_absoluta']; ?></h5>
              <span class="description-text">
                  <input onchange="cargarReporteSaliente(); return false;" type="date" class="form-control" id="fecha1_reporte" name="fecha1_reporte">
              </span>
          </div>
          </div>



          
          <div class="col-sm-3 border-right">
            <div class="description-block">
              <h5 class="description-header">Fecha Final</h5>
              <span class="description-text">                        
                  <input onchange="cargarReporteSaliente(); return false;" type="date" class="form-control" id="fecha2_reporte" name="fecha2_reporte">
              </span>
            </div>
          </div>
          





          <div class="col-md-3">
            <label>Remitente<span style="color:red">*</span></label>

            <input type="hidden" class="requerido" id="remitente_saliente_reporte" 
            name="remitente_saliente_reporte">

            <input type="text" class="form-control requerido" id="remitente_saliente_reporte2" 
            name="remitente_saliente_reporte2"  onchange="cargarReporteSaliente(); return false;"

              onkeyup="buscar_remitente_saliente_reporte(this.value); return false;">
            <div id="vista_remitente_saliente_reporte"></div>
          </div>


          



          <div class="col-md-3">
            <label>Destinatario<span style="color:red">*</span></label>
            <input type="hidden" class="requerido" id="destinatario_saliente_reporte"
              name="destinatario_saliente_reporte">
            <input type="text"  class="form-control requerido" id="destinatario_saliente_reporte2" 
            name="destinatario_saliente_reporte2" onkeyup="buscar_destinatario_saliente_reporte(this.value); return false;">
            <div id="vista_destinatario_saliente_reporte"></div>
          </div>


   



    </div>
        <div id="div_reporte_saliente">
          <?php      
              include 'vistas/reportes/salientes/tabla_salientes.php';      
          ?> 
          </div> 
    </div>






</div>
</div>
</div>