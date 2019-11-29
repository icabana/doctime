<?php

class EstadosradicadoModel extends ModelBase {

    function getTodos(){
        
        $query = "select    estadosradicado.id_estado, 
                            estadosradicado.nombre_estado
            	                 
                        from estadosradicado
                        
                        ORDER BY estadosradicado.nombre_estado";

        $consulta = $this->consulta($query);
        return $consulta;
        
    }
    
    function getDatos($id_estado){
        
        $query = "select    estadosradicado.id_estado, 
                            estadosradicado.nombre_estado
            	                 
                        from estadosradicado
                             
                        where estadosradicado.id_estado = '".$id_estado."'
                        
                        ORDER BY estadosradicado.nombre_estado";
        
        $consulta = $this->consulta($query);
        
        return $consulta[0];
        
    }    
    
  
}

?>