<?php

class DisposicionesModel extends ModelBase {

    function getTodos(){
        
        $query = "select    disposiciones.id_disposicion, 
                            disposiciones.nombre_disposicion
            	                 
                        from disposiciones
                        
                        ORDER BY disposiciones.nombre_disposicion";

        $consulta = $this->consulta($query);
        return $consulta;
        
    }
    
    function getDatos($id_disposicion){
        
        $query = "select    disposiciones.id_disposicion, 
                            disposiciones.nombre_disposicion
            	                 
                        from disposiciones
                             
                        where disposiciones.id_disposicion = '".$id_disposicion."'
                        
                        ORDER BY disposiciones.nombre_disposicion";
        
        $consulta = $this->consulta($query);
        
        return $consulta[0];
        
    }    
    
  
}

?>