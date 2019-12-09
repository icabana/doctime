<?php

class TercerosModel extends ModelBase {
  
    function getTodos() {
        
        $query = "select 
                    terceros.id_tercero, 
                    terceros.documento_tercero, 
                    terceros.tipodocumento_tercero, 
                    terceros.nombres_tercero, 
                    terceros.apellidos_tercero, 
                    terceros.telefono_tercero, 
                    terceros.celular_tercero, 
                    terceros.correo_tercero, 
                    terceros.direccion_tercero, 
                    terceros.ciudad_tercero,

                    tiposdocumento.codigo_tipodocumento
                
                    from terceros left join 
                            tiposdocumento on terceros.tipodocumento_tercero = tiposdocumento.id_tipodocumento";
        
        $consulta = $this->consulta($query);
        return $consulta;       
               
    }


    function getDatos($id_tercero) {
       
        $query = "select 
                    terceros.id_tercero, 
                    terceros.documento_tercero, 
                    terceros.tipodocumento_tercero, 
                    terceros.nombres_tercero, 
                    terceros.apellidos_tercero, 
                    terceros.telefono_tercero, 
                    terceros.celular_tercero, 
                    terceros.correo_tercero, 
                    terceros.direccion_tercero, 
                    terceros.ciudad_tercero,

                    tiposdocumento.codigo_tipodocumento
                
                    from terceros left join 
                            tiposdocumento on terceros.tipodocumento_tercero = tiposdocumento.id_tipodocumento

                    where terceros.id_tercero='".$id_tercero."'";
        
         $consulta = $this->consulta($query);
        return $consulta[0];    
        
    }
    
    function insertar(                               
                    $documento_tercero, 
                    $tipodocumento_tercero, 
                    $nombres_tercero, 
                    $apellidos_tercero, 
                    $telefono_tercero, 
                    $celular_tercero, 
                    $correo_tercero, 
                    $direccion_tercero, 
                    $ciudad_tercero
                    ){
                
        $query = "INSERT INTO terceros (
                                documento_tercero, 
                                tipodocumento_tercero, 
                                nombres_tercero, 
                                apellidos_tercero, 
                                telefono_tercero, 
                                celular_tercero, 
                                correo_tercero, 
                                direccion_tercero, 
                                ciudad_tercero
                            )
                            VALUES(
                                '".$documento_tercero."',
                                '".$tipodocumento_tercero."',
                                '".$nombres_tercero."',
                                '".$apellidos_tercero."',
                                '".$telefono_tercero."',
                                '".$celular_tercero."',
                                '".$correo_tercero."',
                                '".$direccion_tercero."',
                                '".$ciudad_tercero."'
                            );";
       
        return $this->crear_ultimo_id($query);       
        
    }
    
    function editar(
                    $id_tercero, 
                    $documento_tercero, 
                    $tipodocumento_tercero, 
                    $nombres_tercero, 
                    $apellidos_tercero, 
                    $telefono_tercero, 
                    $celular_tercero, 
                    $correo_tercero, 
                    $direccion_tercero, 
                    $ciudad_tercero
                ) {
        
        $query = "  UPDATE terceros 
        
                    SET documento_tercero = '". $documento_tercero ."',
                        tipodocumento_tercero = '". $tipodocumento_tercero ."',
                        nombres_tercero = '". $nombres_tercero ."',
                        apellidos_tercero = '". $apellidos_tercero ."',
                        telefono_tercero = '". $telefono_tercero ."',
                        celular_tercero = '". $celular_tercero ."',
                        correo_tercero = '". $correo_tercero ."',
                        direccion_tercero = '". $direccion_tercero ."',
                        ciudad_tercero = '". $ciudad_tercero ."'

                    WHERE id_tercero = '" . $id_tercero . "'";
       
        return $this->modificarRegistros($query);
       
    }
    
    function eliminar($id_tercero) {
        
        $query = "DELETE FROM terceros WHERE id_tercero = '". $id_tercero ."'";        
        $this->modificarRegistros($query);

    }
    
}

?>