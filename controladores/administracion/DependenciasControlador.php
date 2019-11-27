<?php

class DependenciasControlador extends ControllerBase {

    public function index() {
        
        $this->model->cargar("DependenciasModel.php", "administracion");
        $DependenciasModel = new DependenciasModel();

        $dependencias = $DependenciasModel->getTodos();

        include 'vistas/administracion/dependencias/default.php';
                        
    }    
    
    public function nuevo(){
        
        $this->model->cargar("DependenciasModel.php", "administracion");
        $DependenciasModel = new DependenciasModel();

        $dependencias = $DependenciasModel->getTodos();

        include 'vistas/administracion/dependencias/insertar.php';
        
    }

         
    public function editar(){
    
        $data['operacion'] = 'editar';

        $this->model->cargar("DependenciasModel.php");
        $DependenciasModel = new DependenciasModel();    
        
        $dependencias = $DependenciasModel->getTodos();       
        
        $datos = $DependenciasModel->getDatos($_POST['id_dependencia']);
            
        include 'vistas/administracion/dependencias/editar.php';
               
    }
        
    public function insertar() {
      
        $this->model->cargar("DependenciasModel.php", "administracion");
        $DependenciasModel = new DependenciasModel();            
        
        $resp = $DependenciasModel->insertar(
                    $_POST["codigo_dependencia"],
                    $_POST["nombre_dependencia"],
                    $_POST["jefe_dependencia"]
                );        
        
        if( $resp != 0 ){
            echo 1;
        }else{
            echo 0;			
        }      
        
    }
    
    public function guardar() {
        
        $this->model->cargar("DependenciasModel.php", 'administracion');
        $DependenciasModel = new DependenciasModel();
            
        $resp = $DependenciasModel->editar(
            $_POST["id_dependencia"], 
            $_POST["codigo_dependencia"],
            $_POST["nombre_dependencia"],
            $_POST["jefe_dependencia"]
        );        
      
        if( $resp != 0 ){
             echo 1;             
        }else{
            echo 0;		
        }
        
    }    
        
    public function eliminar() {
        
        $this->model->cargar("DependenciasModel.php", "administracion");
        $DependenciasModel = new DependenciasModel();
        
        $DependenciasModel->eliminar($_POST["id_dependencia"]);
        
        echo "1";        
        
    }    
   
             
 }