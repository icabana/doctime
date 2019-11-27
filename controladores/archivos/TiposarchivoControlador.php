<?php

class TiposarchivoControlador extends ControllerBase {

    public function index() {
        
        $this->model->cargar("TiposarchivoModel.php", "administracion");
        $TiposarchivoModel = new TiposarchivoModel();

        $tiposarchivo = $TiposarchivoModel->getTodos();

        include 'vistas/administracion/tiposarchivo/default.php';
                        
    }    
    
    public function nuevo(){
        
        $this->model->cargar("TiposarchivoModel.php", "administracion");
        $TiposarchivoModel = new TiposarchivoModel();

        $tiposarchivo = $TiposarchivoModel->getTodos();

        include 'vistas/administracion/tiposarchivo/insertar.php';
        
    }

         
    public function editar(){
    
        $data['operacion'] = 'editar';

        $this->model->cargar("TiposarchivoModel.php");
        $TiposarchivoModel = new TiposarchivoModel();    
        
        $tiposarchivo = $TiposarchivoModel->getTodos();       
        
        $datos = $TiposarchivoModel->getDatos($_POST['id_tipoarchivo']);
            
        include 'vistas/administracion/tiposarchivo/editar.php';
               
    }
        
    public function insertar() {
      
        $this->model->cargar("TiposarchivoModel.php", "administracion");
        $TiposarchivoModel = new TiposarchivoModel();            
        
        $resp = $TiposarchivoModel->insertar(
                    $_POST["nombre_tipoarchivo"]
                );        
        
        if( $resp != 0 ){
            echo 1;
        }else{
            echo 0;			
        }      
        
    }
    
    public function guardar() {
        
        $this->model->cargar("TiposarchivoModel.php", 'administracion');
        $TiposarchivoModel = new TiposarchivoModel();
            
        $resp = $TiposarchivoModel->editar(
            $_POST["id_tipoarchivo"], 
            $_POST["nombre_tipoarchivo"]
        );        
      
        if( $resp != 0 ){
             echo 1;             
        }else{
            echo 0;		
        }
        
    }    
        
    public function eliminar() {
        
        $this->model->cargar("TiposarchivoModel.php", "administracion");
        $TiposarchivoModel = new TiposarchivoModel();
        
        $TiposarchivoModel->eliminar($_POST["id_tipoarchivo"]);
        
        echo "1";        
        
    }    
   
             
 }