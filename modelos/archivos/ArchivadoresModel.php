<?php

class ArchivadoresModel extends ModelBase {
  
    function getTodos() {
        
        $query = "select 
                    archivadores.id_archivador, 
                    archivadores.nombre_archivador,
                    archivadores.ciudad_archivador,
                    archivadores.direccion_archivador,
                    archivadores.ubicacion_archivador
                
                    from archivadores";
        
        $consulta = $this->consulta($query);
        return $consulta;       
               
    }  

    function getDatos($id_archivador) {
       
        $query = "select 	
                    archivadores.id_archivador, 
                    archivadores.nombre_archivador,
                    archivadores.ciudad_archivador,
                    archivadores.direccion_archivador,
                    archivadores.ubicacion_archivador
                
                    from archivadores

                    where archivadores.id_archivador='".$id_archivador."'";
        
         $consulta = $this->consulta($query);
        return $consulta[0];    
        
    }
    
    function insertar(                               
                        $nombre_archivador,
                        $ciudad_archivador,
                        $direccion_archivador,
                        $ubicacion_archivador
                    ){
                
        $query = "INSERT INTO archivadores (
                                nombre_archivador,
                                ciudad_archivador,
                                direccion_archivador,
                                ubicacion_archivador
                            )
                            VALUES(
                                '".$nombre_archivador."',
                                '".$ciudad_archivador."',
                                '".$direccion_archivador."',
                                '".$ubicacion_archivador."'
                            );";
       
        return $this->crear_ultimo_id($query);       
        
    }
    
    function editar(
                    $id_archivador, 
                    $nombre_archivador,
                    $ciudad_archivador,
                    $direccion_archivador,
                    $ubicacion_archivador
                ) {
        
        $query = "  UPDATE archivadores 
                    SET nombre_archivador = '". $nombre_archivador ."',
                        ciudad_archivador = '". $ciudad_archivador ."',
                        direccion_archivador = '". $direccion_archivador ."',
                        ubicacion_archivador = '". $ubicacion_archivador ."'
                    WHERE id_archivador = '" . $id_archivador . "'";
       
        return $this->modificarRegistros($query);
       
    }
    
    function eliminar($id_archivador) {
        
        $query = "DELETE FROM archivadores WHERE id_archivador = '". $id_archivador ."'";        
        return $this->modificarRegistros($query);

    }
    
}

?>