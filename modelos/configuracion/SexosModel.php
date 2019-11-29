<?php

class SexosModel extends ModelBase {

    function getTodos(){
        
        $query = "select    sexos.id_sexo, 
                            sexos.nombre_sexo
            	                 
                        from sexos
                        
                        ORDER BY sexos.nombre_sexo";

        $consulta = $this->consulta($query);
        return $consulta;
        
    }
    
    function getDatos($id_sexo){
        
        $query = "select    sexos.id_sexo, 
                            sexos.nombre_sexo
            	                 
                        from sexos
                             
                        where sexos.id_sexo = '".$id_sexo."'
                        
                        ORDER BY sexos.nombre_sexo";
        
        $consulta = $this->consulta($query);
        
        return $consulta[0];
        
    }    
    
  
}

?>