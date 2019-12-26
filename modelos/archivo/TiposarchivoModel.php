<?php

class TiposarchivoModel extends ModelBase {
  
    function getTodos() {
        
        $query = "select 
                    tiposarchivo.id_tipoarchivo, 
                    tiposarchivo.nombre_tipoarchivo
                
                    from tiposarchivo";
        
        $consulta = $this->consulta($query);
        return $consulta;       
               
    }  

    function getDatos($id_tipoarchivo) {
       
        $query = "select 	
                    tiposarchivo.id_tipoarchivo, 
                    tiposarchivo.nombre_tipoarchivo
                
                    from tiposarchivo

                    where tiposarchivo.id_tipoarchivo='".$id_tipoarchivo."'";
        
         $consulta = $this->consulta($query);
        return $consulta[0];    
        
    }
    
    function insertar(                               
                        $nombre_tipoarchivo
                    ){
                
        $query = "INSERT INTO tiposarchivo (
                                nombre_tipoarchivo
                            )
                            VALUES(
                                '".$nombre_tipoarchivo."'
                            );";
       
        return $this->crear_ultimo_id($query);       
        
    }
    
    function editar(
                    $id_tipoarchivo, 
                    $nombre_tipoarchivo
                ) {
        
        $query = "  UPDATE tiposarchivo SET nombre_tipoarchivo = '". $nombre_tipoarchivo ."'           
                    WHERE id_tipoarchivo = '" . $id_tipoarchivo . "'";
       
        return $this->modificarRegistros($query);
       
    }
    
    function eliminar($id_tipoarchivo) {
        
        $query = "DELETE FROM tiposarchivo WHERE id_tipoarchivo = '". $id_tipoarchivo ."'";        
        $this->modificarRegistros($query);

    }
    
}

?>