<?php

class TiposdocumentalesModel extends ModelBase {
  
    function getTodos() {
        
        $query = "select 
                    tiposdocumentales.id_tipodocumental, 
                    tiposdocumentales.nombre_tipodocumental
                
                    from tiposdocumentales";
        
        $consulta = $this->consulta($query);
        return $consulta;       
               
    }  

    function getDatos($id_tipodocumental) {
       
        $query = "select 	
                    tiposdocumentales.id_tipodocumental, 
                    tiposdocumentales.nombre_tipodocumental
                
                    from tiposdocumentales

                    where tiposdocumentales.id_tipodocumental='".$id_tipodocumental."'";
        
         $consulta = $this->consulta($query);
        return $consulta[0];    
        
    }
    
    function insertar(                               
                        $nombre_tipodocumental
                    ){
                
        $query = "INSERT INTO tiposdocumentales (
                                nombre_tipodocumental
                            )
                            VALUES(
                                '".$nombre_tipodocumental."'
                            );";
       
        return $this->crear_ultimo_id($query);       
        
    }
    
    function editar(
                    $id_tipodocumental, 
                    $nombre_tipodocumental
                ) {
        
        $query = "  UPDATE tiposdocumentales SET nombre_tipodocumental = '". $nombre_tipodocumental ."'           
                    WHERE id_tipodocumental = '" . $id_tipodocumental . "'";
       
        return $this->modificarRegistros($query);
       
    }
    
    function eliminar($id_tipodocumental) {
        
        $query = "DELETE FROM tiposdocumentales WHERE id_tipodocumental = '". $id_tipodocumental ."'";        
        $this->modificarRegistros($query);

    }
    
}

?>