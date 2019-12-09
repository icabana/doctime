<script type="text/javascript" >
    
function insertar_soporte_lp(){
    
    var documento = $("#documento_soporte_lp").val();
        
    if(documento==""){
        
         mensaje_alertas("error", "El Nombre del Documento es obligatorio.", "center");
         return 0;
        
    }else{        
        
    	ejecutarAccion(
		'configuracion', 'Soportes', 'GuardarSoporteLP', 'documento=' + documento,'$("#salida_soportes_lp").html(""); $("#salida_soportes_lp").html(data); mensaje_alertas("success", "Registrado con Éxito", "center"); limpiar_campos_lp();  '
	);
            
    }
    
}    

function limpiar_campos_lp(){
        
    $("#id_soporte_lp").val("");
    $("#documento_soporte_lp").val("");  
    
}

function eliminar_soporte_lp(id_soporte){
    
    var opcion = confirm("Está seguro de Eliminar?");
    if(opcion!= true) return 0;
    
    ejecutarAccion(
    
            'configuracion', 'Soportes', 'eliminarSoporteLP', 'id_soporte=' + id_soporte,'$("#salida_soportes_lp").html(""); $("#salida_soportes_lp").html(data); mensaje_alertas("success", "Eliminado con Éxito", "center");   limpiar_campos_lp();  '
            
    );
        
}
    

function insertar_soporte_samc(){
    
    var documento = $("#documento_soporte_samc").val();
         
    if(documento==""){
         
        alert("El Nombre del Documento es obligatorio.");
        return 0;
        
    }else{
                
    	ejecutarAccion(
		'configuracion', 'Soportes', 'GuardarSoporteSAMC', 'documento=' + documento,'$("#salida_soportes_samc").html(""); $("#salida_soportes_samc").html(data); mensaje_alertas("success", "Almacenado con Éxito", "center");   limpiar_campos_samc(); '
          
	);
            
    }
    
} 

function limpiar_campos_samc(){
        
    $("#id_soporte_samc").val("");
    $("#documento_soporte_samc").val("");
    
}

function eliminar_soporte_samc(id_soporte){
          
    var opcion = confirm("Está seguro de Eliminar?");
    if(opcion!= true) return 0;

    ejecutarAccion(
    
            'configuracion', 'Soportes', 'eliminarSoporteSAMC', 'id_soporte=' + id_soporte,'$("#salida_soportes_samc").html(""); $("#salida_soportes_samc").html(data); mensaje_alertas("success", "Eliminado con Éxito", "center");  limpiar_campos_samc(); '
            
    );   
        
}
       
    
function insertar_soporte_sasi(){
    
    var documento = $("#documento_soporte_sasi").val();            
            
    if(documento == ""){
        
        alert("El Nombre del Documento es obligatorio.");
        return 0;
        
    }else{
        
    	ejecutarAccion(
        
		'configuracion', 'Soportes', 'GuardarSoporteSASI', 'documento=' + documento,'$("#salida_soportes_sasi").html(""); $("#salida_soportes_sasi").html(data);   mensaje_alertas("success", "Almacenado con Éxito", "center");  limpiar_campos_sasi(); '
          
	);
            
    }
    
}

function limpiar_campos_sasi(){
    
    $("#id_soporte_sasi").val("");
    $("#documento_soporte_sasi").val(""); 
    
}

function eliminar_soporte_sasi(id_soporte){
    
    var opcion = confirm("Está seguro de Eliminar?");
    if(opcion!= true) return 0;
    
    ejecutarAccion(
            'configuracion', 'Soportes', 'eliminarSoporteSASI', 'id_soporte=' + id_soporte,'$("#salida_soportes_sasi").html(""); $("#salida_soportes_sasi").html(data);  mensaje_alertas("success", "Eliminado con Éxito", "center");   limpiar_campos_sasi(); '
    );   
        
}


function insertar_soporte_sa(){
    
    var documento = $("#documento_soporte_sa").val();
        
    if(documento==""){
        alert("El Nombre del Documento es obligatorio.");
        return 0;
    }else{
    	ejecutarAccion(
		'configuracion', 'Soportes', 'GuardarSoporteSA', 'documento=' + documento,'$("#salida_soportes_sa").html(""); $("#salida_soportes_sa").html(data);  mensaje_alertas("success", "Almacenado con Éxito", "center");    limpiar_campos_sa();  '
          
	);
    }
}	

