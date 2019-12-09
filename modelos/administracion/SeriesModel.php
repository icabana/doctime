<?php

class SeriesModel extends ModelBase {
  
    function getTodos() {
        
        $query = "select 
                    series.id_serie, 
                    series.codigo_serie, 
                    series.nombre_serie
                
                    from series";
        
        $consulta = $this->consulta($query);
        return $consulta;       
               
    }  

    function getDatos($id_serie) {
       
        $query = "select 	
                    series.id_serie, 
                    series.codigo_serie, 
                    series.nombre_serie
                
                    from series

                    where series.id_serie='".$id_serie."'";
        
         $consulta = $this->consulta($query);
        return $consulta[0];    
        
    }
    
    function insertar(                               
                        $codigo_serie,
                        $nombre_serie
                    ){
                
        $query = "INSERT INTO series (
                                codigo_serie, 
                                nombre_serie
                            )
                            VALUES(
                                '".$codigo_serie."',
                                '".$nombre_serie."'
                            );";
       
        return $this->crear_ultimo_id($query);       
        
    }
    
    function editar(
                    $id_serie, 
                    $codigo_serie, 
                    $nombre_serie
                ) {
        
        $query = "  UPDATE series SET   codigo_serie = '". $codigo_serie ."', 
                                      nombre_serie = '". $nombre_serie ."'           
                    WHERE id_serie = '" . $id_serie . "'";
       
        return $this->modificarRegistros($query);
       
    }
    
    function eliminar($id_serie) {
        
        $query = "DELETE FROM series WHERE id_serie = '". $id_serie ."'";        
        $this->modificarRegistros($query);

    }
    
}

?>