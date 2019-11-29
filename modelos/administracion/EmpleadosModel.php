<?php

class EmpleadosModel extends ModelBase {
  
    function getTodos() {
        
        $query = "select 
                    empleados.id_empleado, 
                    empleados.documento_empleado, 
                    empleados.tipodocumento_empleado, 
                    empleados.nombres_empleado, 
                    empleados.apellidos_empleado, 
                    empleados.telefono_empleado, 
                    empleados.celular_empleado, 
                    empleados.correo_empleado, 
                    empleados.direccion_empleado, 
                    empleados.ciudad_empleado,
                    empleados.sexo_empleado,
                    empleados.estadocivil_empleado,
                    empleados.fechanacimiento_empleado,
                    empleados.lugarnacimiento_empleado,
                    empleados.estado_empleado,

                    tiposdocumento.codigo_tipodocumento
                
                    from empleados left join 
                            tiposdocumento on empleados.tipodocumento_empleado = tiposdocumento.id_tipodocumento";
        
        $consulta = $this->consulta($query);
        return $consulta;       
               
    }  

    function getDatos($id_empleado) {
       
        $query = "select 
                    empleados.id_empleado, 
                    empleados.documento_empleado, 
                    empleados.tipodocumento_empleado, 
                    empleados.nombres_empleado, 
                    empleados.apellidos_empleado, 
                    empleados.telefono_empleado, 
                    empleados.celular_empleado, 
                    empleados.correo_empleado, 
                    empleados.direccion_empleado, 
                    empleados.ciudad_empleado,
                    empleados.sexo_empleado,
                    empleados.estadocivil_empleado,
                    empleados.fechanacimiento_empleado,
                    empleados.lugarnacimiento_empleado,
                    empleados.estado_empleado,

                    tiposdocumento.codigo_tipodocumento
                
                    from empleados left join 
                            tiposdocumento on empleados.tipodocumento_empleado = tiposdocumento.id_tipodocumento

                    where empleados.id_empleado='".$id_empleado."'";
        
         $consulta = $this->consulta($query);
        return $consulta[0];    
        
    }
    
    function insertar(                               
                    $documento_empleado, 
                    $tipodocumento_empleado, 
                    $nombres_empleado, 
                    $apellidos_empleado, 
                    $telefono_empleado, 
                    $celular_empleado, 
                    $correo_empleado, 
                    $direccion_empleado, 
                    $ciudad_empleado,
                    $sexo_empleado,
                    $estadocivil_empleado,
                    $fechanacimiento_empleado,
                    $lugarnacimiento_empleado,
                    $estado_empleado
                    ){
                
        $query = "INSERT INTO empleados (
                                documento_empleado, 
                                tipodocumento_empleado, 
                                nombres_empleado, 
                                apellidos_empleado, 
                                telefono_empleado, 
                                celular_empleado, 
                                correo_empleado, 
                                direccion_empleado, 
                                ciudad_empleado,
                                sexo_empleado,
                                estadocivil_empleado,
                                fechanacimiento_empleado,
                                lugarnacimiento_empleado,
                                estado_empleado
                            )
                            VALUES(
                                '".$documento_empleado."',
                                '".$tipodocumento_empleado."',
                                '".$nombres_empleado."',
                                '".$apellidos_empleado."',
                                '".$telefono_empleado."',
                                '".$celular_empleado."',
                                '".$correo_empleado."',
                                '".$direccion_empleado."',
                                '".$ciudad_empleado."',
                                '".$sexo_empleado."',
                                '".$estadocivil_empleado."',
                                '".$fechanacimiento_empleado."',
                                '".$lugarnacimiento_empleado."',
                                '".$estado_empleado."'
                            );";
       
        return $this->crear_ultimo_id($query);       
        
    }
    
    function editar(
                    $id_empleado, 
                    $documento_empleado, 
                    $tipodocumento_empleado, 
                    $nombres_empleado, 
                    $apellidos_empleado, 
                    $telefono_empleado, 
                    $celular_empleado, 
                    $correo_empleado, 
                    $direccion_empleado, 
                    $ciudad_empleado,
                    $sexo_empleado,
                    $estadocivil_empleado,
                    $fechanacimiento_empleado,
                    $lugarnacimiento_empleado,
                    $estado_empleado
                ) {
        
        $query = "  UPDATE empleados 
        
                    SET documento_empleado = '". $documento_empleado ."',
                        tipodocumento_empleado = '". $tipodocumento_empleado ."',
                        nombres_empleado = '". $nombres_empleado ."',
                        apellidos_empleado = '". $apellidos_empleado ."',
                        telefono_empleado = '". $telefono_empleado ."',
                        celular_empleado = '". $celular_empleado ."',
                        correo_empleado = '". $correo_empleado ."',
                        direccion_empleado = '". $direccion_empleado ."',
                        ciudad_empleado = '". $ciudad_empleado ."',
                        sexo_empleado = '". $sexo_empleado ."',
                        estadocivil_empleado = '". $estadocivil_empleado ."',
                        fechanacimiento_empleado = '". $fechanacimiento_empleado ."',
                        lugarnacimiento_empleado = '". $lugarnacimiento_empleado ."',
                        estado_empleado = '". $estado_empleado ."'

                    WHERE id_empleado = '" . $id_empleado . "'";
       
        return $this->modificarRegistros($query);
       
    }
    
    function eliminar($id_empleado) {
        
        $query = "DELETE FROM empleados WHERE id_empleado = '". $id_empleado ."'";        
        $this->modificarRegistros($query);

    }
    
}

?>