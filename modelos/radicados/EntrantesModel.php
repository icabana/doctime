<?php

class EntrantesModel extends ModelBase {
  
    function getTodos() {
        
        $query = "select 
                    entrantes.id_entrante, 
                    entrantes.numero_entrante,
                    entrantes.remitente_entrante,
                    entrantes.enviadopor_entrante,
                    entrantes.destinatario_entrante,
                    entrantes.fecharadicado_entrante,
                    entrantes.fechamaxima_entrante,
                    entrantes.prioridad_entrante,
                    entrantes.numerofolios_entrante,
                    entrantes.descripcionfolios_entrante,
                    entrantes.asunto_entrante,
                    entrantes.tiporadicado_entrante,
                    entrantes.medio_entrante,
                    entrantes.responsable_entrante,
                    entrantes.carpeta_entrante,
                    entrantes.serie_entrante,
                    entrantes.subserie_entrante,
                    entrantes.tipodocumental_entrante,
                    entrantes.saliente_entrante,
                    
                    entrantes.estado_entrante,
                    entrantes.tieneanexos_entrante,

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

                    terceros.id_tercero, 
                    terceros.documento_tercero, 
                    terceros.tipodocumento_tercero, 
                    terceros.nombre_tercero,  
                    terceros.telefono_tercero, 
                    terceros.celular_tercero, 
                    terceros.correo_tercero, 
                    terceros.direccion_tercero, 
                    terceros.ciudad_tercero,

                    estadosradicados.id_estado,
                    estadosradicados.nombre_estado,

                    estados2.id_estado as id_estado2,
                    estados2.nombre_estado as nombre_estado2,

                    tiposradicado.nombre_tiporadicado
                
                    from entrantes 
                            left join terceros ON entrantes.remitente_entrante = terceros.id_tercero
                            left join empleados ON entrantes.destinatario_entrante = empleados.id_empleado                            
                            left join empleados as empleados2 ON entrantes.responsable_entrante = empleados2.id_empleado
                            left join estadosradicados ON entrantes.estado_entrante = estadosradicados.id_estado
                            left join tiposradicado ON entrantes.tiporadicado_entrante = tiposradicado.id_tiporadicado
                            left join estados2 ON entrantes.tieneanexos_entrante = estados2.id_estado
                            
                    where entrantes.carpeta_entrante IS NULL or entrantes.carpeta_entrante = 0
                    
                    order by entrantes.numero_entrante desc";
        
        $consulta = $this->consulta($query);
        return $consulta;       
               
    }  


    function getTodosTodos() {
        
        $query = "select 
                    entrantes.id_entrante, 
                    entrantes.numero_entrante,
                    entrantes.remitente_entrante,
                    entrantes.enviadopor_entrante,
                    entrantes.destinatario_entrante,
                    entrantes.fecharadicado_entrante,
                    entrantes.fechamaxima_entrante,
                    entrantes.prioridad_entrante,
                    entrantes.numerofolios_entrante,
                    entrantes.descripcionfolios_entrante,
                    entrantes.asunto_entrante,
                    entrantes.tiporadicado_entrante,
                    entrantes.medio_entrante,
                    entrantes.responsable_entrante,
                    entrantes.carpeta_entrante,
                    entrantes.serie_entrante,
                    entrantes.subserie_entrante,
                    entrantes.tipodocumental_entrante,
                    entrantes.saliente_entrante,
                    
                    entrantes.estado_entrante,
                    entrantes.tieneanexos_entrante,

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

                    terceros.id_tercero, 
                    terceros.documento_tercero, 
                    terceros.tipodocumento_tercero, 
                    terceros.nombre_tercero,  
                    terceros.telefono_tercero, 
                    terceros.celular_tercero, 
                    terceros.correo_tercero, 
                    terceros.direccion_tercero, 
                    terceros.ciudad_tercero,

                    estadosradicados.id_estado,
                    estadosradicados.nombre_estado,

                    estados2.id_estado as id_estado2,
                    estados2.nombre_estado as nombre_estado2,

                    tiposradicado.nombre_tiporadicado
                
                    from entrantes 
                            left join terceros ON entrantes.remitente_entrante = terceros.id_tercero
                            left join empleados ON entrantes.destinatario_entrante = empleados.id_empleado
                            
                            left join empleados as empleados2 ON entrantes.responsable_entrante = empleados2.id_empleado
                            left join estadosradicados ON entrantes.estado_entrante = estadosradicados.id_estado
                            left join tiposradicado ON entrantes.tiporadicado_entrante = tiposradicado.id_tiporadicado
                            left join estados2 ON entrantes.tieneanexos_entrante = estados2.id_estado
                    
                            order by entrantes.numero_entrante";
        
        $consulta = $this->consulta($query);
        return $consulta;       
               
    }  


    function getTodosActivos() {
        
        $query = "select 
                    entrantes.id_entrante, 
                    entrantes.numero_entrante,
                    entrantes.remitente_entrante,
                    entrantes.enviadopor_entrante,
                    entrantes.destinatario_entrante,
                    entrantes.fecharadicado_entrante,
                    entrantes.fechamaxima_entrante,
                    entrantes.prioridad_entrante,
                    entrantes.numerofolios_entrante,
                    entrantes.descripcionfolios_entrante,
                    entrantes.asunto_entrante,
                    entrantes.tiporadicado_entrante,
                    entrantes.medio_entrante,
                    entrantes.responsable_entrante,
                    entrantes.carpeta_entrante,
                    entrantes.serie_entrante,
                    entrantes.subserie_entrante,
                    entrantes.tipodocumental_entrante,
                    entrantes.saliente_entrante,
                    
                    entrantes.estado_entrante,
                    entrantes.tieneanexos_entrante,

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

                    terceros.id_tercero, 
                    terceros.documento_tercero, 
                    terceros.tipodocumento_tercero, 
                    terceros.nombre_tercero,  
                    terceros.telefono_tercero, 
                    terceros.celular_tercero, 
                    terceros.correo_tercero, 
                    terceros.direccion_tercero, 
                    terceros.ciudad_tercero,

                    estadosradicados.id_estado,
                    estadosradicados.nombre_estado,

                    estados2.id_estado as id_estado2,
                    estados2.nombre_estado as nombre_estado2,

                    tiposradicado.nombre_tiporadicado
                
                    from entrantes 
                            left join terceros ON entrantes.remitente_entrante = terceros.id_tercero
                            left join empleados ON entrantes.destinatario_entrante = empleados.id_empleado
                            
                            left join empleados as empleados2 ON entrantes.responsable_entrante = empleados2.id_empleado
                            left join estadosradicados ON entrantes.estado_entrante = estadosradicados.id_estado
                            left join tiposradicado ON entrantes.tiporadicado_entrante = tiposradicado.id_tiporadicado
                            left join estados2 ON entrantes.tieneanexos_entrante = estados2.id_estado
                            
                    where entrantes.estado_entrante = '1' 
                    and (entrantes.carpeta_entrante IS NULL or entrantes.carpeta_entrante = 0)
                    
                    order by entrantes.numero_entrante";
        
        $consulta = $this->consulta($query);
        return $consulta;       
               
    }  



