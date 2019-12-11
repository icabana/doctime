<?php

class EstadosradicadoModel extends ModelBase {

    function getTodos(){
        
        $query = "select    estadosradicados.id_estado, 
                            estadosradicados.nombre_estado
            	                 
                        from estadosradicados
                        
                        ORDER BY estadosradicados.nombre_estado";

        $consulta = $this->consulta($query);
        return $consulta;
        
    }
    
    function getDatos($id_estado){
        
        $query = "select    estadosradicados.id_estado, 
                            estadosradicados.nombre_estado
            	                 
                        from estadosradicados
                             
                        where estadosradicados.id_estado = '".$id_estado."'
                        
                        ORDER BY estadosradicados.nombre_estado";
        
        $consulta = $this->consulta($query);
        
        return $consulta[0];
        
    }    
    
  
}

?>