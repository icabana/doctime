<?php

class DependenciasModel extends ModelBase {
  
    function getTodos() {
        
        $query = "select 
                    dependencias.id_dependencia, 
                    dependencias.nombre_dependencia
                
                    from dependencias";
        
        $consulta = $this->consulta($query);
        return $consulta;       
               
    }  

    function getDatos($id_dependencia) {
       
        $query = "select 	
                    dependencias.id_dependencia, 
                    dependencias.nombre_dependencia
                
                    from dependencias

                    where dependencias.id_dependencia='".$id_dependencia."'";
        
         $consulta = $this->consulta($query);
        return $consulta[0];    
        
    }
    
    function insertar(                               
                        $nombre_dependencia
                    ){
                
        $query = "INSERT INTO dependencias (
                                nombre_dependencia
                            )
                            VALUES(
                                '".$nombre_dependencia."'
                            );";
       
        return $this->crear_ultimo_id($query);       
        
    }
    
    function editar(
                    $id_dependencia, 
                    $nombre_dependencia
                ) {
        
        $query = "  UPDATE dependencias SET nombre_dependencia = '". $nombre_dependencia ."'           
                    WHERE id_dependencia = '" . $id_dependencia . "'";
       
        return $this->modificarRegistros($query);
       
    }
    
    function eliminar($id_dependencia) {
        
        $query = "DELETE FROM dependencias WHERE id_dependencia = '". $id_dependencia ."'";        
        $this->modificarRegistros($query);

    }
    
}

?>