    function verRadicadosResponsable($id_empleado) {
        
        $query = "select 
                    entrantes.id_entrante, 
                    entrantes.numero_entrante,
                    entrantes.remitente_entrante,
                    entrantes.enviadopor_entrante,
                    entrantes.destinatario_entrante,
                    entrantes.fecharadicado_entrante,
                    entrantes.fechamaxima_entrante,
                    entrantes.prioridad_entrante,
                    entrantes.numerofolios_entrante,
                    entrantes.descripcionfolios_entrante,
                    entrantes.asunto_entrante,
                    entrantes.tiporadicado_entrante,
                    entrantes.medio_entrante,
                    entrantes.responsable_entrante,
                    entrantes.carpeta_entrante,
                    entrantes.serie_entrante,
                    entrantes.subserie_entrante,
                    entrantes.tipodocumental_entrante,
                    entrantes.saliente_entrante,
                    
                    entrantes.estado_entrante,
                    entrantes.tieneanexos_entrante,

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

                    terceros.id_tercero, 
                    terceros.documento_tercero, 
                    terceros.tipodocumento_tercero, 
                    terceros.nombre_tercero,  
                    terceros.telefono_tercero, 
                    terceros.celular_tercero, 
                    terceros.correo_tercero, 
                    terceros.direccion_tercero, 
                    terceros.ciudad_tercero,

                    estadosradicados.id_estado,
                    estadosradicados.nombre_estado,

                    estados2.id_estado as id_estado2,
                    estados2.nombre_estado as nombre_estado2,

                    tiposradicado.nombre_tiporadicado
                
                    from entrantes 
                            left join terceros ON entrantes.remitente_entrante = terceros.id_tercero
                            left join empleados ON entrantes.destinatario_entrante = empleados.id_empleado
                            
                            left join empleados as empleados2 ON entrantes.responsable_entrante = empleados2.id_empleado
                            left join estadosradicados ON entrantes.estado_entrante = estadosradicados.id_estado
                            left join tiposradicado ON entrantes.tiporadicado_entrante = tiposradicado.id_tiporadicado
                            left join estados2 ON entrantes.tieneanexos_entrante = estados2.id_estado
                            
                    where entrantes.responsable_entrante = '".$id_empleado."'
                    
                    order by entrantes.numero_entrante";
        
        $consulta = $this->consulta($query);
        return $consulta;       
               
    }  

    
    

    function verRadicadosDependencia($id_dependencia) {
        
        $query = "select 
                    entrantes.id_entrante, 
                    entrantes.numero_entrante,
                    entrantes.remitente_entrante,
                    entrantes.enviadopor_entrante,
                    entrantes.destinatario_entrante,
                    entrantes.fecharadicado_entrante,
                    entrantes.fechamaxima_entrante,
                    entrantes.prioridad_entrante,
                    entrantes.numerofolios_entrante,
                    entrantes.descripcionfolios_entrante,
                    entrantes.asunto_entrante,
                    entrantes.tiporadicado_entrante,
                    entrantes.medio_entrante,
                    entrantes.responsable_entrante,
                    entrantes.carpeta_entrante,
                    entrantes.serie_entrante,
                    entrantes.subserie_entrante,
                    entrantes.tipodocumental_entrante,
                    entrantes.saliente_entrante,
                    
                    entrantes.estado_entrante,
                    entrantes.tieneanexos_entrante,

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

                    terceros.id_tercero, 
                    terceros.documento_tercero, 
                    terceros.tipodocumento_tercero, 
                    terceros.nombre_tercero,  
                    terceros.telefono_tercero, 
                    terceros.celular_tercero, 
                    terceros.correo_tercero, 
                    terceros.direccion_tercero, 
                    terceros.ciudad_tercero,

                    estadosradicados.id_estado,
                    estadosradicados.nombre_estado,

                    estados2.id_estado as id_estado2,
                    estados2.nombre_estado as nombre_estado2,

                    tiposradicado.nombre_tiporadicado
                
                    from entrantes 
                            left join terceros ON entrantes.remitente_entrante = terceros.id_tercero
                            left join empleados ON entrantes.destinatario_entrante = empleados.id_empleado
                            
                            left join empleados as empleados2 ON entrantes.responsable_entrante = empleados2.id_empleado
                            left join estadosradicados ON entrantes.estado_entrante = estadosradicados.id_estado
                            left join tiposradicado ON entrantes.tiporadicado_entrante = tiposradicado.id_tiporadicado
                            left join estados2 ON entrantes.tieneanexos_entrante = estados2.id_estado
                            
                    where empleados2.dependencia_empleado = '".$id_dependencia."'
                    
                    order by entrantes.numero_entrante";
        
        $consulta = $this->consulta($query);
        return $consulta;       
               
    }  


