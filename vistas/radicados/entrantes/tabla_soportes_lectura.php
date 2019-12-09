<?php

$tabla_soportes = "<div class='box box-default'>

<div class='box-body'>               
    <div class='row'>
<form  method='post'  action='return false;'  >";
                         
    $bandera = 0;
 $icono_archivo = "";
    foreach ($soportes as $clave => $valor) {

        
        $path = 'archivos/uploads/'.$id_contrato.'/'.$valor['ID_SOPORTE'];

        if(file_exists($path)){
            
             $directorio = dir($path);
             
             $nombre_archivo = "";
             
             $extension = "";
                            
                while ($archivo = $directorio->read()){

                    if($archivo != "." && $archivo != ".." ){

                        $extension = pathinfo($archivo, PATHINFO_EXTENSION);
                        $nombre_archivo = $archivo;


                    }

                }
               
                 
               
                
                if($extension == "pdf"){
                    $icono_archivo = "fa fa-file-pdf-o";
                }
                if($extension == "doc" || $extension == "docx"){
                    $icono_archivo = "fa fa-file-word-o";
                }
                if($extension == "xls" || $extension == "xlsx"){
                    $icono_archivo = "fa fa-file-excel-o";
                }
                
                $tamano = filesize($nombre_archivo);

                   $tabla_soportes .= ' <div class="col-md-3">
                       <ul class="mailbox-attachments clearfix">
                         <li>
                         <a target="_blank"  href="'.$path."/".$nombre_archivo.'">
                           <span class="mailbox-attachment-icon"><i class="'.$icono_archivo.'"></i></span>
                           <div class="mailbox-attachment-info">
                             <a target="_blank" href="'.$path."/".$nombre_archivo.'" class="mailbox-attachment-name"><i class="fa fa-paperclip"></i> '.utf8_encode(substr($nombre_archivo,0,22)).'</a>
                            
                           </div>
                         </li>

                       </ul> </div>';

                   $ver_upload = "<a href='#' title='ELIMINAR ARCHIVO' onclick='eliminar_archivo(".$valor["ID_SOPORTE"].", \"".$valor["DOCUMENTO_SOPORTE"]."\", ".$id_contrato_soporte.", \"".$ruta_archivo."\"); return false;'><img alt='' src='imagenes/botones/eliminar.png' width='37px'  /></a>   ";

               }
               





             // $tabla_soportes .= "<div><input  id='check-".$valor["ID_SOPORTE"]."' ".$desabilitar." ".$checked." class'check_soportes_os' value='".$valor["ID_SOPORTE"]."'  type='checkbox'> ".$contador.")  <p style='display:inline; font-style: normal; font-family: 'Open Sans', cursive;  ' id='nombre_documento_".$valor["ID_SOPORTE"]."'>".utf8_encode($valor["DOCUMENTO_SOPORTE"])."</p> &nbsp  ".$ver_archivo."</div><br/>";                        
              $contador ++;



          $ver_archivo = "";
          $bandera = 0;

    }


               

     $tabla_soportes .= "</div";    
                   
                   
    $tabla_soportes .= "</form></div></div></div>";
                
    
  
    
    
?>