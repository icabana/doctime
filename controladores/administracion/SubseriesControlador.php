<?php

class SubseriesControlador extends ControllerBase {

    public function index() {
        
        $this->model->cargar("SubseriesModel.php", "administracion");
        $SubseriesModel = new SubseriesModel();

        $subseries = $SubseriesModel->getTodos();

        include 'vistas/administracion/subseries/default.php';
                        
    }
    
    public function nuevo(){
        
        $this->model->cargar("SubseriesModel.php", "administracion");
        $SubseriesModel = new SubseriesModel();

        $subseries = $SubseriesModel->getTodos();

        include 'vistas/administracion/subseries/insertar.php';
        
    }

         
    public function editar(){
    
        $data['operacion'] = 'editar';

        $this->model->cargar("SubseriesModel.php");
        $SubseriesModel = new SubseriesModel();    
        
        $subseries = $SubseriesModel->getTodos();       
        
        $datos = $SubseriesModel->getDatos($_POST['id_subserie']);
            
        include 'vistas/administracion/subseries/editar.php';
               
    }
        
    public function insertar() {
      
        $this->model->cargar("SubseriesModel.php", "administracion");
        $SubseriesModel = new SubseriesModel();            
        
        $resp = $SubseriesModel->insertar(
                                $_POST['serie_subserie'],
                                $_POST['codigo_subserie'],
                                $_POST['nombre_subserie'],
                                $_POST['ag_subserie'],
                                $_POST['ac_subserie'],
                                $_POST['soporte_subserie'],
                                $_POST['disposicion_subserie']
                                );        
        
        if( $resp != 0 ){
            echo 1;
        }else{
            echo 0;			
        }      
        
    }
    
    public function guardar() {
        
        $this->model->cargar("SubseriesModel.php", 'administracion');
        $SubseriesModel = new SubseriesModel();
            
        $resp = $SubseriesModel->editar(
                                $_POST["id_subserie"], 
                                $_POST['serie_subserie'],
                                $_POST['codigo_subserie'],
                                $_POST['nombre_subserie'],
                                $_POST['ag_subserie'],
                                $_POST['ac_subserie'],
                                $_POST['soporte_subserie'],
                                $_POST['disposicion_subserie']
        );        
      
        if( $resp != 0 ){
             echo 1;             
        }else{
            echo 0;		
        }
        
    }    
        
    public function eliminar() {
        
        $this->model->cargar("SubseriesModel.php", "administracion");
        $SubseriesModel = new SubseriesModel();
        
        $SubseriesModel->eliminar($_POST["id_subserie"]);
        
        echo "1";        
        
    }    
   
             
 }