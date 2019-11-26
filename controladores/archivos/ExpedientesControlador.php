<?php

class ExpedientesControlador extends ControllerBase {

    public function index() {
        
        $this->model->cargar("ExpedientesModel.php", "administracion");
        $ExpedientesModel = new ExpedientesModel();

        $expedientes = $ExpedientesModel->getTodos();

        include 'vistas/administracion/expedientes/default.php';
                        
    }    
    
    public function nuevo(){
        
        $this->model->cargar("ExpedientesModel.php", "administracion");
        $ExpedientesModel = new ExpedientesModel();

        $expedientes = $ExpedientesModel->getTodos();

        include 'vistas/administracion/expedientes/insertar.php';
        
    }

         
    public function editar(){
    
        $data['operacion'] = 'editar';

        $this->model->cargar("ExpedientesModel.php");
        $ExpedientesModel = new ExpedientesModel();    
        
        $expedientes = $ExpedientesModel->getTodos();       
        
        $datos = $ExpedientesModel->getDatos($_POST['id_expediente']);
            
        include 'vistas/administracion/expedientes/editar.php';
               
    }
        
    public function insertar() {
      
        $this->model->cargar("ExpedientesModel.php", "administracion");
        $ExpedientesModel = new ExpedientesModel();            
        
        $resp = $ExpedientesModel->insertar(
                    $_POST["nombre_expediente"]
                );        
        
        if( $resp != 0 ){
            echo 1;
        }else{
            echo 0;			
        }      
        
    }
    
    public function guardar() {
        
        $this->model->cargar("ExpedientesModel.php", 'administracion');
        $ExpedientesModel = new ExpedientesModel();
            
        $resp = $ExpedientesModel->editar(
            $_POST["id_expediente"], 
            $_POST["nombre_expediente"]
        );        
      
        if( $resp != 0 ){
             echo 1;             
        }else{
            echo 0;		
        }
        
    }    
        
    public function eliminar() {
        
        $this->model->cargar("ExpedientesModel.php", "administracion");
        $ExpedientesModel = new ExpedientesModel();
        
        $ExpedientesModel->eliminar($_POST["id_expediente"]);
        
        echo "1";        
        
    }    
   
             
 }