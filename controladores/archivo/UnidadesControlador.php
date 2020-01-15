<?php

class UnidadesControlador extends ControllerBase {

    public function index() {
        
        $this->model->cargar("UnidadesModel.php", "archivo");
        $UnidadesModel = new UnidadesModel();

        $unidades = $UnidadesModel->getTodos();

        include 'vistas/archivo/unidades/default.php';
                        
    }    
    
    public function nuevo(){
        
        $this->model->cargar("UnidadesModel.php", "archivo");
        $UnidadesModel = new UnidadesModel();

        $unidades = $UnidadesModel->getTodos();

        include 'vistas/archivo/unidades/insertar.php';
        
    }

         
    public function editar(){
    
        $this->model->cargar("UnidadesModel.php");
        $UnidadesModel = new UnidadesModel();   
        
        $datos = $UnidadesModel->getDatos($_POST['id_unidad']);
            
        include 'vistas/archivo/unidades/editar.php';
               
    }
        
    public function insertar() {
      
        $this->model->cargar("UnidadesModel.php", "archivo");
        $UnidadesModel = new UnidadesModel();            
        
        $resp = $UnidadesModel->insertar(
                                        $_POST["nombre_unidad"]
                                    );        
        
        if( $resp != 0 ){
            echo 1;
        }else{
            echo 0;			
        }      
        
    }
    
    public function guardar() {
        
        $this->model->cargar("UnidadesModel.php", 'archivo');
        $UnidadesModel = new UnidadesModel();
            
        $resp = $UnidadesModel->editar(
                                        $_POST["id_unidad"], 
                                        $_POST["nombre_unidad"]
                                    );        
      
        if( $resp != 0 ){
             echo 1;             
        }else{
            echo 0;		
        }
        
    }    
        
    public function eliminar() {
        
        $this->model->cargar("UnidadesModel.php", "archivo");
        $UnidadesModel = new UnidadesModel();
        
        $UnidadesModel->eliminar($_POST["id_unidad"]);
        
        echo "1";        
        
    }    
   
             
 }