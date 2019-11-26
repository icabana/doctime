<?php

class ExpedientesModel extends ModelBase {
  
    function getTodos() {
        
        $query = "select 
                    expedientes.id_expediente, 
                    expedientes.nombre_expediente
                
                    from expedientes";
        
        $consulta = $this->consulta($query);
        return $consulta;       
               
    }  

    function getDatos($id_expediente) {
       
        $query = "select 	
                    expedientes.id_expediente, 
                    expedientes.nombre_expediente
                
                    from expedientes

                    where expedientes.id_expediente='".$id_expediente."'";
        
         $consulta = $this->consulta($query);
        return $consulta[0];    
        
    }
    
    function insertar(                               
                        $nombre_expediente
                    ){
                
        $query = "INSERT INTO expedientes (
                                nombre_expediente
                            )
                            VALUES(
                                '".$nombre_expediente."'
                            );";
       
        return $this->crear_ultimo_id($query);       
        
    }
    
    function editar(
                    $id_expediente, 
                    $nombre_expediente
                ) {
        
        $query = "  UPDATE expedientes SET nombre_expediente = '". $nombre_expediente ."'           
                    WHERE id_expediente = '" . $id_expediente . "'";
       
        return $this->modificarRegistros($query);
       
    }
    
    function eliminar($id_expediente) {
        
        $query = "DELETE FROM expedientes WHERE id_expediente = '". $id_expediente ."'";        
        $this->modificarRegistros($query);

    }
    
}

?>