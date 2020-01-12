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

        
        $this->model->cargar("SeriesModel.php", "administracion");
        $SeriesModel = new SeriesModel();

        $series = $SeriesModel->getTodos();

        
        $this->model->cargar("SubseriesModel.php", "administracion");
        $SubseriesModel = new SubseriesModel();

        $subseries = $SubseriesModel->getTodosPorSerie($series[0]['id_serie']);



        include 'vistas/administracion/tiposdocumentales/insertar.php';
        
    }

         
    public function editar(){

        $this->model->cargar("TiposdocumentalesModel.php");
        $TiposdocumentalesModel = new TiposdocumentalesModel();       
        
        $datos = $TiposdocumentalesModel->getDatos($_POST['id_tipodocumental']);

        
        $this->model->cargar("SeriesModel.php", "administracion");
        $SeriesModel = new SeriesModel();

        $series = $SeriesModel->getTodos();

        
        $this->model->cargar("SubseriesModel.php", "administracion");
        $SubseriesModel = new SubseriesModel();

        $subseries = $SubseriesModel->getTodosPorSerie($datos['serie_tipodocumental']);


            
        include 'vistas/administracion/tiposdocumentales/editar.php';
               
    }
        
    public function insertar() {
      
        $this->model->cargar("TiposdocumentalesModel.php", "administracion");
        $TiposdocumentalesModel = new TiposdocumentalesModel();            
        
        $resp = $TiposdocumentalesModel->insertar(            
                                            $_POST["serie_tipodocumental"],
                                            $_POST["subserie_tipodocumental"],
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
                                            $_POST["serie_tipodocumental"],
                                            $_POST["subserie_tipodocumental"],
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
        
    public function cargarSubseries() {
        
        $froms = new Formularios();
         
        $this->model->cargar("SubseriesModel.php", "administracion");
        $SubseriesModel = new SubseriesModel();

        $subseries = $SubseriesModel->getTodosPorSerie($_POST['id_serie']);

        echo $froms->Lista_Desplegable(
            $subseries,
            'nombre_subserie',
            'id_subserie',
            'subserie_entrante',
            '',
            '',
            ''
        );

    }       
             
        
    public function cargarTiposdocumentales() {
        
        $froms = new Formularios();
        
        $this->model->cargar("TiposdocumentalesModel.php", "administracion");
        $TiposdocumentalesModel = new TiposdocumentalesModel();

        $tiposdocumentales = $TiposdocumentalesModel->getTodosPorSubserie($_POST['id_subserie']);

        echo $froms->Lista_Desplegable(
            $tiposdocumentales,
            'nombre_tipodocumental',
            'id_tipodocumental',
            'tipodocumental_entrante',
            '',
            '',
            ''
        );

    }     

 }