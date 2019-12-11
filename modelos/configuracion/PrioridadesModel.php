<?php

class PrioridadesModel extends ModelBase {

    function getTodos(){
        
        $query = "select    prioridades.id_prioridad, 
                            prioridades.nombre_prioridad
            	                 
                        from prioridades
                        
                        ORDER BY prioridades.id_prioridad";

        $consulta = $this->consulta($query);
        return $consulta;
        
    }
    
    function getDatos($id_prioridad){
        
        $query = "select    prioridades.id_prioridad, 
                            prioridades.nombre_prioridad
            	                 
                        from prioridades
                             
                        where prioridades.id_prioridad = '".$id_prioridad."'
                        
                        ORDER BY prioridades.id_prioridad";
        
        $consulta = $this->consulta($query);
        
        return $consulta[0];
        
    }    
    
  
}

?>