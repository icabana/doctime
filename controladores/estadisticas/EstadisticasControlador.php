<?php

class EstadisticasControlador extends ControllerBase {

    public function radicadosPorResponsable() {

        $this->model->cargar("EmpleadosModel.php", "administracion");
        $EmpleadosModel = new EmpleadosModel();
        $empleados = $EmpleadosModel->getTodos();

        include 'vistas/estadisticas/radicados_responsable.php';
                        
    }    
   
    public function radicadosPorDependencia() {

        $this->model->cargar("DependenciasModel.php", "administracion");
        $DependenciasModel = new DependenciasModel();
        $dependencias = $DependenciasModel->getTodos();

        include 'vistas/estadisticas/radicados_dependencia.php';
                        
    }    
   
    public function radicadosPorTiporadicado() {
        
        $this->model->cargar("TiposradicadoModel.php", "administracion");
        $TiposradicadoModel = new TiposradicadoModel();
        $tiposradicado = $TiposradicadoModel->getTodos();

        include 'vistas/estadisticas/radicados_tiporadicado.php';
                        
    }    
   
             
 }