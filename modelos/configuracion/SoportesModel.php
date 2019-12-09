<?php

class SoportesModel extends ModelBase {

    function getTodos(){
        
        $query = "select    soportes.id_soporte, 
                            soportes.nombre_soporte
            	                 
                        from soportes
                        
                        ORDER BY soportes.nombre_soporte";

        $consulta = $this->consulta($query);
        return $consulta;
        
    }
    
    function getDatos($id_soporte){
        
        $query = "select    soportes.id_soporte, 
                            soportes.nombre_soporte
            	                 
                        from soportes
                             
                        where soportes.id_soporte = '".$id_soporte."'
                        
                        ORDER BY soportes.nombre_soporte";
        
        $consulta = $this->consulta($query);
        
        return $consulta[0];
        
    }    
    
  
}

?>