<?php

class SubseriesModel extends ModelBase {
  
    function getTodos() {
        
        $query = "select 
                    subseries.id_subserie, 
                    subseries.serie_subserie, 
                    subseries.codigo_subserie, 
                    subseries.nombre_subserie, 
                    subseries.tiempogestion_subserie, 
                    subseries.tiempocentral_subserie, 
                    subseries.soporte_subserie, 
                    subseries.disposicion_subserie,

                    series.id_serie,
                    series.codigo_serie,
                    series.nombre_serie
                
                    from subseries LEFT JOIN series 
                    ON subseries.serie_subserie = series.id_serie";
        
        $consulta = $this->consulta($query);
        return $consulta;       
               
    }
  
    function getTodosPorSerie($serie_subserie) {
        
        $query = "select 
                    subseries.id_subserie, 
                    subseries.serie_subserie, 
                    subseries.codigo_subserie, 
                    subseries.nombre_subserie, 
                    subseries.tiempogestion_subserie, 
                    subseries.tiempocentral_subserie, 
                    subseries.soporte_subserie, 
                    subseries.disposicion_subserie,

                    series.id_serie,
                    series.codigo_serie,
                    series.nombre_serie
                
                    from subseries LEFT JOIN series 
                    ON subseries.serie_subserie = series.id_serie
                    
                    where subseries.serie_subserie = '".$serie_subserie."'";
        
        $consulta = $this->consulta($query);
        return $consulta;       
               
    }

    function getDatos($id_subserie) {
       
        $query = "select 	
                    subseries.id_subserie, 
                    subseries.serie_subserie, 
                    subseries.codigo_subserie, 
                    subseries.nombre_subserie, 
                    subseries.tiempogestion_subserie, 
                    subseries.tiempocentral_subserie, 
                    subseries.soporte_subserie, 
                    subseries.disposicion_subserie
                
                    from subseries

                    where subseries.id_subserie='".$id_subserie."'";
        
         $consulta = $this->consulta($query);
        return $consulta[0];    
        
    }
    
    function insertar(                               
                        $serie_subserie,
                        $codigo_subserie,
                        $nombre_subserie, 
                        $tiempogestion_subserie, 
                        $tiempocentral_subserie, 
                        $soporte_subserie, 
                        $disposicion_subserie
                    ){
                
        $query = "INSERT INTO subseries (
                                serie_subserie,
                                codigo_subserie,
                                nombre_subserie, 
                                tiempogestion_subserie, 
                                tiempocentral_subserie, 
                                soporte_subserie, 
                                disposicion_subserie
                            )
                            VALUES(
                                '".$serie_subserie."',
                                '".$codigo_subserie."',
                                '".$nombre_subserie."',
                                '".$tiempogestion_subserie."',
                                '".$tiempocentral_subserie."',
                                '".$soporte_subserie."',
                                '".$disposicion_subserie."'
                            );";
       
        return $this->crear_ultimo_id($query);       
        
    }
    
    function editar(
                    $id_subserie, 
                    $serie_subserie,
                    $codigo_subserie,
                    $nombre_subserie,
                    $tiempogestion_subserie,
                    $tiempocentral_subserie,
                    $soporte_subserie,
                    $disposicion_subserie
                ) {
        
        $query = "  UPDATE subseries 

                    SET serie_subserie = '". $serie_subserie ."',    
                        codigo_subserie = '". $codigo_subserie ."',  
                        nombre_subserie = '". $nombre_subserie ."',  
                        tiempogestion_subserie = '". $tiempogestion_subserie ."',  
                        tiempocentral_subserie = '". $tiempocentral_subserie ."',  
                        soporte_subserie = '". $soporte_subserie ."',  
                        disposicion_subserie = '". $disposicion_subserie ."'  

                    WHERE id_subserie = '" . $id_subserie . "'";
       
        return $this->modificarRegistros($query);
       
    }
    
    function eliminar($id_subserie) {
        
        $query = "DELETE FROM subseries WHERE id_subserie = '". $id_subserie ."'";        
        $this->modificarRegistros($query);

    }
    
}

?>