<?php

    include("classes/easy_upload/upload_class.php");

    $upload = new file_upload();
        
    mkdir('../../archivos/uploads/salientes/'.$_POST['id_saliente'].'/'.$_POST['documento_soporte']);

    $carpeta = '../../archivos/uploads/salientes/'.$_POST['id_saliente'].'/'.$_POST['documento_soporte'].'/';
    
     $upload->upload_dir = $carpeta;
    
    
    foreach(glob($carpeta . "/*") as $archivos_carpeta){
             
        if (is_dir($archivos_carpeta)){
             $this->eliminarDir($archivos_carpeta); 
        }else{
             unlink($archivos_carpeta);
        }
        
    }
    
    $upload->extensions = array('.png', '.jpg', '.zip', '.pdf', '.doc', '.docx', '.xls', '.xlsx'); // specify the allowed extensions here
    $upload->rename_file = false;

    if(!empty($_FILES)) {
        
            $path = $_FILES['userfile']['name'];
            $extension = pathinfo($path, PATHINFO_EXTENSION);
                       
            $upload->the_temp_file = utf8_decode($_FILES['userfile']['tmp_name']);
            $nombre_archivo = $upload->quitar_tildes($_POST['documento_soporte'].".".$extension);
            $upload->the_file = $nombre_archivo;
            $upload->http_error = $_FILES['userfile']['error'];
            $upload->do_filename_check = 'n';                    

        if ($upload->upload()){

                echo '<div id="status">success</div>';
                echo "<div id='message'>Archivo Cargado Ex&iacute;tosamente <script>".$_POST['funcion_actualizar']."</script></div>";  
                echo '<div id="uploadedfile">'. $upload->file_copy .'</div>';

        } else {

                echo '<div id="status">failed</div>';
                echo '<div id="message"></div>';

        }  
            
    }
        
?>