    function verRadicadosTiporadicado($id_tiporadicado) {
        
        $query = "select 
                    entrantes.id_entrante, 
                    entrantes.numero_entrante,
                    entrantes.remitente_entrante,
                    entrantes.enviadopor_entrante,
                    entrantes.destinatario_entrante,
                    entrantes.fecharadicado_entrante,
                    entrantes.fechamaxima_entrante,
                    entrantes.prioridad_entrante,
                    entrantes.numerofolios_entrante,
                    entrantes.descripcionfolios_entrante,
                    entrantes.asunto_entrante,
                    entrantes.tiporadicado_entrante,
                    entrantes.medio_entrante,
                    entrantes.responsable_entrante,
                    entrantes.carpeta_entrante,
                    entrantes.serie_entrante,
                    entrantes.subserie_entrante,
                    entrantes.tipodocumental_entrante,
                    entrantes.saliente_entrante,
                    
                    entrantes.estado_entrante,
                    entrantes.tieneanexos_entrante,

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

                    terceros.id_tercero, 
                    terceros.documento_tercero, 
                    terceros.tipodocumento_tercero, 
                    terceros.nombre_tercero,  
                    terceros.telefono_tercero, 
                    terceros.celular_tercero, 
                    terceros.correo_tercero, 
                    terceros.direccion_tercero, 
                    terceros.ciudad_tercero,

                    estadosradicados.id_estado,
                    estadosradicados.nombre_estado,

                    estados2.id_estado as id_estado2,
                    estados2.nombre_estado as nombre_estado2,

                    tiposradicado.nombre_tiporadicado
                
                    from entrantes 
                            left join terceros ON entrantes.remitente_entrante = terceros.id_tercero
                            left join empleados ON entrantes.destinatario_entrante = empleados.id_empleado
                            
                            left join empleados as empleados2 ON entrantes.responsable_entrante = empleados2.id_empleado
                            left join estadosradicados ON entrantes.estado_entrante = estadosradicados.id_estado
                            left join tiposradicado ON entrantes.tiporadicado_entrante = tiposradicado.id_tiporadicado
                            left join estados2 ON entrantes.tieneanexos_entrante = estados2.id_estado
                            
                    where entrantes.tiporadicado_entrante = '".$id_tiporadicado."'
                    
                    order by entrantes.numero_entrante";
        
        $consulta = $this->consulta($query);
        return $consulta;       
               
    }  


    function getTodosFinalizados() {
        
        $query = "select 
                    entrantes.id_entrante, 
                    entrantes.numero_entrante,
                    entrantes.remitente_entrante,
                    entrantes.enviadopor_entrante,
                    entrantes.destinatario_entrante,
                    entrantes.fecharadicado_entrante,
                    entrantes.fechamaxima_entrante,
                    entrantes.prioridad_entrante,
                    entrantes.numerofolios_entrante,
                    entrantes.descripcionfolios_entrante,
                    entrantes.asunto_entrante,
                    entrantes.tiporadicado_entrante,
                    entrantes.medio_entrante,
                    entrantes.responsable_entrante,
                    entrantes.carpeta_entrante,
                    entrantes.serie_entrante,
                    entrantes.subserie_entrante,
                    entrantes.tipodocumental_entrante,
                    entrantes.saliente_entrante,
                    
                    entrantes.estado_entrante,
                    entrantes.tieneanexos_entrante,

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

                    terceros.id_tercero, 
                    terceros.documento_tercero, 
                    terceros.tipodocumento_tercero, 
                    terceros.nombre_tercero,  
                    terceros.telefono_tercero, 
                    terceros.celular_tercero, 
                    terceros.correo_tercero, 
                    terceros.direccion_tercero, 
                    terceros.ciudad_tercero,

                    estadosradicados.id_estado,
                    estadosradicados.nombre_estado,

                    estados2.id_estado as id_estado2,
                    estados2.nombre_estado as nombre_estado2,

                    tiposradicado.nombre_tiporadicado
                
                    from entrantes 
                            left join terceros ON entrantes.remitente_entrante = terceros.id_tercero
                            left join empleados ON entrantes.destinatario_entrante = empleados.id_empleado
                            
                            left join empleados as empleados2 ON entrantes.responsable_entrante = empleados2.id_empleado
                            left join estadosradicados ON entrantes.estado_entrante = estadosradicados.id_estado
                            left join tiposradicado ON entrantes.tiporadicado_entrante = tiposradicado.id_tiporadicado
                            left join estados2 ON entrantes.tieneanexos_entrante = estados2.id_estado
                            
                    where entrantes.estado_entrante = '2' and
                    (entrantes.carpeta_entrante IS NULL or entrantes.carpeta_entrante = 0)
                    
                    order by entrantes.numero_entrante";
        
        $consulta = $this->consulta($query);
        return $consulta;       
               
    }  



    function getEntrantesPorEstadoyFecha($estado_entrante, $fecha1, $fecha2, $remitente, $destinatario) {
        
        $consulta_fecha = "";
        
        if($fecha1 != "" && $fecha2 != ""){           
            $consulta_fecha = "and entrantes.fecharadicado_entrante BETWEEN '".$fecha1."' AND  '".$fecha2."'" ;
            }else{           
            $consulta_fecha = " " ;           
        }
        
        $consulta_estado = "";
            
        if($estado_entrante == "" || $estado_entrante == "TODOS"){           
            $consulta_estado = " " ;           
        }else{           
            $consulta_estado =  " and entrantes.estado_entrante = '".$estado_entrante."' ";           
        }
            
        if($remitente == "" || $remitente == "TODOS"){           
            $consulta_remitente = " " ;           
        }else{           
            $consulta_remitente =  " and entrantes.remitente_entrante = '".$remitente."' ";           
        }
            
        if($destinatario == "" || $destinatario == "TODOS"){
            $consulta_destinatario = " " ;           
        }else{           
            $consulta_destinatario =  " and entrantes.destinatario_entrante = '".$destinatario."' ";           
        }
               
        $query = "select 
            entrantes.id_entrante, 
            entrantes.numero_entrante,
            entrantes.remitente_entrante,
            entrantes.enviadopor_entrante,
            entrantes.destinatario_entrante,
            entrantes.fecharadicado_entrante,
            entrantes.fechamaxima_entrante,
            entrantes.prioridad_entrante,
            entrantes.numerofolios_entrante,
            entrantes.descripcionfolios_entrante,
            entrantes.asunto_entrante,
            entrantes.tiporadicado_entrante,
            entrantes.medio_entrante,
            entrantes.responsable_entrante,
            entrantes.carpeta_entrante,
            entrantes.serie_entrante,
            entrantes.subserie_entrante,
            entrantes.tipodocumental_entrante,
            entrantes.saliente_entrante,
            
            entrantes.estado_entrante,
            entrantes.tieneanexos_entrante,

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

            empleados2.nombres_empleado as nombres_responsable, 
            empleados2.apellidos_empleado as apellidos_responsable, 

            terceros.id_tercero, 
            terceros.documento_tercero, 
            terceros.tipodocumento_tercero, 
            terceros.nombre_tercero,  
            terceros.telefono_tercero, 
            terceros.celular_tercero, 
            terceros.correo_tercero, 
            terceros.direccion_tercero, 
            terceros.ciudad_tercero,

            estadosradicados.id_estado,
            estadosradicados.nombre_estado,

            estados2.id_estado as id_estado2,
            estados2.nombre_estado as nombre_estado2,

            tiposradicado.nombre_tiporadicado
 
            from entrantes 
             left join terceros ON entrantes.remitente_entrante = terceros.id_tercero
             left join empleados ON entrantes.destinatario_entrante = empleados.id_empleado
             
             left join empleados as empleados2 ON entrantes.responsable_entrante = empleados2.id_empleado
             left join estadosradicados ON entrantes.estado_entrante = estadosradicados.id_estado
             left join tiposradicado ON entrantes.tiporadicado_entrante = tiposradicado.id_tiporadicado
             left join estados2 ON entrantes.tieneanexos_entrante = estados2.id_estado

                where entrantes.id_entrante != '' ".$consulta_estado.$consulta_fecha.$consulta_remitente.$consulta_destinatario;
        
                $consulta = $this->consulta($query);
               return $consulta;       
               
    }  

