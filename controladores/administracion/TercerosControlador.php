<?php

class TercerosControlador extends ControllerBase {

    public function index() {
        
        $this->model->cargar("TercerosModel.php", "administracion");
        $TercerosModel = new TercerosModel();

        $terceros = $TercerosModel->getTodos();

        include 'vistas/administracion/terceros/default.php';
                        
    }    
    
    public function nuevo(){        
       
        $this->model->cargar("EstadosModel.php", "configuracion");
        $EstadosModel = new EstadosModel();
        $estados = $EstadosModel->getTodos();

        $this->model->cargar("EstadoscivilModel.php", "configuracion");
        $EstadoscivilModel = new EstadoscivilModel();
        $estadoscivil = $EstadoscivilModel->getTodos();

        $this->model->cargar("TiposdocumentoModel.php", "configuracion");
        $TiposdocumentoModel = new TiposdocumentoModel();
        $tiposdocumento = $TiposdocumentoModel->getTodos();

        $this->model->cargar("SexosModel.php", "configuracion");
        $SexosModel = new SexosModel();
        $sexos = $SexosModel->getTodos();

        include 'vistas/administracion/terceros/insertar.php';
        
    }

         
    public function editar(){    
        
        $this->model->cargar("EstadosModel.php", "configuracion");
        $EstadosModel = new EstadosModel();
        $estados = $EstadosModel->getTodos();

        $this->model->cargar("EstadoscivilModel.php", "configuracion");
        $EstadoscivilModel = new EstadoscivilModel();
        $estadoscivil = $EstadoscivilModel->getTodos();

        $this->model->cargar("TiposdocumentoModel.php", "configuracion");
        $TiposdocumentoModel = new TiposdocumentoModel();
        $tiposdocumento = $TiposdocumentoModel->getTodos();

        $this->model->cargar("SexosModel.php", "configuracion");
        $SexosModel = new SexosModel();
        $sexos = $SexosModel->getTodos();

        $this->model->cargar("TercerosModel.php");
        $TercerosModel = new TercerosModel();    
        $datos = $TercerosModel->getDatos($_POST['id_tercero']);
            
        include 'vistas/administracion/terceros/editar.php';
               
    }
        
    public function insertar() {
      
        $this->model->cargar("TercerosModel.php", "administracion");
        $TercerosModel = new TercerosModel();            
        
        $resp = $TercerosModel->insertar(
                                    $_POST["documento_tercero"],
                                    $_POST["tipodocumento_tercero"],
                                    $_POST["nombre_tercero"],
                                    $_POST["telefono_tercero"],
                                    $_POST["celular_tercero"],
                                    $_POST["correo_tercero"],
                                    $_POST["direccion_tercero"],
                                    $_POST["ciudad_tercero"]
                                );        
        
        if( $resp != 0 ){
            echo 1;
        }else{
            echo 0;			
        }      
        
    }

        
    public function insertar_modal() {
      
        $this->model->cargar("TercerosModel.php", "administracion");
        $TercerosModel = new TercerosModel();            
        
        $resp = $TercerosModel->insertar_modal(
                                    $_POST["documento_tercero_entrante"],
                                    $_POST["tipodocumento_tercero_entrante"],
                                    $_POST["nombre_tercero_entrante"],
                                    $_POST["correo_tercero_entrante"]
                                );        
        
        $remitente_entrante2 = $_POST["nombre_tercero_entrante"];

        $array[] = array('remitente_entrante'=>$resp,'remitente_entrante2'=>$remitente_entrante2 );
                    
        echo json_encode($array); 
        
    }
        
    public function insertar_modal2() {
      
        $this->model->cargar("TercerosModel.php", "administracion");
        $TercerosModel = new TercerosModel();            
        
        $resp = $TercerosModel->insertar_modal(
                                    $_POST["documento_tercero_saliente"],
                                    $_POST["tipodocumento_tercero_saliente"],
                                    $_POST["nombre_tercero_saliente"],
                                    $_POST["correo_tercero_saliente"]
                                );        
        
        $destinatario_saliente2 = $_POST["nombre_tercero_saliente"];

        $array[] = array('destinatario_saliente'=>$resp,'destinatario_saliente2'=>$destinatario_saliente2 );
                    
        echo json_encode($array); 
        
    }
    
    public function guardar() {
        
        $this->model->cargar("TercerosModel.php", 'administracion');
        $TercerosModel = new TercerosModel();
            
        $resp = $TercerosModel->editar(
                                    $_POST["id_tercero"], 
                                    $_POST["documento_tercero"],
                                    $_POST["tipodocumento_tercero"],
                                    $_POST["nombre_tercero"],
                                    $_POST["telefono_tercero"],
                                    $_POST["celular_tercero"],
                                    $_POST["correo_tercero"],
                                    $_POST["direccion_tercero"],
                                    $_POST["ciudad_tercero"]
                                );        
      
        if( $resp != 0 ){
             echo 1;             
        }else{
            echo 0;		
        }
        
    }    
        
    public function eliminar() {
        
        $this->model->cargar("TercerosModel.php", "administracion");
        $TercerosModel = new TercerosModel();
        
        $TercerosModel->eliminar($_POST["id_tercero"]);
        
        echo "1";        
        
    }    
   
             
 }