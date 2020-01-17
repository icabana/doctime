<?php

class TiposradicadoModel extends ModelBase {
  
    function getTodos() {
        
        $query = "select 
                    tiposradicado.id_tiporadicado, 
                    tiposradicado.nombre_tiporadicado
                
                    from tiposradicado";
        
        $consulta = $this->consulta($query);
        return $consulta;       
               
    }  

    function getDatos($id_tiporadicado) {
       
        $query = "select 	
                    tiposradicado.id_tiporadicado, 
                    tiposradicado.nombre_tiporadicado

                    from tiposradicado

                    where tiposradicado.id_tiporadicado='".$id_tiporadicado."'";
        
         $consulta = $this->consulta($query);
        return $consulta[0];    
        
    }
    
    function insertar(                         
                        $nombre_tiporadicado
                    ){
                
        $query = "INSERT INTO tiposradicado (         
                                nombre_tiporadicado
                            )
                            VALUES(
                                '".$nombre_tiporadicado."'
                            );";
       
        return $this->crear_ultimo_id($query);       
        
    }
    
    function editar(
                    $id_tiporadicado, 
                    $nombre_tiporadicado
                ) {
        
        $query = "  UPDATE tiposradicado 

                    SET nombre_tiporadicado = '". $nombre_tiporadicado ."'
                        
                    WHERE id_tiporadicado = '" . $id_tiporadicado . "'";
       
        return $this->modificarRegistros($query);
       
    }
    
    function eliminar($id_tiporadicado) {
        
        $query = "DELETE FROM tiposradicado WHERE id_tiporadicado = '". $id_tiporadicado ."'";        
        return $this->modificarRegistros($query);

    }
    
}

?>