    function getTodosArchivados() {
        
        $query = "select 
                    entrantes.id_entrante, 
                    entrantes.numero_entrante,
                    entrantes.remitente_entrante,
                    entrantes.enviadopor_entrante,
                    entrantes.destinatario_entrante,
                    entrantes.fecharadicado_entrante,
                    entrantes.fechamaxima_entrante,
                    entrantes.prioridad_entrante,
                    entrantes.numerofolios_entrante,
                    entrantes.descripcionfolios_entrante,
                    entrantes.asunto_entrante,
                    entrantes.tiporadicado_entrante,
                    entrantes.medio_entrante,
                    entrantes.responsable_entrante,
                    entrantes.carpeta_entrante,
                    entrantes.serie_entrante,
                    entrantes.subserie_entrante,
                    entrantes.tipodocumental_entrante,
                    entrantes.saliente_entrante,
                    
                    entrantes.estado_entrante,
                    entrantes.tieneanexos_entrante,

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

                    terceros.id_tercero, 
                    terceros.documento_tercero, 
                    terceros.tipodocumento_tercero, 
                    terceros.nombre_tercero,  
                    terceros.telefono_tercero, 
                    terceros.celular_tercero, 
                    terceros.correo_tercero, 
                    terceros.direccion_tercero, 
                    terceros.ciudad_tercero,

                    estadosradicados.id_estado,
                    estadosradicados.nombre_estado,

                    estados2.id_estado as id_estado2,
                    estados2.nombre_estado as nombre_estado2,

                    tiposradicado.nombre_tiporadicado
                
                    from entrantes 
                            left join terceros ON entrantes.remitente_entrante = terceros.id_tercero
                            left join empleados ON entrantes.destinatario_entrante = empleados.id_empleado
                            
                            left join empleados as empleados2 ON entrantes.responsable_entrante = empleados2.id_empleado
                            left join estadosradicados ON entrantes.estado_entrante = estadosradicados.id_estado
                            left join tiposradicado ON entrantes.tiporadicado_entrante = tiposradicado.id_tiporadicado
                            left join estados2 ON entrantes.tieneanexos_entrante = estados2.id_estado
                            
                    where entrantes.estado_entrante = '3' and 
                    (entrantes.carpeta_entrante IS NULL or entrantes.carpeta_entrante = 0)
                    
                    order by entrantes.numero_entrante";
        
        $consulta = $this->consulta($query);
        return $consulta;       
               
    }  



    function getTodosUsuario() {
        
        $query = "select 
                    entrantes.id_entrante, 
                    entrantes.numero_entrante,
                    entrantes.remitente_entrante,
                    entrantes.enviadopor_entrante,
                    entrantes.destinatario_entrante,
                    entrantes.fecharadicado_entrante,
                    entrantes.fechamaxima_entrante,
                    entrantes.prioridad_entrante,
                    entrantes.numerofolios_entrante,
                    entrantes.descripcionfolios_entrante,
                    entrantes.asunto_entrante,
                    entrantes.tiporadicado_entrante,
                    entrantes.medio_entrante,
                    entrantes.responsable_entrante,
                    entrantes.carpeta_entrante,
                    entrantes.serie_entrante,
                    entrantes.subserie_entrante,
                    entrantes.tipodocumental_entrante,
                    entrantes.saliente_entrante,
                    
                    entrantes.estado_entrante,
                    entrantes.tieneanexos_entrante,

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

                    terceros.id_tercero, 
                    terceros.documento_tercero, 
                    terceros.tipodocumento_tercero, 
                    terceros.nombre_tercero,  
                    terceros.telefono_tercero, 
                    terceros.celular_tercero, 
                    terceros.correo_tercero, 
                    terceros.direccion_tercero, 
                    terceros.ciudad_tercero,

                    estadosradicados.id_estado,
                    estadosradicados.nombre_estado,

                    estados2.id_estado as id_estado2,
                    estados2.nombre_estado as nombre_estado2,

                    tiposradicado.nombre_tiporadicado
                
                    from entrantes 
                            left join terceros ON entrantes.remitente_entrante = terceros.id_tercero
                            left join empleados ON entrantes.destinatario_entrante = empleados.id_empleado                            
                            left join empleados as empleados2 ON entrantes.responsable_entrante = empleados2.id_empleado
                            left join estadosradicados ON entrantes.estado_entrante = estadosradicados.id_estado
                            left join tiposradicado ON entrantes.tiporadicado_entrante = tiposradicado.id_tiporadicado
                            left join estados2 ON entrantes.tieneanexos_entrante = estados2.id_estado
                            
                    where (entrantes.carpeta_entrante IS NULL or entrantes.carpeta_entrante = 0) and 
                            entrantes.estado_entrante != '2' and 
                            entrantes.responsable_entrante = '".$_SESSION['id_empleado']."'
                    
                    order by entrantes.numero_entrante";
        
        $consulta = $this->consulta($query);
        return $consulta;       
               
    } 


