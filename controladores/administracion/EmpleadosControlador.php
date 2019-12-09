<?php

class EmpleadosControlador extends ControllerBase {

    public function index() {
        
        $this->model->cargar("EmpleadosModel.php", "administracion");
        $EmpleadosModel = new EmpleadosModel();
        $empleados = $EmpleadosModel->getTodos();

        include 'vistas/administracion/empleados/default.php';
                        
    }    
    
    public function nuevo(){
        
        $this->model->cargar("TiposdocumentoModel.php", "configuracion");
        $TiposdocumentoModel = new TiposdocumentoModel();
        $tiposdocumento = $TiposdocumentoModel->getTodos();

        $this->model->cargar("EstadoscivilModel.php", "configuracion");
        $EstadoscivilModel = new EstadoscivilModel();
        $estadoscivil = $EstadoscivilModel->getTodos();

        $this->model->cargar("SexosModel.php", "configuracion");
        $SexosModel = new SexosModel();
        $sexos = $SexosModel->getTodos();

        $this->model->cargar("DependenciasModel.php", "administracion");
        $DependenciasModel = new DependenciasModel();
        $dependencias = $DependenciasModel->getTodos();

        $this->model->cargar("EstadosModel.php", "configuracion");
        $EstadosModel = new EstadosModel();
        $estados = $EstadosModel->getTodos();

        include 'vistas/administracion/empleados/insertar.php';
        
    }

         
    public function editar(){
    
        $this->model->cargar("TiposdocumentoModel.php", "configuracion");
        $TiposdocumentoModel = new TiposdocumentoModel();
        $tiposdocumento = $TiposdocumentoModel->getTodos();

        $this->model->cargar("EstadoscivilModel.php", "configuracion");
        $EstadoscivilModel = new EstadoscivilModel();
        $estadoscivil = $EstadoscivilModel->getTodos();

        $this->model->cargar("SexosModel.php", "configuracion");
        $SexosModel = new SexosModel();
        $sexos = $SexosModel->getTodos();

        $this->model->cargar("DependenciasModel.php", "administracion");
        $DependenciasModel = new DependenciasModel();
        $dependencias = $DependenciasModel->getTodos();
        
        $this->model->cargar("EstadosModel.php", "configuracion");
        $EstadosModel = new EstadosModel();
        $estados = $EstadosModel->getTodos();

        $this->model->cargar("EmpleadosModel.php", "administracion");
        $EmpleadosModel = new EmpleadosModel();     
        $datos = $EmpleadosModel->getDatos($_POST['id_empleado']);
            
        $this->model->cargar("UsuariosModel.php", "configuracion");
        $UsuariosModel = new UsuariosModel();     
        $datos_usuario = $UsuariosModel->getDatos($datos['usuario_empleado']);

        include 'vistas/administracion/empleados/editar.php';
               
    }
        
    public function insertar() {
      
        $this->model->cargar("EmpleadosModel.php", "administracion");
        $EmpleadosModel = new EmpleadosModel();      
        
        $this->model->cargar("UsuariosModel.php", "configuracion");
        $UsuariosModel = new UsuariosModel();     
        
        if($UsuariosModel->existeNick($_POST["usuario_empleado"])){

            echo "error_nick";

        }else if($EmpleadosModel->existeDocumento($_POST["documento_empleado"])){

            echo "error_documento";
            return;

        }else if($EmpleadosModel->existeCorreo($_POST["correo_empleado"])){

            echo "error_correo";
            return;

        }else{
        
            $resp = $UsuariosModel->insertar(
                                            $_POST["usuario_empleado"], 
                                            $_POST["password_empleado"], 
                                            '3'
                                        );        
            
            $resp = $EmpleadosModel->insertar(
                $_POST["documento_empleado"],
                $_POST["dependencia_empleado"],
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
                $resp
            );              
            
        }
    }
    
    public function guardar() {
        
        $this->model->cargar("EmpleadosModel.php", 'administracion');
        $EmpleadosModel = new EmpleadosModel();
            
        $resp = $EmpleadosModel->editar(
                                    $_POST["id_empleado"], 
                                    $_POST["documento_empleado"],
                                    $_POST["dependencia_empleado"],
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
                                    $_POST["lugarnacimiento_empleado"]
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