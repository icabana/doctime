<?php

class SeriesControlador extends ControllerBase {

    public function index() {
        
        $this->model->cargar("SeriesModel.php", "administracion");
        $SeriesModel = new SeriesModel();

        $series = $SeriesModel->getTodos();

        include 'vistas/administracion/series/default.php';
                        
    }    
    
    public function nuevo(){
        
        $this->model->cargar("SeriesModel.php", "administracion");
        $SeriesModel = new SeriesModel();

        $series = $SeriesModel->getTodos();

        include 'vistas/administracion/series/insertar.php';
        
    }

         
    public function editar(){
    
        $data['operacion'] = 'editar';

        $this->model->cargar("SeriesModel.php");
        $SeriesModel = new SeriesModel();    
        
        $series = $SeriesModel->getTodos();       
        
        $datos = $SeriesModel->getDatos($_POST['id_serie']);
            
        include 'vistas/administracion/series/editar.php';
               
    }
        
    public function insertar() {
      
        $this->model->cargar("SeriesModel.php", "administracion");
        $SeriesModel = new SeriesModel();            
        
        $resp = $SeriesModel->insertar(
                $_POST["codigo_serie"], $_POST["nombre_serie"]
                );        
        
        if( $resp != 0 ){
            echo 1;
        }else{
            echo 0;			
        }      
        
    }
    
    public function guardar() {
        
        $this->model->cargar("SeriesModel.php", 'administracion');
        $SeriesModel = new SeriesModel();
            
        $resp = $SeriesModel->editar(
            $_POST["id_serie"], 
            $_POST["codigo_serie"], 
            $_POST["nombre_serie"]
        );        
      
        if( $resp != 0 ){
             echo 1;             
        }else{
            echo 0;		
        }
        
    }    
        
    public function eliminar() {
        
        $this->model->cargar("SeriesModel.php", "administracion");
        $SeriesModel = new SeriesModel();
        
        $SeriesModel->eliminar($_POST["id_serie"]);
        
        echo "1";        
        
    }    
   
             
 }