    function getTodosUsuarioFinalizados() {
        
        $query = "select 
                    entrantes.id_entrante, 
                    entrantes.numero_entrante,
                    entrantes.remitente_entrante,
                    entrantes.enviadopor_entrante,
                    entrantes.destinatario_entrante,
                    entrantes.fecharadicado_entrante,
                    entrantes.fechamaxima_entrante,
                    entrantes.prioridad_entrante,
                    entrantes.numerofolios_entrante,
                    entrantes.descripcionfolios_entrante,
                    entrantes.asunto_entrante,
                    entrantes.tiporadicado_entrante,
                    entrantes.medio_entrante,
                    entrantes.responsable_entrante,
                    entrantes.carpeta_entrante,
                    entrantes.serie_entrante,
                    entrantes.subserie_entrante,
                    entrantes.tipodocumental_entrante,
                    entrantes.saliente_entrante,
                    
                    entrantes.estado_entrante,
                    entrantes.tieneanexos_entrante,

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

                    terceros.id_tercero, 
                    terceros.documento_tercero, 
                    terceros.tipodocumento_tercero, 
                    terceros.nombre_tercero,  
                    terceros.telefono_tercero, 
                    terceros.celular_tercero, 
                    terceros.correo_tercero, 
                    terceros.direccion_tercero, 
                    terceros.ciudad_tercero,

                    estadosradicados.id_estado,
                    estadosradicados.nombre_estado,

                    estados2.id_estado as id_estado2,
                    estados2.nombre_estado as nombre_estado2,

                    tiposradicado.nombre_tiporadicado
                
                    from entrantes 
                            left join terceros ON entrantes.remitente_entrante = terceros.id_tercero
                            left join empleados ON entrantes.destinatario_entrante = empleados.id_empleado                            
                            left join empleados as empleados2 ON entrantes.responsable_entrante = empleados2.id_empleado
                            left join estadosradicados ON entrantes.estado_entrante = estadosradicados.id_estado
                            left join tiposradicado ON entrantes.tiporadicado_entrante = tiposradicado.id_tiporadicado
                            left join estados2 ON entrantes.tieneanexos_entrante = estados2.id_estado
                            
                    where (entrantes.carpeta_entrante IS NULL or entrantes.carpeta_entrante = 0) and 
                            entrantes.estado_entrante = '2' and 
                            entrantes.responsable_entrante = '".$_SESSION['id_empleado']."'
                    
                    order by entrantes.numero_entrante";
        
        $consulta = $this->consulta($query);
        return $consulta;       
               
    } 

    
    function getPorFinalizar() {
        
        $fecha_actual = date("Y-m-d");

        $query = "SELECT count(entrantes.id_entrante) as numero,

                    empleados.id_empleado, 
                    empleados.documento_empleado, 
                    empleados.tipodocumento_empleado, 
                    empleados.nombres_empleado, 
                    empleados.apellidos_empleado, 
                    empleados.telefono_empleado, 
                    empleados.celular_empleado, 
                    empleados.correo_empleado, 
                    empleados.direccion_empleado, 
                    empleados.ciudad_empleado
                
                FROM entrantes 
                           
                LEFT JOIN empleados ON entrantes.responsable_entrante = empleados.id_empleado     
                                 
                WHERE   entrantes.estado_entrante = 1 and 
                        entrantes.fechamaxima_entrante < '".$fecha_actual."' and
                        empleados.nombres_empleado != ''
                                
                GROUP BY empleados.id_empleado
                        
                ORDER BY numero desc";
        
        $consulta = $this->consulta($query);
        return $consulta;       
               
    }  



    function getTrazabilidad($radicado_trazabilidad) {
        
        $query = "select 
                    trazabilidad_entrantes.id_trazabilidad, 
                    trazabilidad_entrantes.radicado_trazabilidad,
                    trazabilidad_entrantes.accion_trazabilidad,
                    trazabilidad_entrantes.usuario_trazabilidad,
                    trazabilidad_entrantes.fecha_trazabilidad,

                    usuarios.nick_usuario
                
                    from trazabilidad_entrantes
                            left join usuarios ON trazabilidad_entrantes.usuario_trazabilidad = usuarios.id_usuario
                            
                    where trazabilidad_entrantes.radicado_trazabilidad = '".$radicado_trazabilidad."'
                    
                    order by trazabilidad_entrantes.fecha_trazabilidad desc";
        
        $consulta = $this->consulta($query);
        return $consulta;       
               
    }  



    function getTodosPorCarpeta($carpeta_entrante) {
        
        $query = "select 
                    entrantes.id_entrante, 
                    entrantes.numero_entrante,
                    entrantes.remitente_entrante,
                    entrantes.enviadopor_entrante,
                    entrantes.destinatario_entrante,
                    entrantes.fecharadicado_entrante,
                    entrantes.fechamaxima_entrante,
                    entrantes.prioridad_entrante,
                    entrantes.numerofolios_entrante,
                    entrantes.descripcionfolios_entrante,
                    entrantes.asunto_entrante,
                    entrantes.tiporadicado_entrante,
                    entrantes.medio_entrante,
                    entrantes.responsable_entrante,
                    entrantes.carpeta_entrante,
                    entrantes.serie_entrante,
                    entrantes.subserie_entrante,
                    entrantes.tipodocumental_entrante,
                    entrantes.saliente_entrante,
                    
                    entrantes.estado_entrante,
                    entrantes.tieneanexos_entrante,

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

                    terceros.id_tercero, 
                    terceros.documento_tercero, 
                    terceros.tipodocumento_tercero, 
                    terceros.nombre_tercero,  
                    terceros.telefono_tercero, 
                    terceros.celular_tercero, 
                    terceros.correo_tercero, 
                    terceros.direccion_tercero, 
                    terceros.ciudad_tercero,

                    estadosradicados.id_estado,
                    estadosradicados.nombre_estado,

                    estados2.id_estado as id_estado2,
                    estados2.nombre_estado as nombre_estado2,

                    tiposradicado.nombre_tiporadicado
                
                    from entrantes 
                            left join terceros ON entrantes.remitente_entrante = terceros.id_tercero
                            left join empleados ON entrantes.destinatario_entrante = empleados.id_empleado
                            
                            left join empleados as empleados2 ON entrantes.responsable_entrante = empleados2.id_empleado
                            left join estadosradicados ON entrantes.estado_entrante = estadosradicados.id_estado
                            left join tiposradicado ON entrantes.tiporadicado_entrante = tiposradicado.id_tiporadicado
                            left join estados2 ON entrantes.tieneanexos_entrante = estados2.id_estado
                            
                    where entrantes.carpeta_entrante = '".$carpeta_entrante."'
                    
                    order by entrantes.numero_entrante";
        
        $consulta = $this->consulta($query);
        return $consulta;       
               
    }

    


