<?php

class CarpetasControlador extends ControllerBase {

    public function index() {
        
        $this->model->cargar("CarpetasModel.php", "radicados");
        $CarpetasModel = new CarpetasModel();

        $carpetas = $CarpetasModel->getTodos();

        include 'vistas/radicados/carpetas/default.php';
                        
    }    
    
    public function nuevo(){
        
        $this->model->cargar("CarpetasModel.php", "radicados");
        $CarpetasModel = new CarpetasModel();

        $carpetas = $CarpetasModel->getTodos();

        include 'vistas/radicados/carpetas/insertar.php';
        
    }

         
    public function editar(){
    
        $this->model->cargar("CarpetasModel.php");
        $CarpetasModel = new CarpetasModel();   
        
        $datos = $CarpetasModel->getDatos($_POST['id_carpeta']);
            
        include 'vistas/radicados/carpetas/editar.php';
               
    }
        
    public function insertar() {
      
        $this->model->cargar("CarpetasModel.php", "radicados");
        $CarpetasModel = new CarpetasModel();            
        
        $resp = $CarpetasModel->insertar(
                                    $_POST["nombre_carpeta"]
                                );        
        
        if( $resp != 0 ){
            echo 1;
        }else{
            echo 0;			
        }      
        
    }
    
    public function guardar() {
        
        $this->model->cargar("CarpetasModel.php", 'radicados');
        $CarpetasModel = new CarpetasModel();
            
        $resp = $CarpetasModel->editar(
                                    $_POST["id_carpeta"], 
                                    $_POST["nombre_carpeta"]
                                );        
      
        if( $resp != 0 ){
             echo 1;             
        }else{
            echo 0;		
        }
        
    }    
        
    public function eliminar() {
        
        $this->model->cargar("CarpetasModel.php", "radicados");
        $CarpetasModel = new CarpetasModel();
        
        $CarpetasModel->eliminar($_POST["id_carpeta"]);
        
        echo "1";        
        
    }    
   
             
 }