function eliminar_soporte_sa(id_soporte){
    
    var opcion = confirm("Está seguro de Eliminar?");
    if(opcion!= true) return 0;
       
    ejecutarAccion(
		'configuracion', 'Soportes', 'eliminarSoporteSA', 'id_soporte=' + id_soporte,'$("#salida_soportes_sa").html(""); $("#salida_soportes_sa").html(data);   mensaje_alertas("success", "Eliminado con Éxito", "center");  limpiar_campos_sa(); '
    );   
        
}

function limpiar_campos_sa(){
    $("#id_soporte_sa").val("");
    $("#documento_soporte_sa").val(""); 
}



function insertar_soporte_cm(){
    
    var documento = $("#documento_soporte_cm").val();
        
    if(documento==""){
        
        alert("El Nombre del Documento es obligatorio.");
        return 0;
        
    }else{
        
    	ejecutarAccion(
		'configuracion', 'Soportes', 'GuardarSoporteCM', 'documento=' + documento,'$("#salida_soportes_cm").html(""); $("#salida_soportes_cm").html(data); mensaje_alertas("success", "Registrado con Éxito", "center");    limpiar_campos_cm(); '
          
	);
            
    }
    
}

function limpiar_campos_cm(){
    $("#id_soporte_cm").val("");
    $("#documento_soporte_cm").val("");
}

function eliminar_soporte_cm(id_soporte){
    
    var opcion = confirm("Está seguro de Eliminar?");
    if(opcion!= true) return 0;
        
    ejecutarAccion(
    
		'configuracion', 'Soportes', 'eliminarSoporteCM', 'id_soporte=' + id_soporte,'$("#salida_soportes_cm").html(""); $("#salida_soportes_cm").html(data);   mensaje_alertas("success", "Eliminado con Éxito", "center");   limpiar_campos_cm(); '
                
    );   
        
}






///////////////////////////////

function insertar_soporte_cd(){
    
    var documento = $("#documento_soporte_cd").val();
    
        
    if(documento==""){
        
        alert("El Nombre del Documento es obligatorio.");
        return 0;
        
    }else{
        
    	ejecutarAccion(
		'configuracion', 'Soportes', 'GuardarSoporteCD', 'documento=' + documento ,'$("#salida_soportes_cd").html(""); $("#salida_soportes_cd").html(data);  mensaje_alertas("success", "Registrado con Éxito", "center");   limpiar_campos_cd(); '
          
	);
    }
}	

function limpiar_campos_cd(){
    $("#id_soporte_cd").val("");
    $("#documento_soporte_cd").val("");
}

function eliminar_soporte_cd(id_soporte){
        
    var opcion = confirm("Está seguro de Eliminar?");
    if(opcion!= true) return 0;
        
    ejecutarAccion(
		'configuracion', 'Soportes', 'eliminarSoporteCD', 'id_soporte=' + id_soporte,'$("#salida_soportes_cd").html(""); $("#salida_soportes_cd").html(data);   mensaje_alertas("success", "Eliminado con Éxito", "center");    limpiar_campos_cd(); '
    );   
        
}






/////////////////////////////////

function insertar_soporte_mc(){
    
    var documento = $("#documento_soporte_mc").val();
        
    if(documento==""){
        alert("El Nombre del Documento es obligatorio.");
        return 0;
    }else{      
        
    	ejecutarAccion(
		'configuracion', 'Soportes', 'GuardarSoporteMC', 'documento=' + documento,'$("#salida_soportes_mc").html(""); $("#salida_soportes_mc").html(data);  mensaje_alertas("success", "Almacenado con Éxito", "center");   limpiar_campos_mc(); '
          
	);
    }
}	

function limpiar_campos_mc(){
    $("#id_soporte_mc").val("");
    $("#documento_soporte_mc").val(""); 
}

function eliminar_soporte_mc(id_soporte){
    
    var opcion = confirm("Está seguro de Eliminar?");
    if(opcion!= true) return 0;
        
    ejecutarAccion(
    
	'configuracion', 'Soportes', 'eliminarSoporteMC', 'id_soporte=' + id_soporte,'$("#salida_soportes_mc").html(""); $("#salida_soportes_mc").html(data); mensaje_alertas("success", "Eliminado con Éxito", "center");  limpiar_campos_mc(); '
        
    );   
        
}


</script>

<div class="box box-default" style="padding-left: 10%; padding-right: 10%">    
    
<div class="col-md-12">
    <!-- Widget: user widget style 1 -->
    <div class="box box-widget widget-user">
      <!-- Add the bg color to the header using any of the bg-* classes -->

      <div class="widget-user-header bg-aqua-active text-center">
          <br>
          <h3 class="widget-user-username"><b>GESTIONAR SOPORTES</b>              
      </div>            
    </div>
    <!-- /.widget-user -->
