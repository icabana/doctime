<?php

class SubseriesControlador extends ControllerBase {

    public function index() {
        
        $this->model->cargar("SubseriesModel.php", "administracion");
        $SubseriesModel = new SubseriesModel();

        $subseries = $SubseriesModel->getTodos();

        include 'vistas/administracion/subseries/default.php';
                        
    }
    
    public function nuevo(){
        
        $this->model->cargar("SeriesModel.php", "administracion");
        $SeriesModel = new SeriesModel();

        $series = $SeriesModel->getTodos();

        $this->model->cargar("DisposicionesModel.php", "configuracion");
        $DisposicionesModel = new DisposicionesModel();

        $disposiciones = $DisposicionesModel->getTodos();

        $this->model->cargar("SoportesModel.php", "configuracion");
        $SoportesModel = new SoportesModel();

        $soportes = $SoportesModel->getTodos();


        include 'vistas/administracion/subseries/insertar.php';
        
    }
         
    public function editar(){
    
        $this->model->cargar("SeriesModel.php", "administracion");
        $SeriesModel = new SeriesModel();

        $series = $SeriesModel->getTodos();

        $this->model->cargar("SubseriesModel.php");
        $SubseriesModel = new SubseriesModel();               
        
        $datos = $SubseriesModel->getDatos($_POST['id_subserie']);
            
        $this->model->cargar("DisposicionesModel.php", "configuracion");
        $DisposicionesModel = new DisposicionesModel();

        $disposiciones = $DisposicionesModel->getTodos();

        $this->model->cargar("SoportesModel.php", "configuracion");
        $SoportesModel = new SoportesModel();

        $soportes = $SoportesModel->getTodos();

        include 'vistas/administracion/subseries/editar.php';
               
    }
        
    public function insertar() {
      
        $this->model->cargar("SubseriesModel.php", "administracion");
        $SubseriesModel = new SubseriesModel();            
        
        $resp = $SubseriesModel->insertar(
                                    $_POST['serie_subserie'],
                                    $_POST['codigo_subserie'],
                                    $_POST['nombre_subserie'],
                                    $_POST['tiempogestion_subserie'],
                                    $_POST['tiempocentral_subserie'],
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
                                    $_POST['tiempogestion_subserie'],
                                    $_POST['tiempocentral_subserie'],
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