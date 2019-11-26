<?php

class EntrantesControlador extends ControllerBase {

    public function index() {
        
        $this->model->cargar("EntrantesModel.php", "radicados");
        $EntrantesModel = new EntrantesModel();

        $entrantes = $EntrantesModel->getTodos();

        include 'vistas/radicados/entrantes/default.php';
                        
    }    
    
    public function nuevo(){
        
        $this->model->cargar("EntrantesModel.php", "radicados");
        $EntrantesModel = new EntrantesModel();

        $entrantes = $EntrantesModel->getTodos();

        include 'vistas/radicados/entrantes/insertar.php';
        
    }

         
    public function editar(){
    
        $data['operacion'] = 'editar';

        $this->model->cargar("EntrantesModel.php");
        $EntrantesModel = new EntrantesModel();    
        
        $entrantes = $EntrantesModel->getTodos();       
        
        $datos = $EntrantesModel->getDatos($_POST['id_entrante']);
            
        include 'vistas/radicados/entrantes/editar.php';
               
    }
        
    public function insertar() {
      
        $this->model->cargar("EntrantesModel.php", "radicados");
        $EntrantesModel = new EntrantesModel();            
        
        $resp = $EntrantesModel->insertar(
                    $_POST["numero_entrante"],
                    $_POST["remitente_entrante"],
                    $_POST["destinatario_entrante"],
                    $_POST["fecharadicado_entrante"],
                    $_POST["fecharecibido_entrante"],
                    $_POST["fechamaxima_entrante"],
                    $_POST["prioridad_entrante"],
                    $_POST["numerofolios_entrante"],
                    $_POST["descripcionfolios_entrante"],
                    $_POST["asunto_entrante"],
                    $_POST["tiporadicado_entrante"],
                    $_POST["responsable_entrante"],
                    $_POST["observaciones_entrante"],
                    $_POST["estado_entrante"]
                );        
        
        if( $resp != 0 ){
            echo 1;
        }else{
            echo 0;			
        }      
        
    }
    
    public function guardar() {
        
        $this->model->cargar("EntrantesModel.php", 'radicados');
        $EntrantesModel = new EntrantesModel();
            
        $resp = $EntrantesModel->editar(
                    $_POST["id_entrante"], 
                    $_POST["numero_entrante"],
                    $_POST["remitente_entrante"],
                    $_POST["destinatario_entrante"],
                    $_POST["fecharadicado_entrante"],
                    $_POST["fecharecibido_entrante"],
                    $_POST["fechamaxima_entrante"],
                    $_POST["prioridad_entrante"],
                    $_POST["numerofolios_entrante"],
                    $_POST["descripcionfolios_entrante"],
                    $_POST["asunto_entrante"],
                    $_POST["tiporadicado_entrante"],
                    $_POST["responsable_entrante"],
                    $_POST["observaciones_entrante"],
                    $_POST["estado_entrante"]
        );        
      
        if( $resp != 0 ){
             echo 1;             
        }else{
            echo 0;		
        }
        
    }    
        
    public function eliminar() {
        
        $this->model->cargar("EntrantesModel.php", "radicados");
        $EntrantesModel = new EntrantesModel();
        
        $EntrantesModel->eliminar($_POST["id_entrante"]);
        
        echo "1";        
        
    }    
   
             
 }