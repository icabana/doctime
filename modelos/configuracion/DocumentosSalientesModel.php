<?php

class DocumentosSalientesModel extends ModelBase {

    function getTodos($saliente_documento){
        
        $query = "select documentos_salientes.id_documento, 
                         documentos_salientes.nombre_documento,
                         documentos_salientes.saliente_documento
            	                 
                         from documentos_salientes
                        
                         WHERE documentos_salientes.saliente_documento = '".$saliente_documento."'

                         order by documentos_salientes.nombre_documento";
        
        $consulta = $this->consulta($query);
        return $consulta;
        
    }
               	
    function agregarDocumento($nombre_documento, $saliente_documento){
          
        $query = "INSERT INTO documentos_salientes (nombre_documento, saliente_documento)
                  VALUES ('".$nombre_documento."','".$saliente_documento."');";
                
        return $this->crear_ultimo_id($query);
        
    }
                  
    function eliminarDocumento($id_documento){
        
        $query = "DELETE FROM documentos_salientes WHERE id_documento = '".$id_documento."';";
        
        return $this->modificarRegistros($query);
        
    }

}

?>