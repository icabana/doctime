<?php

$tabla_documentos = "

<div class='box box-default'>

  <div class='box-body'>               
    <div class='row'>
  
    <form  method='post' action='return false;'>";
                         
    $bandera = 0;
    $icono_archivo = "";

    foreach ($documentos as $clave => $valor) {
        
      $path = 'archivos/uploads/entrantes/'.$id_entrante;

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
          

          $tabla_documentos .= ' <div class="col-md-3">
            <ul class="mailbox-attachments clearfix">
              <li>
              <a target="_blank"  href="'.$path."/".$nombre_archivo.'">
                <span class="mailbox-attachment-icon"><i class="'.$icono_archivo.'"></i></span>
                <div class="mailbox-attachment-info">
                  <a target="_blank" href="'.$path."/".$nombre_archivo.'" class="mailbox-attachment-name"><i class="fa fa-paperclip"></i> '.utf8_encode(substr($nombre_archivo,0,22)).'</a>
                  <span class="mailbox-attachment-size">
                      <a href="#"  onclick="abrir_upload_archivo('.$valor["id_documento"].', \''.$valor["nombre_documento"].'\'); return false;">Reemplazar Archivo</a>
                    <a href="#" class="btn btn-default btn-xs pull-right"><i class="fa fa-cloud-download"></i></a>
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
                  <span class="mailbox-attachment-icon"><i class="glyphicon glyphicon-plus"></i></span>
                  <div style="background-color:#04B45F" class="mailbox-attachment-info"><center>AÑADIR DOCUMENTO</center>
                    <span class="mailbox-attachment-size">
                  </div>
              </li>
          </ul>
      </a>
    </div>';

    $ver_upload = "  <a href='#' title='SUBIR ARCHIVO' onclick='abrir_upload_archivo(".$valor["id_documento"].", \"".utf8_encode($valor["nombre_documento"])."\"); return false;'><img alt='' src='imagenes/botones/subir.png' width='26px'  /></a>   ";

    $tabla_documentos .= "</div";    
                    
    $tabla_documentos .= "</form></div></div></div>";
  
      
  /////////////////////////////////

  $tabla_documentos .= '
    <div class="modal fade" id="modal_nuevo_documento" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Registrar Nuevo Documento:</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
        <div class="col-md-12">
            <div class="form-group">
            <label>Nombre del Documento: </label>
            <input type="text" class="form-control pull-right requerido" id="documento_modal" name="documento_modal">
      </div>  
          </div>
        </div>
        <div class="modal-footer">        
        <button  data-remodal-action="cancel" onclick="insertar_documento_modal(); return false;" class="btn btn-block btn-primary btn-lg remodal-confirm">GUARDAR</button></div>
        </div>
      </div>
    </div>
    </div>';
    
?>