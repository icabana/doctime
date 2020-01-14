<?php

class TiposradicadoControlador extends ControllerBase {

    public function index() {
        
        $this->model->cargar("TiposradicadoModel.php", "administracion");
        $TiposradicadoModel = new TiposradicadoModel();

        $tiposradicado = $TiposradicadoModel->getTodos();

        include 'vistas/administracion/tiposradicado/default.php';
                        
    }    
    
    public function nuevo(){
        
        $this->model->cargar("TiposradicadoModel.php", "administracion");
        $TiposradicadoModel = new TiposradicadoModel();

        $tiposradicado = $TiposradicadoModel->getTodos();

        include 'vistas/administracion/tiposradicado/insertar.php';
        
    }
         
    public function editar(){

        $this->model->cargar("TiposradicadoModel.php");
        $TiposradicadoModel = new TiposradicadoModel();       
        
        $datos = $TiposradicadoModel->getDatos($_POST['id_tiporadicado']);
            
        include 'vistas/administracion/tiposradicado/editar.php';
               
    }
        
    public function insertar() {
      
        $this->model->cargar("TiposradicadoModel.php", "administracion");
        $TiposradicadoModel = new TiposradicadoModel();            
        
        $resp = $TiposradicadoModel->insertar(
                                        $_POST["nombre_tiporadicado"]
                                    );        
        
        if( $resp != 0 ){
            echo 1;
        }else{
            echo 0;			
        }      
        
    }
        
    public function insertarModal() {
      
        $froms = new Formularios();

        $this->model->cargar("TiposradicadoModel.php", "administracion");
        $TiposradicadoModel = new TiposradicadoModel();            
        
        $nombre = $_POST["nombre_tiporadicado_entrante"];

        $resp = $TiposradicadoModel->insertar(
                                        $nombre
                                    );        

        $tiposradicado = $TiposradicadoModel->getTodos();

        echo $froms->Lista_Desplegable(
                $tiposradicado,
                'nombre_tiporadicado',
                'id_tiporadicado',
                'tiporadicado_entrante',
                $resp,
                '',
                ''
        );
        
        
    }
        
    public function insertarModal2() {
      
        $froms = new Formularios();

        $this->model->cargar("TiposradicadoModel.php", "administracion");
        $TiposradicadoModel = new TiposradicadoModel();            
        
        $nombre = $_POST["nombre_tiporadicado_saliente"];

        $resp = $TiposradicadoModel->insertar(
                                        $nombre
                                    );        

        $tiposradicado = $TiposradicadoModel->getTodos();

        echo $froms->Lista_Desplegable(
                $tiposradicado,
                'nombre_tiporadicado',
                'id_tiporadicado',
                'tiporadicado_saliente',
                $resp,
                '',
                ''
        );
        
        
    }
    
    public function guardar() {
        
        $this->model->cargar("TiposradicadoModel.php", 'administracion');
        $TiposradicadoModel = new TiposradicadoModel();
            
        $resp = $TiposradicadoModel->editar(
                                        $_POST["id_tiporadicado"], 
                                        $_POST["nombre_tiporadicado"]
                                    );        
      
        if( $resp != 0 ){
             echo 1;             
        }else{
            echo 0;		
        }
        
    }    
        
    public function eliminar() {
        
        $this->model->cargar("TiposradicadoModel.php", "administracion");
        $TiposradicadoModel = new TiposradicadoModel();
        
        $TiposradicadoModel->eliminar($_POST["id_tiporadicado"]);
        
        echo "1";        
        
    }    
   
             
 }