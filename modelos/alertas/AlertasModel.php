<?php

class AlertasModel extends ModelBase {
  

        function getPorFinalizar() {

                $fecha_actual = date("Y-m-d");

                $query = "SELECT 
                                count(entrantes.id_entrante) as numero,

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
                        
                        FROM    entrantes 
                                        
                        LEFT JOIN empleados ON entrantes.responsable_entrante = empleados.id_empleado     
                                        
                        WHERE   entrantes.estado_entrante = 1 and 
                                entrantes.fechaxima_entrante > '".$fecha_actual."' and
                                empleados.nombres_empleado != ''
                                
                        GROUP BY empleados.id_empleado
                                
                        ORDER BY numero desc";
                
                $consulta = $this->consulta($query);
                return $consulta;       
                        
        }  
        
        
        function getPorFinalizarPorEmpleado($id_empleado) {

                $query = "SELECT 
                                count(entrantes.id_entrante) as numero,

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
                        
                        FROM    entrantes 
                                        
                                left join empleados ON entrantes.responsable_entrante = empleados.id_empleado     
                                        
                        WHERE   entrantes.estado_entrante = 1 and 
                                entrantes.fechaxima_entrante > '".date('Y-m-s')."' and
                                empleados.nombres_empleado != '' and 
                                empleados.id_empleado = '".$id_empleado."' 
                                
                        GROUP BY empleados.id_empleado
                                
                        ORDER BY numero desc";
                
                $consulta = $this->consulta($query);
                return $consulta[0];       
                        
        }  
        

        
    function getTodosRadicadosPorEmpleado($responsable_entrante) {
        
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
                        tiposradicado.nombre_tiporadicado,

                    estadosradicados.id_estado,
                    estadosradicados.nombre_estado,

                    estados2.id_estado as id_estado2,
                    estados2.nombre_estado as nombre_estado2
                
                    from entrantes 
                            left join terceros ON entrantes.remitente_entrante = terceros.id_tercero
                            left join empleados ON entrantes.destinatario_entrante = empleados.id_empleado                            
                            left join empleados as empleados2 ON entrantes.responsable_entrante = empleados2.id_empleado
                            left join estadosradicados ON entrantes.estado_entrante = estadosradicados.id_estado
                            left join estados2 ON entrantes.tieneanexos_entrante = estados2.id_estado
                            left join tiposradicado ON entrantes.tiporadicado_entrante = tiposradicado.id_tiporadicado
                            
                    where entrantes.responsable_entrante = '".$responsable_entrante."'
                    
                    order by entrantes.numero_entrante";
        
        $consulta = $this->consulta($query);
        return $consulta;       
               
    }  


  
    
}

?>