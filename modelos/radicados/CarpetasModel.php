<?php

class CarpetasModel extends ModelBase {
  
    function getTodos() {
        
        $query = "select 
                    carpetas.id_carpeta, 
                    carpetas.usuario_carpeta,
                    carpetas.nombre_carpeta
                
                    from carpetas";
        
        $consulta = $this->consulta($query);
        return $consulta;       
               
    }  

    function getDatos($id_carpeta) {
       
        $query = "select 	
                    carpetas.id_carpeta,  
                    carpetas.usuario_carpeta,
                    carpetas.nombre_carpeta
                
                    from carpetas

                    where carpetas.id_carpeta='".$id_carpeta."'";
        
         $consulta = $this->consulta($query);
        return $consulta[0];    
        
    }

    function getCarpetasPorUsuario($usuario_carpeta) {
       
        $query = "select 	
                    carpetas.id_carpeta,  
                    carpetas.usuario_carpeta,
                    carpetas.nombre_carpeta
                
                    from carpetas

                    where carpetas.usuario_carpeta='".$usuario_carpeta."'";
        
         $consulta = $this->consulta($query);
        return $consulta;    
        
    }
    
    function insertar(
                    $nombre_carpeta
                    ){
                
        $query = "INSERT INTO carpetas (                                 
                                usuario_carpeta, 
                                nombre_carpeta
                            )
                            VALUES(
                                '".$_SESSION['ID_USUARIO']."',
                                '".$nombre_carpeta."'
                            );";
       
        return $this->crear_ultimo_id($query);       
        
    }
    
    function editar(
                    $id_carpeta, 
                    $nombre_carpeta
                ) {
        
        $query = "  UPDATE carpetas 

                    SET nombre_carpeta = '". $nombre_carpeta ."'

                    WHERE id_carpeta = '" . $id_carpeta . "'";
       
        return $this->modificarRegistros($query);
       
    }
    
    function eliminar($id_carpeta) {
        
        $query = "DELETE FROM carpetas WHERE id_carpeta = '". $id_carpeta ."'";        
        $this->modificarRegistros($query);

    }
    
}

?>