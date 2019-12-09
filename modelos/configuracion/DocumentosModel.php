<?php

class DocumentosModel extends ModelBase {

    function getTodos($entrante_documento){
        
        $query = "select documentos.id_documento, 
                         documentos.nombre_documento,
                         documentos.entrante_documento
            	                 
                         from documentos
                        
                         WHERE documentos.entrante_documento = '".$entrante_documento."'

                         order by documentos.nombre_documento";
        
        $consulta = $this->consulta($query);
        return $consulta;
        
    }
               	
    function agregarDocumento($nombre_documento, $entrante_documento){
          
        $query = "INSERT INTO documentos (nombre_documento, entrante_documento)
                  VALUES ('".utf8_decode($nombre_documento)."','".$entrante_documento."');";
                
        return $this->crear_ultimo_id($query);
        
    }
                  
    function eliminarDocumento($id_documento){
        
        $query = "DELETE FROM documentos WHERE id_documento = '".$id_documento."';";
        
        return $this->modificarRegistros($query);
        
    }

}

?>