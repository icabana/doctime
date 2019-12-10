<?php

$tabla_documentos = "

<div class='box box-default'>

  <div class='box-body'>               
    <div class='row'>
  
    <form  method='post' action='return false;'>";
                         
    $bandera = 0;
    $icono_archivo = "";

    foreach ($documentos as $clave => $valor) {
        
      $path = 'archivos/uploads/salientes/'.$id_saliente;

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
              
          $icono_archivo = '<img width="100px" height="100px" src="imagenes/iconos/pdf.png">';
          if($extension == "pdf"){
              $icono_archivo = '<img width="100px" height="100px" src="imagenes/iconos/pdf.png">';
          }
          if($extension == "doc" || $extension == "docx"){
              $icono_archivo = '<img width="100px" height="100px" src="imagenes/iconos/word.png">';
          }
          if($extension == "xls" || $extension == "xlsx"){
              $icono_archivo = '<img width="100px" height="100px" src="imagenes/iconos/excel.png"';
          }
          

          $tabla_documentos .= ' <div class="col-md-3">
            <ul class="mailbox-attachments clearfix">
              <li>
              <a target="_blank"  href="'.$path."/".$nombre_archivo.'">
                <span class="mailbox-attachment-icon">'.$icono_archivo.'</span>
                <div class="mailbox-attachment-info">
                  <a target="_blank" href="'.$path."/".$nombre_archivo.'" class="mailbox-attachment-name"><i class="fa fa-paperclip"></i> '.utf8_encode(substr( $valor['nombre_documento'],0,22)).'</a>
                  <span class="mailbox-attachment-size">
                      <a href="#"  onclick="abrir_upload_archivo('.$valor["id_documento"].', \''.$valor["nombre_documento"].'\'); return false;">Reemplazar Archivo</a>
                    <a href="#" class="btn btn-default btn-xs pull-right"><i class="fa fa-download"></i></a>
                    </a>
                  </span>
                </div>
              </li>

            </ul> </div>';

          $ver_upload = "<a href='#' title='ELIMINAR ARCHIVO' onclick='eliminar_archivo(".$valor["id_documento"].", \"".$valor["nombre_documento"]."\", ".$id_contrato_documento.", \"".$ruta_archivo."\"); return false;'><img alt='' src='imagenes/botones/eliminar.png' width='37px'  /></a>   ";

        }

        $contador ++;

        $ver_archivo = "";
        $bandera = 0;

    }


    $tabla_documentos .= '

    <div class="col-md-3">
    
      <a href="#modal_documentos">
          <ul class="mailbox-attachments clearfix">
              <li>
                  <span class="mailbox-attachment-icon"><img data-toggle="modal" data-target="#exampleModal4"  width="100px" height="100px" src="imagenes/iconos/nuevo.png"></span>
                  <div ><center>AÑADIR DOCUMENTO</center>
                    <span class="mailbox-attachment-size">
                  </div>
              </li>
          </ul>
      </a>
    </div>';

    $ver_upload = "  <a href='#' title='SUBIR ARCHIVO' onclick='abrir_upload_archivo(".$valor["id_documento"].", \"".utf8_encode($valor["nombre_documento"])."\"); return false;'><img alt='' src='imagenes/botones/subir.png' width='26px'  /></a>   ";

    $tabla_documentos .= "</div";    
                    
    $tabla_documentos .= "</form></div></div></div>";
  
      

    
?>