    function getTodosPorCarpetaPorUsuario($carpeta_entrante) {
        
        $query = "select 
                    entrantes.id_entrante, 
                    entrantes.numero_entrante,
                    entrantes.remitente_entrante,
                    entrantes.enviadopor_entrante,
                    entrantes.destinatario_entrante,
                    entrantes.fecharadicado_entrante,
                    entrantes.fechamaxima_entrante,
                    entrantes.prioridad_entrante,
                    entrantes.numerofolios_entrante,
                    entrantes.descripcionfolios_entrante,
                    entrantes.asunto_entrante,
                    entrantes.tiporadicado_entrante,
                    entrantes.medio_entrante,
                    entrantes.responsable_entrante,
                    entrantes.carpeta_entrante,
                    entrantes.serie_entrante,
                    entrantes.subserie_entrante,
                    entrantes.tipodocumental_entrante,
                    entrantes.saliente_entrante,
                    
                    entrantes.estado_entrante,
                    entrantes.tieneanexos_entrante,

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

                    terceros.id_tercero, 
                    terceros.documento_tercero, 
                    terceros.tipodocumento_tercero, 
                    terceros.nombre_tercero,  
                    terceros.telefono_tercero, 
                    terceros.celular_tercero, 
                    terceros.correo_tercero, 
                    terceros.direccion_tercero, 
                    terceros.ciudad_tercero,

                    estadosradicados.id_estado,
                    estadosradicados.nombre_estado,

                    estados2.id_estado as id_estado2,
                    estados2.nombre_estado as nombre_estado2,

                    tiposradicado.nombre_tiporadicado
                
                    from entrantes 
                            left join terceros ON entrantes.remitente_entrante = terceros.id_tercero
                            left join empleados ON entrantes.destinatario_entrante = empleados.id_empleado
                            
                            left join empleados as empleados2 ON entrantes.responsable_entrante = empleados2.id_empleado
                            left join estadosradicados ON entrantes.estado_entrante = estadosradicados.id_estado
                            left join tiposradicado ON entrantes.tiporadicado_entrante = tiposradicado.id_tiporadicado
                            left join estados2 ON entrantes.tieneanexos_entrante = estados2.id_estado
                            
                    where entrantes.carpeta_entrante = '".$carpeta_entrante."' and
                                    entrantes.responsable_entrante = '".$_SESSION['id_empleado']."'
                    
                    order by entrantes.numero_entrante";
        
        $consulta = $this->consulta($query);
        return $consulta;       
               
    }


    function getDatos($id_entrante) {
       
        $query = "select 
                    entrantes.id_entrante, 
                    entrantes.numero_entrante,
                    entrantes.remitente_entrante,
                    entrantes.enviadopor_entrante,
                    entrantes.destinatario_entrante,
                    entrantes.fecharadicado_entrante,
                    entrantes.fechamaxima_entrante,
                    entrantes.prioridad_entrante,
                    entrantes.numerofolios_entrante,
                    entrantes.descripcionfolios_entrante,
                    entrantes.asunto_entrante,
                    entrantes.tiporadicado_entrante,
                    entrantes.medio_entrante,
                    entrantes.responsable_entrante,
                    entrantes.carpeta_entrante,
                    entrantes.serie_entrante,
                    entrantes.subserie_entrante,
                    entrantes.tipodocumental_entrante,
                    entrantes.saliente_entrante,
                    
                    entrantes.estado_entrante,
                    entrantes.tieneanexos_entrante,

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

                    terceros.id_tercero, 
                    terceros.documento_tercero, 
                    terceros.tipodocumento_tercero, 
                    terceros.nombre_tercero,
                    terceros.telefono_tercero, 
                    terceros.celular_tercero, 
                    terceros.correo_tercero, 
                    terceros.direccion_tercero, 
                    terceros.ciudad_tercero,

                        tiposradicado.id_tiporadicado,
                    tiposradicado.id_tiporadicado,

                    estadosradicados.id_estado,
                    estadosradicados.nombre_estado,

                    estados2.id_estado as id_estado2,
                    estados2.nombre_estado as nombre_estado2,

                    tiposradicado.nombre_tiporadicado
                
                    from entrantes 
                            left join terceros ON entrantes.remitente_entrante = terceros.id_tercero
                            left join empleados ON entrantes.destinatario_entrante = empleados.id_empleado
                            left join tiposradicado ON entrantes.tiporadicado_entrante = tiposradicado.id_tiporadicado
                            left join empleados as empleados2 ON entrantes.responsable_entrante = empleados2.id_empleado
                            left join estadosradicados ON entrantes.estado_entrante = estadosradicados.id_estado
                            left join estados2 ON entrantes.tieneanexos_entrante = estados2.id_estado

                    where entrantes.id_entrante='".$id_entrante."'";
        
         $consulta = $this->consulta($query);
        return $consulta[0];    
        
    }
    
    
    function getDatosArchivo($id_entrante) {
       
        $query = "select 

                    entrantes_archivo.id_archivo,  
                    entrantes_archivo.entrante_archivo,
                    entrantes_archivo.archivador_archivo, 
                    entrantes_archivo.fechainicio_archivo, 
                    entrantes_archivo.fechafinal_archivo, 
                    entrantes_archivo.unidad_archivo, 
                    entrantes_archivo.codigo_archivo, 
                    entrantes_archivo.folios_archivo, 
                    entrantes_archivo.anexos_archivo, 

                    entrantes.id_entrante, 
                    entrantes.numero_entrante,
                    entrantes.remitente_entrante,
                    entrantes.enviadopor_entrante,
                    entrantes.destinatario_entrante,
                    entrantes.fecharadicado_entrante,
                    entrantes.fechamaxima_entrante,
                    entrantes.prioridad_entrante,
                    entrantes.numerofolios_entrante,
                    entrantes.descripcionfolios_entrante,
                    entrantes.asunto_entrante,
                    entrantes.tiporadicado_entrante,
                    entrantes.medio_entrante,
                    entrantes.responsable_entrante,
                    entrantes.carpeta_entrante,
                    entrantes.serie_entrante,
                    entrantes.subserie_entrante,
                    entrantes.tipodocumental_entrante,
                    entrantes.saliente_entrante
                
                    from entrantes_archivo
                            left join entrantes ON entrantes_archivo.entrante_archivo = entrantes.id_entrante

                    where entrantes.id_entrante='".$id_entrante."'";
        
         $consulta = $this->consulta($query);
        return $consulta[0];    
        
    }
    

