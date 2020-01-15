<?php

class UnidadesModel extends ModelBase {
  
    function getTodos() {
        
        $query = "select 
                    unidades.id_unidad, 
                    unidades.nombre_unidad
                
                    from unidades";
        
        $consulta = $this->consulta($query);
        return $consulta;       
               
    }  

    function getDatos($id_unidad) {
       
        $query = "select 	
                    unidades.id_unidad, 
                    unidades.nombre_unidad
                
                    from unidades

                    where unidades.id_unidad='".$id_unidad."'";
        
         $consulta = $this->consulta($query);
        return $consulta[0];    
        
    }
    
    function insertar(                               
                        $nombre_unidad
                    ){
                
        $query = "INSERT INTO unidades (
                                nombre_unidad
                            )
                            VALUES(
                                '".$nombre_unidad."'
                            );";
       
        return $this->crear_ultimo_id($query);       
        
    }
    
    function editar(
                    $id_unidad, 
                    $nombre_unidad
                ) {
        
        $query = "  UPDATE unidades 
                    SET nombre_unidad = '". $nombre_unidad ."'           
                    WHERE id_unidad = '" . $id_unidad . "'";
       
        return $this->modificarRegistros($query);
       
    }
    
    function eliminar($id_unidad) {
        
        $query = "DELETE FROM unidades WHERE id_unidad = '". $id_unidad ."'";        
        $this->modificarRegistros($query);

    }
    
}

?>