<?php

class ArchivadoresControlador extends ControllerBase {

    public function index() {
        
        $this->model->cargar("ArchivadoresModel.php", "archivo");
        $ArchivadoresModel = new ArchivadoresModel();

        $tiposarchivo = $ArchivadoresModel->getTodos();

        include 'vistas/archivo/tiposarchivo/default.php';
                        
    }    
    
    public function nuevo(){
        
        $this->model->cargar("ArchivadoresModel.php", "archivo");
        $ArchivadoresModel = new ArchivadoresModel();

        $tiposarchivo = $ArchivadoresModel->getTodos();

        include 'vistas/archivo/tiposarchivo/insertar.php';
        
    }

         
    public function editar(){
    
        $this->model->cargar("ArchivadoresModel.php");
        $ArchivadoresModel = new ArchivadoresModel();    
                
        $datos = $ArchivadoresModel->getDatos($_POST['id_archivador']);
            
        include 'vistas/archivo/tiposarchivo/editar.php';
               
    }
        
    public function insertar() {
      
        $this->model->cargar("ArchivadoresModel.php", "archivo");
        $ArchivadoresModel = new ArchivadoresModel();            
        
        $resp = $ArchivadoresModel->insertar(
                                        $_POST["nombre_archivador"],
                                        $_POST["ciudad_archivador"],
                                        $_POST["direccion_archivador"],
                                        $_POST["ubicacion_archivador"]
                                    );        
        
        if( $resp != 0 ){
            echo 1;
        }else{
            echo 0;			
        }      
        
    }
    
    public function guardar() {
        
        $this->model->cargar("ArchivadoresModel.php", 'archivo');
        $ArchivadoresModel = new ArchivadoresModel();
            
        $resp = $ArchivadoresModel->editar(
                                        $_POST["id_archivador"], 
                                        $_POST["nombre_archivador"],
                                        $_POST["ciudad_archivador"],
                                        $_POST["direccion_archivador"],
                                        $_POST["ubicacion_archivador"]
                                    );        
      
        if( $resp != 0 ){
             echo 1;             
        }else{
            echo 0;		
        }
        
    }    
        
    public function eliminar() {
        
        $this->model->cargar("ArchivadoresModel.php", "archivo");
        $ArchivadoresModel = new ArchivadoresModel();
        
        $ArchivadoresModel->eliminar($_POST["id_archivador"]);
        
        echo "1";        
        
    }    
   
             
 }