    function insertar(      
                        $consecutivo_entrante,
                        $numero_entrante,
                        $remitente_entrante,
                        $enviadopor_entrante,
                        $destinatario_entrante,
                        $fecharadicado_entrante,
                        $fechamaxima_entrante,
                        $prioridad_entrante,
                        $numerofolios_entrante,
                        $descripcionfolios_entrante,
                        $asunto_entrante,
                        $tiporadicado_entrante,
                        $medio_entrante,
                        $responsable_entrante,
                        $serie_entrante,
                        $subserie_entrante,
                        $tipodocumental_entrante,
                        $saliente_entrante,
                        $tieneanexos_entrante
                    ){
                
        $query = "INSERT INTO entrantes (
                                consecutivo_entrante,
                                numero_entrante,
                                remitente_entrante,
                                enviadopor_entrante,
                                destinatario_entrante,
                                fecharadicado_entrante,
                                fechamaxima_entrante,
                                prioridad_entrante,
                                numerofolios_entrante,
                                descripcionfolios_entrante,
                                asunto_entrante,
                                tiporadicado_entrante,
                                medio_entrante,
                                responsable_entrante,
                                serie_entrante,
                                subserie_entrante,
                                tipodocumental_entrante,
                                saliente_entrante,
                                tieneanexos_entrante
                            )
                            VALUES(
                                '".$consecutivo_entrante."',
                                '".$numero_entrante."',
                                '".$remitente_entrante."',
                                '".$enviadopor_entrante."',
                                '".$destinatario_entrante."',
                                '".$fecharadicado_entrante."',
                                '".$fechamaxima_entrante."',
                                '".$prioridad_entrante."',
                                '".$numerofolios_entrante."',
                                '".$descripcionfolios_entrante."',
                                '".$asunto_entrante."',
                                '".$tiporadicado_entrante."',
                                '".$medio_entrante."',
                                '".$responsable_entrante."',
                                '".$serie_entrante."',
                                '".$subserie_entrante."',
                                '".$tipodocumental_entrante."',
                                '".$saliente_entrante."',
                                '".$tieneanexos_entrante."'
                            );";
       
