<?php

class DependenciasModel extends ModelBase {
  
    function getTodos() {
        
        $query = "select 
                    dependencias.id_dependencia, 
                    dependencias.codigo_dependencia, 
                    dependencias.nombre_dependencia, 
                    dependencias.jefe_dependencia,

                    CONCAT(empleados.nombres_empleado, ' ', empleados.apellidos_empleado) as nombre_jefe
                
                    from dependencias left join empleados on 
                    dependencias.jefe_dependencia = empleados.id_empleado";
        
        $consulta = $this->consulta($query);
        return $consulta;       
               
    }  

    function getDatos($id_dependencia) {
       
        $query = "select 
        dependencias.id_dependencia, 
        dependencias.codigo_dependencia, 
        dependencias.nombre_dependencia, 
        dependencias.jefe_dependencia,

        CONCAT(empleados.nombres_empleado, ' ',empleados.apellidos_empleado) as nombre_jefe
    
        from dependencias left join empleados on 
        dependencias.jefe_dependencia = empleados.id_empleado
                    where dependencias.id_dependencia='".$id_dependencia."'";
        
         $consulta = $this->consulta($query);
        return $consulta[0];    
        
    }
    
    function insertar(                               
                        $codigo_dependencia,
                        $nombre_dependencia,
                        $jefe_dependencia
                    ){
                
        $query = "INSERT INTO dependencias (                                
                                codigo_dependencia, 
                                nombre_dependencia, 
                                jefe_dependencia
                            )
                            VALUES(
                                '".$codigo_dependencia."',
                                '".$nombre_dependencia."',
                                '".$jefe_dependencia."'
                            );";
       
        return $this->crear_ultimo_id($query);       
        
    }
    
    function editar(
                    $id_dependencia, 
                    $codigo_dependencia,
                    $nombre_dependencia,
                    $jefe_dependencia
                ) {
        
        $query = "  UPDATE dependencias 

                    SET codigo_dependencia = '". $codigo_dependencia ."',
                        nombre_dependencia = '". $nombre_dependencia ."',
                        jefe_dependencia = '". $jefe_dependencia ."'
                        
                    WHERE id_dependencia = '" . $id_dependencia . "'";
       
        return $this->modificarRegistros($query);
       
    }
    
    function eliminar($id_dependencia) {
        
        $query = "DELETE FROM dependencias WHERE id_dependencia = '". $id_dependencia ."'";        
        $this->modificarRegistros($query);

    }
    
}

?>