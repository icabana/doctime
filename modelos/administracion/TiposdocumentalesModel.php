<?php

class TiposdocumentalesModel extends ModelBase {
  
    function getTodos() {
        
        $query = "select 
                    tiposdocumentales.id_tipodocumental, 
                    tiposdocumentales.serie_tipodocumental,
                    tiposdocumentales.subserie_tipodocumental,
                    tiposdocumentales.nombre_tipodocumental,

                    series.id_serie,
                    series.nombre_serie,

                    subseries.id_subserie,
                    subseries.nombre_subserie
                
                    from tiposdocumentales 
                    left join series on tiposdocumentales.serie_tipodocumental = series.id_serie
                    left join subseries on tiposdocumentales.subserie_tipodocumental = subseries.id_subserie
                    
                    ";
        
        $consulta = $this->consulta($query);
        return $consulta;       
               
    }  
  
    function getTodosPorSubserie($subserie_tipodocumental) {
        
        $query = "select 
                    tiposdocumentales.id_tipodocumental, 
                    tiposdocumentales.serie_tipodocumental,
                    tiposdocumentales.subserie_tipodocumental,
                    tiposdocumentales.nombre_tipodocumental,

                    series.id_serie,
                    series.nombre_serie,

                    subseries.id_subserie,
                    subseries.nombre_subserie
                
                    from tiposdocumentales 
                    left join series on tiposdocumentales.serie_tipodocumental = series.id_serie
                    left join subseries on tiposdocumentales.subserie_tipodocumental = subseries.id_subserie
                    
                    where subserie_tipodocumental = '".$subserie_tipodocumental."'";
        
        $consulta = $this->consulta($query);
        return $consulta;       
               
    }  

    function getDatos($id_tipodocumental) {
       
        $query = "select 	
                    tiposdocumentales.id_tipodocumental, 
                    tiposdocumentales.serie_tipodocumental,
                    tiposdocumentales.subserie_tipodocumental,
                    tiposdocumentales.nombre_tipodocumental,

                    series.id_serie,
                    series.nombre_serie,

                    subseries.id_subserie,
                    subseries.nombre_subserie
                
                    from tiposdocumentales 
                    left join series on tiposdocumentales.serie_tipodocumental = series.id_serie
                    left join subseries on tiposdocumentales.subserie_tipodocumental = subseries.id_subserie
                

                    where tiposdocumentales.id_tipodocumental='".$id_tipodocumental."'";
        
         $consulta = $this->consulta($query);
        return $consulta[0];    
        
    }
    
    function insertar(                               
                        $serie_tipodocumental,
                        $subserie_tipodocumental,
                        $nombre_tipodocumental
                    ){
                
        $query = "INSERT INTO tiposdocumentales (
                                serie_tipodocumental,
                                subserie_tipodocumental,
                                nombre_tipodocumental
                            )
                            VALUES(
                                '".$serie_tipodocumental."',
                                '".$subserie_tipodocumental."',
                                '".$nombre_tipodocumental."'
                            );";
       
        return $this->crear_ultimo_id($query);       
        
    }
    
    function editar(
                    $id_tipodocumental, 
                    $serie_tipodocumental,
                    $subserie_tipodocumental,
                    $nombre_tipodocumental
                ) {
        
        $query = "  UPDATE tiposdocumentales 
                    SET serie_tipodocumental = '". $serie_tipodocumental ."',
                        subserie_tipodocumental = '". $subserie_tipodocumental ."',
                        nombre_tipodocumental = '". $nombre_tipodocumental ."'                      
                    WHERE id_tipodocumental = '" . $id_tipodocumental . "'";
       
        return $this->modificarRegistros($query);
       
    }
    
    function eliminar($id_tipodocumental) {
        
        $query = "DELETE FROM tiposdocumentales WHERE id_tipodocumental = '". $id_tipodocumental ."'";        
        $this->modificarRegistros($query);

    }
    
}

?>