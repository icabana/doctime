<?php

class SalientesControlador extends ControllerBase {

    public function index() {
        
        $this->model->cargar("SalientesModel.php", "radicados");
        $SalientesModel = new SalientesModel();

        $salientes = $SalientesModel->getTodos();

        include 'vistas/radicados/salientes/default.php';
                        
    }    
    
    public function nuevo(){

        $this->model->cargar("EmpleadosModel.php", "administracion");
        $EmpleadosModel = new EmpleadosModel();
        $empleados = $EmpleadosModel->getTodos();

        $this->model->cargar("TercerosModel.php", "administracion");
        $TercerosModel = new TercerosModel();
        $terceros = $TercerosModel->getTodos();   
        
        $this->model->cargar("TiposradicadoModel.php", "administracion");
        $TiposradicadoModel = new TiposradicadoModel();
        $tiposradicado = $TiposradicadoModel->getTodos();

        $this->model->cargar("EstadosModel.php", "configuracion");
        $EstadosModel = new EstadosModel();
        $estados = $EstadosModel->getTodos();
        
        include 'vistas/radicados/salientes/insertar.php';
        
    }

         
    public function editar(){
    
        $this->model->cargar("EmpleadosModel.php", "administracion");
        $EmpleadosModel = new EmpleadosModel();
        $empleados = $EmpleadosModel->getTodos();

        $this->model->cargar("TercerosModel.php", "administracion");
        $TercerosModel = new TercerosModel();
        $terceros = $TercerosModel->getTodos();   
        
        $this->model->cargar("TiposradicadoModel.php", "administracion");
        $TiposradicadoModel = new TiposradicadoModel();
        $tiposradicado = $TiposradicadoModel->getTodos();

        $this->model->cargar("EstadosModel.php", "configuracion");
        $EstadosModel = new EstadosModel();
        $estados = $EstadosModel->getTodos();

        $this->model->cargar("SalientesModel.php");
        $SalientesModel = new SalientesModel();       
        
        $datos = $SalientesModel->getDatos($_POST['id_saliente']);
            
        include 'vistas/radicados/salientes/editar.php';
               
    }
        
    public function insertar() {
      
        $this->model->cargar("SalientesModel.php", "radicados");
        $SalientesModel = new SalientesModel();            
        
        $resp = $SalientesModel->insertar(
                                    $_POST["numero_saliente"],
                                    $_POST["remitente_saliente"],
                                    $_POST["destinatario_saliente"],
                                    $_POST["fecharadicado_saliente"],
                                    $_POST["fecharecibido_saliente"],
                                    $_POST["fechamaxima_saliente"],
                                    $_POST["prioridad_saliente"],
                                    $_POST["numerofolios_saliente"],
                                    $_POST["descripcionfolios_saliente"],
                                    $_POST["asunto_saliente"],
                                    $_POST["tiporadicado_saliente"],
                                    $_POST["responsable_saliente"],
                                    $_POST["observaciones_saliente"],
                                    $_POST["estado_saliente"]
                                );        
        
        if( $resp != 0 ){
            echo 1;
        }else{
            echo 0;			
        }      
        
    }
    
    public function guardar() {
        
        $this->model->cargar("SalientesModel.php", 'radicados');
        $SalientesModel = new SalientesModel();
            
        $resp = $SalientesModel->editar(
                                    $_POST["id_saliente"], 
                                    $_POST["numero_saliente"],
                                    $_POST["remitente_saliente"],
                                    $_POST["destinatario_saliente"],
                                    $_POST["fecharadicado_saliente"],
                                    $_POST["fecharecibido_saliente"],
                                    $_POST["fechamaxima_saliente"],
                                    $_POST["prioridad_saliente"],
                                    $_POST["numerofolios_saliente"],
                                    $_POST["descripcionfolios_saliente"],
                                    $_POST["asunto_saliente"],
                                    $_POST["tiporadicado_saliente"],
                                    $_POST["responsable_saliente"],
                                    $_POST["observaciones_saliente"],
                                    $_POST["estado_saliente"]
                                );        
      
        if( $resp != 0 ){
             echo 1;             
        }else{
            echo 0;		
        }
        
    }    
        
    public function eliminar() {
        
        $this->model->cargar("SalientesModel.php", "radicados");
        $SalientesModel = new SalientesModel();
        
        $SalientesModel->eliminar($_POST["id_saliente"]);
        
        echo "1";        
        
    }       
             
 }