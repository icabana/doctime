<?php

class UsuariosModel extends ModelBase {
  
    function getTodos() {
        
        $query = "select 
                    usuarios.id_usuario, 
                    usuarios.nick_usuario, 
                    usuarios.password_usuario,
                    usuarios.estado_usuario,
                    usuarios.rol_usuario,
                
                    roles.nombre_rol
                
                    from usuarios LEFT JOIN roles ON usuarios.rol_usuario = roles.id_rol";
        
        $consulta = $this->consulta($query);
        return $consulta;       
               
    }  

    function getTodosUsuariosEmpleados() {
        
        $query = "select 
                    usuarios.id_usuario, 
                    usuarios.nick_usuario, 
                    usuarios.password_usuario,
                    usuarios.estado_usuario,
                    usuarios.rol_usuario,
                
                    roles.nombre_rol,

                    empleados.id_empleado, 
                    empleados.dependencia_empleado, 
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
                    empleados.usuario_empleado
                
                    from usuarios LEFT JOIN roles ON usuarios.rol_usuario = roles.id_rol
                    RIGHT JOIN empleados ON empleados.usuario_empleado = usuarios.id_usuario";
        
        $consulta = $this->consulta($query);
        return $consulta;       
               
    }  


    function getDatos($id_usuario) {
       
        $query = "select 	
                    usuarios.id_usuario, 
                    usuarios.nick_usuario, 
                    usuarios.password_usuario,
                    usuarios.estado_usuario,
                    usuarios.rol_usuario,
                    
                    roles.NOMBRE_ROL as nombre_rol,

                    empleados.id_empleado, 
                    empleados.dependencia_empleado, 
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
                    empleados.usuario_empleado
                
                    from usuarios LEFT JOIN roles ON usuarios.rol_usuario = roles.id_rol
                    LEFT JOIN empleados ON empleados.usuario_empleado = usuarios.id_usuario

                    where usuarios.id_usuario='".$id_usuario."'";
        
         $consulta = $this->consulta($query);
        return $consulta[0];    
        
    }    

    function existeNick($nick_usuario) {
       
        $query = "select count(usuarios.id_usuario) as cantidad
                
                    from usuarios

                    where usuarios.nick_usuario='".$nick_usuario."'";
        
        $consulta = $this->consulta($query);
        
        if($consulta[0]['cantidad']){
            return true;
        }else{
            return false;
        }    
        
    }
    
    function insertar(                               
                        $nick_usuario, 
                        $password_usuario, 
                        $rol_usuario
                    ){
                
        $query = "INSERT INTO usuarios (
                                nick_usuario, 
                                password_usuario, 
                                rol_usuario
                            )
                            VALUES(
                                '".$nick_usuario."', 
                                '".md5($password_usuario)."', 
                                '".$rol_usuario."'
                            );";
       
        return $this->crear_ultimo_id($query);       
        
    }
    
    function editar(
                    $id_usuario, 
                    $nick_usuario, 
                    $password_usuario, 
                    $password2_usuario, 
                    $estado_usuario, 
                    $rol_usuario
                ) {

        if($password_usuario == $password2_usuario){

            $query = "  UPDATE usuarios SET nick_usuario = '". $nick_usuario ."', 
                                            estado_usuario = '". $estado_usuario ."', 
                                            rol_usuario = '". $rol_usuario ."'
            
                        WHERE id_usuario = '" . $id_usuario . "'";       
            
        }else{

            $query = "  UPDATE usuarios SET nick_usuario = '". $nick_usuario ."', 
                                            password_usuario = '". md5($password_usuario) ."', 
                                            estado_usuario = '". $estado_usuario ."', 
                                            rol_usuario = '". $rol_usuario ."'
            
                        WHERE id_usuario = '" . $id_usuario . "'";       

        }

        return $this->modificarRegistros($query);
       
    }
    
    function eliminar($id_usuario) {
        
        $query = "DELETE FROM usuarios WHERE id_usuario = '". $id_usuario ."'";

        $this->modificarRegistros($query);

    }
    
    function validar($nick_usuario, $password_usuario) {
      
        $query = "select 
                    usuarios.id_usuario, 
                    usuarios.nick_usuario, 
                    usuarios.password_usuario,
                    usuarios.estado_usuario,
                    usuarios.rol_usuario,
                
                    roles.id_rol,
                    roles.nombre_rol,

                    empleados.id_empleado, 
                    empleados.dependencia_empleado, 
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
                    empleados.usuario_empleado
                
                    from usuarios LEFT JOIN roles ON usuarios.rol_usuario = roles.id_rol
                    LEFT JOIN empleados ON empleados.usuario_empleado = usuarios.id_usuario
        
                    WHERE   nick_usuario = '". $nick_usuario . "' AND 
                            usuarios.password_usuario = '" . md5($password_usuario) . "' AND 
                            estado_usuario = '1'";

        $consulta = $this->consulta($query);
           
        if ($consulta) {
            return $consulta[0];
        }else{
            return 1;
        }

    }
    
}

?>