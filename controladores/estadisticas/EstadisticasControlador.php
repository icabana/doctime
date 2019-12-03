<?php

class EstadisticasControlador extends ControllerBase {

    public function radicadosPorUsuario() {
        
        $this->model->cargar("EntrantesModel.php", "radicados");
        $EntrantesModel = new EntrantesModel();

        $entrantes = $EntrantesModel->getRadicadosPorUsuario();

        include 'vistas/estadisticas/radicados_usuario.php';
                        
    }    
   
    public function radicadosPorDependencia() {
        
        $this->model->cargar("EntrantesModel.php", "radicados");
        $EntrantesModel = new EntrantesModel();

        $entrantes = $EntrantesModel->getRadicadosPorDependencias();

        include 'vistas/estadisticas/radicados_dependencia.php';
                        
    }    
   
             
 }