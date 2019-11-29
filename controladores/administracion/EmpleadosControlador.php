<?php

class EmpleadosControlador extends ControllerBase {

    public function index() {
        
        $this->model->cargar("EmpleadosModel.php", "administracion");
        $EmpleadosModel = new EmpleadosModel();

        $empleados = $EmpleadosModel->getTodos();

        include 'vistas/administracion/empleados/default.php';
                        
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

        include 'vistas/administracion/empleados/insertar.php';
        
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
        
        $this->model->cargar("EmpleadosModel.php", "administracion");
        $EmpleadosModel = new EmpleadosModel();    
           
        
        $datos = $EmpleadosModel->getDatos($_POST['id_empleado']);
            
        include 'vistas/administracion/empleados/editar.php';
               
    }
        
    public function insertar() {
      
        $this->model->cargar("EmpleadosModel.php", "administracion");
        $EmpleadosModel = new EmpleadosModel();            
        
        $resp = $EmpleadosModel->insertar(
            $_POST["documento_empleado"],
            $_POST["tipodocumento_empleado"],
            $_POST["nombres_empleado"],
            $_POST["apellidos_empleado"],
            $_POST["telefono_empleado"],
            $_POST["celular_empleado"],
            $_POST["correo_empleado"],
            $_POST["direccion_empleado"],
            $_POST["ciudad_empleado"],
            $_POST["sexo_empleado"],
            $_POST["estadocivil_empleado"],
            $_POST["fechanacimiento_empleado"],
            $_POST["lugarnacimiento_empleado"],
            $_POST["estado_empleado"]
        );        
        
        if( $resp != 0 ){
            echo 1;
        }else{
            echo 0;			
        }      
        
    }
    
    public function guardar() {
        
        $this->model->cargar("EmpleadosModel.php", 'administracion');
        $EmpleadosModel = new EmpleadosModel();
            
        $resp = $EmpleadosModel->editar(
                    $_POST["id_empleado"], 
                    $_POST["documento_empleado"],
                    $_POST["tipodocumento_empleado"],
                    $_POST["nombres_empleado"],
                    $_POST["apellidos_empleado"],
                    $_POST["telefono_empleado"],
                    $_POST["celular_empleado"],
                    $_POST["correo_empleado"],
                    $_POST["direccion_empleado"],
                    $_POST["ciudad_empleado"],
                    $_POST["sexo_empleado"],
                    $_POST["estadocivil_empleado"],
                    $_POST["fechanacimiento_empleado"],
                    $_POST["lugarnacimiento_empleado"],
                    $_POST["estado_empleado"]
                );        
      
        if( $resp != 0 ){
             echo 1;             
        }else{
            echo 0;		
        }
        
    }    
        
    public function eliminar() {
        
        $this->model->cargar("EmpleadosModel.php", "administracion");
        $EmpleadosModel = new EmpleadosModel();
        
        $EmpleadosModel->eliminar($_POST["id_empleado"]);
        
        echo "1";        
        
    }    
   
             
 }