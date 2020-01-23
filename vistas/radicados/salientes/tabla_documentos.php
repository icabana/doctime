<?php

$tabla_documentos = "

<div class='box box-default'>

  <div class='box-body'>               
    <div class='row'>
  
    <form  method='post' action='return false;'>";
         
    $icono_archivo = "";
        
      $path = 'archivos/uploads/salientes/'.$id_saliente.'/';

      if(file_exists($path)){
          
          $directorio = dir($path);            
          $nombre_archivo = "";            
          $extension = "";
                          
          while ($archivo = $directorio->read()){

            if($archivo != "." && $archivo != ".." ){
                $extension = pathinfo($archivo, PATHINFO_EXTENSION);
                $nombre_archivo = $archivo;
                $ruta_archivo = $path.$nombre_archivo;
            
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
                    <a target="_blank"  href="'.$ruta_archivo.'">
                      <span class="mailbox-attachment-icon">'.$icono_archivo.'</span>
                      <div class="mailbox-attachment-info">
                        <a target="_blank" href="'.$ruta_archivo.'" class="mailbox-attachment-name"><i class="fa fa-paperclip"></i> '.$nombre_archivo.'</a>
                        <span class="mailbox-attachment-size">
                            <a href="#"  title="Eliminar Archivo" onclick="eliminar_archivo(\''.$ruta_archivo.'\'); return false;">Eliminar Archivo</a>
                         
                          </a>
                        </span>
                      </div>
                    </li>

                  </ul> </div>';

            }

          }
          

        }


    $tabla_documentos .= '

    <div class="col-md-3">
    
      <a href="#">
          <ul class="mailbox-attachments clearfix">
              <li>
                  <span class="mailbox-attachment-icon"><img data-toggle="modal" data-target="#exampleModal4_editar_saliente"  width="100px" height="100px" src="imagenes/iconos/nuevo.png"></span>
                  <div ><center>AÑADIR DOCUMENTO</center>
                    <span class="mailbox-attachment-size">
                  </div>
              </li>
          </ul>
      </a>
    </div>';

    $tabla_documentos .= "</div";    
                    
    $tabla_documentos .= "</form></div></div></div>";
  
      

    
?>