       return $this->crear_ultimo_id($query);
        
    }
    
    function editar(
                    $id_entrante, 
                    $numero_entrante,
                    $remitente_entrante,
                    $enviadopor_entrante,
                    $destinatario_entrante,
                    $fecharadicado_entrante,
                    $fechamaxima_entrante,
                    $prioridad_entrante,
                    $numerofolios_entrante,
                    $descripcionfolios_entrante,
                    $asunto_entrante,
                    $tiporadicado_entrante,
                    $medio_entrante,
                    $responsable_entrante,
                    $serie_entrante,
                    $subserie_entrante,
                    $tipodocumental_entrante,
                    $tieneanexos_entrante
                ) {
        
        $query = "  UPDATE entrantes 

                    SET numero_entrante = '". $numero_entrante ."',
                        remitente_entrante = '". $remitente_entrante ."',
                        enviadopor_entrante = '". $enviadopor_entrante ."',
                        destinatario_entrante = '". $destinatario_entrante ."',
                        fecharadicado_entrante = '". $fecharadicado_entrante ."',
                        fechamaxima_entrante = '". $fechamaxima_entrante ."',
                        prioridad_entrante = '". $prioridad_entrante ."',
                        numerofolios_entrante = '". $numerofolios_entrante ."',
                        descripcionfolios_entrante = '". $descripcionfolios_entrante ."',
                        asunto_entrante = '". $asunto_entrante ."',
                        tiporadicado_entrante = '". $tiporadicado_entrante ."',
                        medio_entrante = '". $medio_entrante ."',
                        responsable_entrante = '". $responsable_entrante ."',
                        serie_entrante = '". $serie_entrante ."',
                        subserie_entrante = '". $subserie_entrante ."',
                        tipodocumental_entrante = '". $tipodocumental_entrante ."',
                        tieneanexos_entrante = '". $tieneanexos_entrante ."'

                    WHERE id_entrante = '" . $id_entrante . "'";
       
        return $this->modificarRegistros($query);
       
    }


    function mover(
                $id_entrante, 
                $carpeta_entrante
    ) {

        $query = "  UPDATE entrantes 

                SET carpeta_entrante = '". $carpeta_entrante ."'

                WHERE id_entrante = '" . $id_entrante . "'";

        return $this->modificarRegistros($query);

    }



    function nuevoDocumento(
        $entrante_documento, 
        $nombre_documento
    ) {

        $query = "  INSERT INTO documentos(entrante_documento, nombre_documento)

                VALUES('". $entrante_documento ."', '". $nombre_documento ."')";

        return $this->modificarRegistros($query);

    }


    function mover_default(
                $radicados, 
                $carpeta_entrante
    ) {

        $query = "UPDATE entrantes 

                SET carpeta_entrante = '". $carpeta_entrante ."'

                WHERE id_entrante in (" . $radicados . ")";

        return $this->modificarRegistros($query);

    }

    
    function cambiar(
                $id_entrante, 
                $responsable_entrante
    ) {

        $query = "  UPDATE entrantes 

                SET responsable_entrante = '". $responsable_entrante ."'

                WHERE id_entrante = '" . $id_entrante . "'";

        return $this->modificarRegistros($query);

    }
    

    
    function cambiar_default(
                $radicados, 
                $responsable_entrante
    ) {

        $query = "UPDATE entrantes 

                    SET responsable_entrante = '". $responsable_entrante ."'

                    WHERE id_entrante in (" . $radicados . ")";

        return $this->modificarRegistros($query);

    }
    
        
    
    function cambiarestado_default(
        $radicados, 
        $estado_entrante
) {

$query = "UPDATE entrantes 

            SET estado_entrante = '". $estado_entrante ."'

            WHERE id_entrante in (" . $radicados . ")";

return $this->modificarRegistros($query);

}

    function eliminar($radicados) {
        
        $query = "DELETE FROM entrantes WHERE id_entrante IN (". $radicados .")";        
        $this->modificarRegistros($query);
        
    }
    
        
    function enviarBandejaEntrante($radicados) {
        
        $query = "UPDATE entrantes SET carpeta_entrante = null WHERE id_entrante IN (". $radicados .")";        
        $this->modificarRegistros($query);
        
    }
        
    function actualizarSaliente($id_entrante, $saliente_entrante) {
        
        $query = "UPDATE entrantes SET saliente_entrante = '".$saliente_entrante."' 
                    WHERE id_entrante = '". $id_entrante ."'";        
        $this->modificarRegistros($query);
        
    }



    /// CONSULTAS EXTRAS

    function buscarRemitente() {
        
        $query = "select terceros.nombre_tercero
                
                  from terceros";
        
        $consulta = $this->consulta($query);
               
    }

    function buscarDestinatario() {
        
        $query = "select CONCAT(empleados.nombres_empleado, ' ', empleados.apellidos_empleado) 
                
                  from terceros";
        
        $consulta = $this->consulta($query);
               
    }

    function getConsecutivo() {
        
        $query = "select max(entrantes.consecutivo_entrante) as consecutivo
                
                    from entrantes";
        
        $consulta = $this->consulta($query);

        if(isset($consulta[0]['consecutivo'])){
            return $consulta[0]['consecutivo'];
        }
               
    }
    

    function getNumeroRadicadosPorResponsable($responsable_entrante) {
        
        $query = "select count(entrantes.id_entrante) as numero
                
                    from entrantes 
                    
                    where responsable_entrante = '".$responsable_entrante."'";
        
        $consulta = $this->consulta($query);
        if(isset($consulta[0]['numero'])){
            return $consulta[0]['numero'];
        }       
               
    }  


    function getNumeroRadicadosPorDependencia($dependencia_entrante) {
        
        $query = "select count(entrantes.id_entrante) as numero
                
                    from entrantes left join empleados on entrantes.responsable_entrante = empleados.id_empleado
                    
                    where empleados.dependencia_empleado = '".$dependencia_entrante."'";
        
        $consulta = $this->consulta($query);
        if(isset($consulta[0]['numero'])){
            return $consulta[0]['numero'];
        }       
               
    }  


    function getNumeroRadicadosPorTiporadicado($tiporadicado_entrante) {
        
        $query = "select count(entrantes.id_entrante) as numero
                
                    from entrantes 
                    
                    where tiporadicado_entrante = '".$tiporadicado_entrante."'";
        
        $consulta = $this->consulta($query);
        if(isset($consulta[0]['numero'])){
            return $consulta[0]['numero'];
        }       
               
    }


    function getNumeroEntrantes() {
        
        $query = "select count(entrantes.id_entrante) as numero
                
                    from entrantes";
        
        $consulta = $this->consulta($query);
        if(isset($consulta[0]['numero'])){
            return $consulta[0]['numero'];
        }
               
    }  

    function getNumeroEntrantesActivos() {
        
        $query = "select count(entrantes.id_entrante) as numero
                
                    from entrantes 
                    
                    where estado_entrante = '1'";
        
        $consulta = $this->consulta($query);
        if(isset($consulta[0]['numero'])){
            return $consulta[0]['numero'];
        }  
               
    }  

    function getNumeroEntrantesFinalizados() {
        
        $query = "select count(entrantes.id_entrante) as numero
                
                    from entrantes 
                    
                    where estado_entrante = '2'";
        
        $consulta = $this->consulta($query);
        if(isset($consulta[0]['numero'])){
            return $consulta[0]['numero'];
        }      
               
    }

    function getNumeroEntrantesArchivados() {
        
        $query = "select count(entrantes.id_entrante) as numero
                
                    from entrantes 
                    
                    where estado_entrante = '3'";
        
        $consulta = $this->consulta($query);
        if(isset($consulta[0]['numero'])){
            return $consulta[0]['numero'];
        }        
               
    }

    
    function getRadicadosPorUsuario() {
        
        $query = "  empleados.nombres_empleado,
                    empleados.apellidos_empleado,
                    count(entrantes.id_entrante) as cantidad
                
                    from entrantes 
                        left join empleados ON entrantes.responsable_entrante = empleados.id_empleado
                    
                    where ano_entrante = '".$_SESSION['ano']."'
                    
                    group by entrantes.responsable_entrante";
        
        $consulta = $this->consulta($query);
        return $consulta;       
               
    }
    
    
    function getRadicadosPorDependencias() {
        
        $query = "  dependencias.nombre_dependencia,
                    count(entrantes.id_entrante) as cantidad
                
                    from entrantes 
                        left join empleados ON entrantes.responsable_entrante = empleados.id_empleado
                        left join dependencias ON empleados.dependencia_empleado = dependencias.id_dependencia
                    
                    where ano_entrante = '".$_SESSION['ano']."'
                    
                    group by dependencias.id_dependencia";
        
        $consulta = $this->consulta($query);
        return $consulta;       
               
    }


    function insertar_trazabilidad(
            $radicado_trazabilidad,
            $accion_trazabilidad
    ){

        $usuario = $_SESSION['id_usuario'];
        $fecha_actual = date('Y-m-d H:i:s');

        $query = "INSERT INTO trazabilidad_entrantes (
                radicado_trazabilidad,
                accion_trazabilidad,
                fecha_trazabilidad,
                usuario_trazabilidad
            )
            VALUES(
                '".$radicado_trazabilidad."',
                '".$accion_trazabilidad."',
                '".$fecha_actual."',
                '".$usuario."'
            );";

           return $this->crear_ultimo_id($query);

    }


    

    function insertar_archivar(
        $radicados,
        $archivador,
        $fechainicio,
        $fechafinal,
        $unidad,
        $codigo,
        $folios,
        $anexos
){

    $array_radicados = explode(",", $_POST['radicados']);

        foreach($array_radicados as $array){

            if($array[0] != 0){

                $id_entrante = $array[0];

    $query = "INSERT INTO entrantes_archivo (
            entrante_archivo,
            archivador_archivo,
            fechainicio_archivo,
            fechafinal_archivo,
            unidad_archivo,
            codigo_archivo,
            folios_archivo,
            anexos_archivo
        )
        VALUES(
            '".$id_entrante."',
            '".$archivador."',
            '".$fechainicio."',
            '".$fechafinal."',
            '".$unidad."',
            '".$codigo."',
            '".$folios."',
            '".$anexos."'
        );";

        $this->crear_ultimo_id($query);

        $query = "  UPDATE entrantes 
                SET estado_entrante = '3'
                WHERE id_entrante = '".$id_entrante."'";

        $this->modificarRegistros($query);


    }
    }

}




function guardarDatosArchivo(
    $entrante_archivo, 
    $archivador_archivo,
    $fechainicio_archivo,
    $fechafinal_archivo,
    $unidad_archivo,
    $codigo_archivo,
    $folios_archivo,
    $anexos_archivo
) {

$query = "  UPDATE entrantes_archivo

    SET archivador_archivo = '". $archivador_archivo ."',
        fechainicio_archivo = '". $fechainicio_archivo ."',
        fechafinal_archivo = '". $fechafinal_archivo ."',
        unidad_archivo = '". $unidad_archivo ."',
        codigo_archivo = '". $codigo_archivo ."',
        folios_archivo = '". $folios_archivo ."',
        anexos_archivo = '". $anexos_archivo ."'

    WHERE entrante_archivo = '" . $entrante_archivo . "'";

return $this->modificarRegistros($query);

}






}

?>