</div>   
    
    
 
 
<div id="acordion">
    <div class="row">
        <div class="col-md-12">
            
            
          
            <div class="box-group" id="accordion">
                
                
                
             
                
                
                
                
                
                
                
            <div  class="panel box box-primary">
                <div class="box-header with-border">
                    <h4 class="box-title">
                        <a  data-toggle="collapse" data-parent="#accordion" href="#collapseOne">
                            Licitaci&oacute;n P&uacute;blica
                        </a>
                    </h4>
                </div>
                <div id="collapseOne" class="panel-collapse collapse">
                    <div class="box-body">
        
                        <div class="row">   
                 
                            <div class="col-md-12">

                                <div class="form-group">

                                     <label>Nombre del Soporte: </label>
                                     <br>
                                     <input id="documento_soporte_lp" name="documento_soporte_lp" type="text" class="form-control">   

                               </div>
                            </div>    
                            
                        </div>                          

          
                        <div class="box-footer">
                            <div class="col-md-4"></div>
                            <div class="col-md-4">
                                 <button onclick="insertar_soporte_lp(); return false;" class="btn btn-block btn-success">INSERTAR</button></div>
                            <div class="col-md-4"></div>
                        </div>
                        <br>   

                        <div id="salida_soportes_lp">
                            <?php
                                include("vistas/configuracion/soportes/tabla_lp.php");
                                echo $tabla_soporte_lp;
                            ?>        
                        </div>   
        
                    </div>        
                </div>
            </div>
                
                
                
                
                
                
                
                
                
                
            <div  class="panel box box-primary">
                <div class="box-header with-border">
                  <h4 class="box-title">
                    <a  data-toggle="collapse" data-parent="#accordion" href="#collapse2">
                      Selecci&oacute;n Abreviada por M&iacute;nima Cuant&iacute;a
                    </a>
                  </h4>
                </div>
                <div id="collapse2" class="panel-collapse collapse">
                  <div class="box-body">
                   <form id="formPlanes" method="post">

        
                <div class="row">   

                    <div class="col-md-12">

                       <div class="form-group">

                            <label>Nombre del Soporte: </label>
                            <br>
                            <input id="documento_soporte_samc" name="documento_soporte_samc" type="text" class="form-control">   

                      </div>
                   </div>               
                </div>     
          
                <div class="box-footer">
                    <div class="col-md-4"></div>
                    <div class="col-md-4">
                         <button onclick="insertar_soporte_samc(); return false;" class="btn btn-block btn-success">INSERTAR</button></div>
                    <div class="col-md-4"></div>
                </div>
                <br>
   
                <div id="salida_soportes_samc">
                   <?php
                       include("vistas/configuracion/soportes/tabla_samc.php");
                       echo $tabla_soporte_samc;
                   ?>        
               </div> 
            </form>                    
       
            </div>        
        </div>
        </div>
                
                
                
                
                
                
                
                
                
                
                
        <div  class="panel box box-primary">
            <div class="box-header with-border">
              <h4 class="box-title">
                <a  data-toggle="collapse" data-parent="#accordion" href="#collapse3">
                  Selecci&oacute;n Abreviada Subasta Inversa
                </a>
              </h4>
            </div>
            <div id="collapse3" class="panel-collapse collapse">
              <div class="box-body">
               <form id="formPlanes" method="post">

        
            <div class="row">   

                <div class="col-md-12">

                   <div class="form-group">

                        <label>Nombre del Soporte: </label>
                        <br>
                        <input id="documento_soporte_sasi" name="documento_soporte_sasi" type="text" class="form-control">   

                  </div>
               </div>               
            </div>                          

          
            <div class="box-footer">
                <div class="col-md-4"></div>
                <div class="col-md-4">
                     <button onclick="insertar_soporte_sasi(); return false;" class="btn btn-block btn-success">INSERTAR</button></div>
                <div class="col-md-4"></div>
            </div>
            <br>
   

            <div id="salida_soportes_sasi">
               <?php
                   include("vistas/configuracion/soportes/tabla_sasi.php");
                   echo $tabla_soporte_sasi;
               ?>        
            </div>  
            </form>  
        </div>        
        </div>
      </div>
                
                
                
              
        <div  class="panel box box-primary">
           <div class="box-header with-border">
             <h4 class="box-title">
               <a  data-toggle="collapse" data-parent="#accordion" href="#collapse4">
                 Selecci&oacute;n Abreviada
               </a>
             </h4>
           </div>
           <div id="collapse4" class="panel-collapse collapse">
             <div class="box-body">
              <form id="formPlanes" method="post">

        
            <div class="row">   

                <div class="col-md-12">

                   <div class="form-group">

                        <label>Nombre del Soporte: </label>
                        <br>
                        <input id="documento_soporte_sa" name="documento_soporte_sa" type="text" class="form-control">   

                  </div>
               </div>               
             </div>                          

          
                <div class="box-footer">
                    <div class="col-md-4"></div>
                    <div class="col-md-4">
                         <button onclick="insertar_soporte_sa(); return false;" class="btn btn-block btn-success">INSERTAR</button></div>
                    <div class="col-md-4"></div>
                </div>
                <br>


                 <div id="salida_soportes_sa">
                    <?php
                        include("vistas/configuracion/soportes/tabla_sa.php");
                        echo $tabla_soporte_sa;
                    ?>        
                </div>   
            </form>       
                    </div>
                    </div>
                  </div>

                
                
                
                
                
                
                
                
                
    <div  class="panel box box-primary">
        <div class="box-header with-border">
          <h4 class="box-title">
            <a  data-toggle="collapse" data-parent="#accordion" href="#collapse5">
              Concurso de M&eacute;ritos
            </a>
          </h4>
        </div>
        <div id="collapse5" class="panel-collapse collapse">
          <div class="box-body">
           <form id="formPlanes" method="post">

        
            <div class="row">   

                <div class="col-md-12">

                   <div class="form-group">

                        <label>Nombre del Soporte: </label>
                        <br>
                        <input id="documento_soporte_cm" name="documento_soporte_cm" type="text" class="form-control">   

                  </div>
               </div>               
             </div>                          

          
            <div class="box-footer">
                <div class="col-md-4"></div>
                <div class="col-md-4">
                     <button onclick="insertar_soporte_cm(); return false;" class="btn btn-block btn-success">INSERTAR</button></div>
                <div class="col-md-4"></div>
            </div>
            <br>


             <div id="salida_soportes_cm">
                <?php
                    include("vistas/configuracion/soportes/tabla_cm.php");
                    echo $tabla_soporte_cm;
                ?>        
            </div>     

            </form>                     

                    </div>

                    </div>

                  </div>
                
                
                
                
                
                
                
                
                
                
    <div  class="panel box box-primary">
        <div class="box-header with-border">
          <h4 class="box-title">
            <a  data-toggle="collapse" data-parent="#accordion" href="#collapse6">
              Contrataci&oacute;n Directa
            </a>
          </h4>
        </div>
        <div id="collapse6" class="panel-collapse collapse">
          <div class="box-body">
           <form id="formPlanes" method="post">


        <div class="row">   
                 
         <div class="col-md-12">

            <div class="form-group">

                 <label>Nombre del Soporte: </label>
                 <br>
                 <input id="documento_soporte_cd" name="documento_soporte_cd" type="text" class="form-control">   

           </div>
        </div>               
        </div>                          

          
        <div class="box-footer">
            <div class="col-md-4"></div>
            <div class="col-md-4">
                 <button onclick="insertar_soporte_cd(); return false;" class="btn btn-block btn-success">INSERTAR</button></div>
            <div class="col-md-4"></div>
        </div>
        <br>
   

            <div id="salida_soportes_cd">
               <?php
                   include("vistas/configuracion/soportes/tabla_cd.php");
                   echo $tabla_soporte_cd;
               ?>        
            </div>   
        </form>     
        </div>        
        </div>
      </div>
                
                
                
                
        <div  class="panel box box-primary">
            <div class="box-header with-border">
              <h4 class="box-title">
                <a  data-toggle="collapse" data-parent="#accordion" href="#collapse7">
                  M&iacute;nima Cuant&iacute;a
                </a>
              </h4>
            </div>
            <div id="collapse7" class="panel-collapse collapse">
              <div class="box-body">
               <form id="formPlanes" method="post">

        
            <div class="row">   

                <div class="col-md-12">

                   <div class="form-group">

                        <label>Nombre del Soporte: </label>
                        <br>
                        <input id="documento_soporte_mc" name="documento_soporte_mc" type="text" class="form-control">   

                  </div>
               </div>               
             </div>                          

          
            <div class="box-footer">
                <div class="col-md-4"></div>
                <div class="col-md-4">
                     <button onclick="insertar_soporte_mc(); return false;" class="btn btn-block btn-success">INSERTAR</button></div>
                <div class="col-md-4"></div>
            </div>
            <br>


            <div id="salida_soportes_mc">
               <?php
                   include("vistas/configuracion/soportes/tabla_mc.php");
                   echo $tabla_soporte_mc;
               ?>        
           </div> 
</form>      
        </div>
        </div>
      </div>
                
                
                
                
      </div></div></div>   
  </div>        