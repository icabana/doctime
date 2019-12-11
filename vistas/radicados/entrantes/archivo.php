


      <div class="col-xs-3">                           
                   
            <div id="main_container">

                <form action="libs/uploads/upload_nuevo.php" method="post" enctype="multipart/form-data" >

                    <input  type="file" name="userfile" class="fileUpload_nuevo" multiple /><br> 

                     <input type="hidden" id="id_entrante" name="id_entrante"  value="<?php echo $datos['id_entrante']; ?>" >
                 
                     <input type="hidden" id="documento_soporte" name="documento_soporte" >
                     
                    <input name="funcion_actualizar" id="funcion_actualizar" type="hidden" value="<script  type='text/javascript'>abrir_upload_archivo2();</script>" />

                    &nbsp;&nbsp; &nbsp;&nbsp;<button class="btn btn-block btn-primary btn-lg" id="px-submit" type="submit" >Subir Archivo</button>

                </form>

            </div> 
       
    </div>


