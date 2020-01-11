<script type="text/javascript">



    function generar_reporte_entrantes(){
      
        ejecutarAccion(
          'reportes', 
          'Reportes', 
          'generarReporteEntrantes',
          "estado="+$("#estado_reporte").val()+
          "&fecha1="+$("#fecha1_reporte").val()+
          "&fecha2="+$("#fecha2_reporte").val()+ 
          "&remitente="+$("#remitente_entrante_reporte").val()+ 
          "&destinatario="+$("#destinatario_entrante_reporte").val(), 
          "cargarVisorPDF(data); "
        );
        
    }
  


    function generar_reporte_entrantes_excel(){
      
        ejecutarAccion(
          'reportes', 
          'Reportes', 
          'generarReporteEntrantesExcel', 
          "estado="+$("#estado_reporte").val()+
          "&fecha1="+$("#fecha1_reporte").val()+
          "&fecha2="+$("#fecha2_reporte").val()+ 
          "&remitente="+$("#remitente_entrante_reporte").val()+ 
          "&destinatario="+$("#destinatario_entrante_reporte").val(), 
          "location.href = data"         
        );
        
    }


      
    function cargarReporte(){
    
        ejecutarAccion(
          'reportes',
          'Reportes',
          'cargarReporteEntrantes',
          "estado="+$("#estado_reporte").val()+
          "&fecha1="+$("#fecha1_reporte").val()+
          "&fecha2="+$("#fecha2_reporte").val()+ 
          "&remitente="+$("#remitente_entrante_reporte").val()+ 
          "&destinatario="+$("#destinatario_entrante_reporte").val(), 
          "$('#div_reporte_entrante').html(data);"    
        );
        
    }




    function buscar_remitente_entrante_reporte(texto) {

      $('#vista_remitente_entrante_reporte').hide();

        if (texto.length == 0) {

            cargarReporte();

        }
        if (texto.length < 3) {

          $('#remitente_entrante_reporte').val("");  
          

        } else {

          ejecutarAccion(
            "radicados", 
            "Entrantes",
            "buscarRemitente", 
            "texto=" + texto,
            "$('#vista_remitente_entrante_reporte').show(); $('#vista_remitente_entrante_reporte').html(data);"
          );

        }

    }




    function buscar_destinatario_entrante_reporte(texto) {

        if (texto.length < 3) {

          $('#destinatario_entrante_reporte').val("");
          $('#vista_destinatarios_reporte').hide();

        } else {

          ejecutarAccion(
              "radicados", 
              "Entrantes", 
              "buscarDestinatario",
              "texto=" + texto,
              "$('#vista_destinatario_entrante_reporte').show(); $('#vista_destinatario_entrante_reporte').html(data);");

        }

    }




    function seleccionar_remitente(id_remitente, nombre_remitente) {

        $("#remitente_entrante_reporte").val(id_remitente);
        $("#remitente_entrante_reporte2").val(nombre_remitente);
        

        $('#vista_remitente_entrante_reporte').hide();

        cargarReporte();

    }



    function seleccionar_destinatario(id_destinatario, nombres_destinatario, apellidos_destinatario) {

        var nombre_destinatario = nombres_destinatario + ' ' + apellidos_destinatario;

        $("#destinatario_entrante_reporte").val(id_destinatario);
        $("#destinatario_entrante_reporte2").val(nombre_destinatario);
        cargarReporte();

        $('#vista_destinatario_entrante_reporte').hide();

    }


  
</script>   



<div class="row">
<div style="padding:25px" class="box-body table-responsive no-padding">
<div class="card">







    <div class="card-header">
      <div class="box">
        <div class="row">



            <div class="col-md-8">
                <h4 style="color:grey">REPORTE DE RADICADOS DE ENTRADA</h4>
            </div>



            <div class="col-md-2">
              <button onclick="generar_reporte_entrantes(); return false;" class="btn btn-primary pull-right" 
              style="margin-right: 5px;"><i class="fa fa-download"></i> Generate PDF</button>
            </div>


            <div class="col-md-2">
              <button onclick="generar_reporte_entrantes_excel();" class="btn btn-success pull-right" 
              style="margin-right: 5px;"><i class="fa fa-download"></i> Generar Excel</button>
            </div>



        </div>
      </div>
    </div>






    <div class="card-body">
      <div class="row">     
        


      
          <div class="col-sm-2 border-right">
            <div class="description-block">


              <h5 class="description-header">Seleccionar Estado</h5>


              <select onchange="cargarReporte(); return false;" class="form-control" 
                      id="estado_reporte" name="estado_reporte">

                  <option value="TODOS">TODOS</option>
                  <option value="1">ACTIVO</option>
                  <option value="2">FINALIZADO</option>
                  <option value="3">ARCHIVADO</option>

              </select>


            </div>
          </div>



          
          <div class="col-sm-3 border-right">
          <div class="description-block">
              <h5 class="description-header">Fecha Inicial<?php echo $_SESSION['ruta_absoluta']; ?></h5>
              <span class="description-text">
                  <input onchange="cargarReporte(); return false;" type="date" class="form-control" id="fecha1_reporte" name="fecha1_reporte">
              </span>
          </div>
          </div>



          
          <div class="col-sm-3 border-right">
            <div class="description-block">
              <h5 class="description-header">Fecha Final</h5>
              <span class="description-text">                        
                  <input onchange="cargarReporte(); return false;" type="date" class="form-control" id="fecha2_reporte" name="fecha2_reporte">
              </span>
            </div>
          </div>
          





          <div class="col-md-4">
            <label>Remitente<span style="color:red">*</span></label>

            <input type="hidden" class="requerido" id="remitente_entrante_reporte" 
            name="remitente_entrante_reporte">

            <input type="text" class="form-control requerido" id="remitente_entrante_reporte2" 
            name="remitente_entrante_reporte2"  onchange="cargarReporte(); return false;"

              onkeyup="buscar_remitente_entrante_reporte(this.value); return false;">
            <div id="vista_remitente_entrante_reporte"></div>
          </div>


          



          <div class="col-md-4">
            <label>Destinatario<span style="color:red">*</span></label>
            <input type="hidden" class="requerido" id="destinatario_entrante_reporte"
              name="destinatario_entrante_reporte">
            <input type="text"  class="form-control requerido" id="destinatario_entrante_reporte2" 
            name="destinatario_entrante_reporte2" onkeyup="buscar_destinatario_entrante_reporte(this.value); return false;">
            <div id="vista_destinatario_entrante_reporte"></div>
          </div>


   



    </div>
        <div id="div_reporte_entrante">
          <?php      
              include 'vistas/reportes/tabla_entrantes.php';      
          ?> 
          </div> 
    </div>






</div>
</div>
</div>