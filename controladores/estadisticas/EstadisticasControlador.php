<?php

class EstadisticasControlador extends ControllerBase {

    public function radicadosPorUsuario() {
        
        $this->model->cargar("CarpetasModel.php", "radicados");
        $CarpetasModel = new CarpetasModel();

        $carpetas = $CarpetasModel->getTodos();

        include 'vistas/estadisticas/radicados_usuario.php';
                        
    }    
   
             
 }