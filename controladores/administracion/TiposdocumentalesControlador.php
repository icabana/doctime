<?php

class TiposdocumentalesControlador extends ControllerBase {

    public function index() {
        
        $this->model->cargar("TiposdocumentalesModel.php", "administracion");
        $TiposdocumentalesModel = new TiposdocumentalesModel();

        $tiposdocumentales = $TiposdocumentalesModel->getTodos();

        include 'vistas/administracion/tiposdocumentales/default.php';
                        
    }    
    
    public function nuevo(){
        
        $this->model->cargar("TiposdocumentalesModel.php", "administracion");
        $TiposdocumentalesModel = new TiposdocumentalesModel();

        $tiposdocumentales = $TiposdocumentalesModel->getTodos();

        include 'vistas/administracion/tiposdocumentales/insertar.php';
        
    }

         
    public function editar(){

        $this->model->cargar("TiposdocumentalesModel.php");
        $TiposdocumentalesModel = new TiposdocumentalesModel();       
        
        $datos = $TiposdocumentalesModel->getDatos($_POST['id_tipodocumental']);
            
        include 'vistas/administracion/tiposdocumentales/editar.php';
               
    }
        
    public function insertar() {
      
        $this->model->cargar("TiposdocumentalesModel.php", "administracion");
        $TiposdocumentalesModel = new TiposdocumentalesModel();            
        
        $resp = $TiposdocumentalesModel->insertar(
                                            $_POST["nombre_tipodocumental"]
                                        );        
        
        if( $resp != 0 ){
            echo 1;
        }else{
            echo 0;			
        }      
        
    }
    
    public function guardar() {
        
        $this->model->cargar("TiposdocumentalesModel.php", 'administracion');
        $TiposdocumentalesModel = new TiposdocumentalesModel();
            
        $resp = $TiposdocumentalesModel->editar(
                                            $_POST["id_tipodocumental"], 
                                            $_POST["nombre_tipodocumental"]
                                        );        
      
        if( $resp != 0 ){
             echo 1;             
        }else{
            echo 0;		
        }
        
    }    
        
    public function eliminar() {
        
        $this->model->cargar("TiposdocumentalesModel.php", "administracion");
        $TiposdocumentalesModel = new TiposdocumentalesModel();
        
        $TiposdocumentalesModel->eliminar($_POST["id_tipodocumental"]);
        
        echo "1";        
        
    }       
             
 }