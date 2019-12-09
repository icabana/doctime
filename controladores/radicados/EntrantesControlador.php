<?php

class EntrantesControlador extends ControllerBase {

    public function index() {
        
        $this->model->cargar("EntrantesModel.php", "radicados");
        $EntrantesModel = new EntrantesModel();
        $entrantes = $EntrantesModel->getTodos();

        $this->model->cargar("CarpetasModel.php", "radicados");
        $CarpetasModel = new CarpetasModel();
        $carpetas = $CarpetasModel->getTodos();

        $this->model->cargar("EmpleadosModel.php", "administracion");
        $EmpleadosModel = new EmpleadosModel();
        $empleados = $EmpleadosModel->getTodos();

        include 'vistas/radicados/entrantes/default.php';
                        
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

        $this->model->cargar("EntrantesModel.php", "radicados");
        $EntrantesModel = new EntrantesModel();
        $max_consecutivo = $EntrantesModel->getConsecutivo() + 1;

        $cantidad = strlen($max_consecutivo);
        for($i=$cantidad; $i<5; $i++){
            $consecutivo2 .= "0"; 
        }

        $consecutivo = $consecutivo2.$max_consecutivo;
        $numero_entrante = date("Ymd").$consecutivo;


        include 'vistas/radicados/entrantes/insertar.php';
        
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

        $this->model->cargar("EntrantesModel.php");
        $EntrantesModel = new EntrantesModel();         
        $datos = $EntrantesModel->getDatos($_POST['id_entrante']);

        $trazabilidad = $EntrantesModel->getTrazabilidad($_POST['id_entrante']);

        $this->model->cargar("DocumentosModel.php", "configuracion");
        $DocumentosModel = new DocumentosModel();         
        
        $documentos = $soportes = $DocumentosModel->getTodos($datos['id_entrante']);
        
        include 'vistas/radicados/entrantes/editar.php';
               
    }

    
    public function buscarRemitente() {

        $this->model->cargar("TercerosModel.php", "administracion");
        $TercerosModel = new TercerosModel();

        $terceros = $TercerosModel->getTercerosLIKE($_POST['texto']);
print_r($terceros);
        $tabla_terceros = "<table id='tabla_terceros'  class='table table-hover'>

    <thead>
        <tr>     
            <th><center>NOMBRE</center></th> 
        </tr>
        </thead>
    <tbody>";

        foreach ($terceros as $clave => $valor) {

            $tabla_terceros .= "<tr onclick='seleccionar_tercero(" . $valor['ID_TERCERO'] . ", \"" . ($valor['NOMBRES_TERCERO']) . "\");'>";  

            $tabla_terceros .= "<td><strong>" . utf8_encode($valor['NOMBRE_TERCERO']) . "</strong></td>";

            $tabla_terceros .= "</tr>";

        }

       $tabla_terceros .= "

</tbody></table>";

        echo $tabla_terceros;

      }

      
    
    public function buscarDestinatario() {

        $this->model->cargar("EmpleadosModel.php", "administracion");
        $EmpleadosModel = new EmpleadosModel();

        $empleados = $EmpleadosModel->getEmpleadosLIKE($_POST['texto']);

        $tabla_empleados = "<table id='tabla_empleados'  class='table table-hover'>

        <thead>
            <tr>     
                <th><center>NOMBRE</center></th> 
            </tr>
            </thead>
        <tbody>";

        foreach ($empleados as $clave => $valor) {

            $tabla_empleados .= "<tr onclick='seleccionar_empleado(" . $valor['ID_EMPLEADO'] . ", \"" . ($valor['NOMBRES_EMPLEADO']) . "\", \"" . (utf8_encode($valor['APELLIDOS_EMPLEADO'])) . "\");'>";  

            $tabla_empleados .= "<td><strong>" . utf8_encode($valor['NOMBRES_EMPLEADO'])." ".(utf8_encode($valor['APELLIDOS_EMPLEADO'])) . "</strong></td>";

            $tabla_empleados .= "</tr>";

        }

       $tabla_empleados .= "

        </tbody></table>";

        echo $tabla_empleados;

      }



    public function insertar() {
      
        $this->model->cargar("EntrantesModel.php", "radicados");
        $EntrantesModel = new EntrantesModel();                 
        $max_consecutivo = $EntrantesModel->getConsecutivo() + 1;

        $cantidad = strlen($max_consecutivo);
        for($i=$cantidad; $i<5; $i++){
            $consecutivo2 .= "0"; 
        }

        $consecutivo = $consecutivo2.$max_consecutivo;
        $numero_entrante = date("Ymd").$consecutivo;
        
        $resp = $EntrantesModel->insertar(
                                    $max_consecutivo,
                                    $numero_entrante,
                                    $_POST["remitente_entrante"],
                                    $_POST["enviadopor_entrante"],
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
                                    $_POST["observaciones_entrante"]
                                );        
        
        if( $resp != 0 ){
            
            $EntrantesModel->insertar_trazabilidad(
                $resp,
                "Se registró el Radicado No. ".$numero_entrante
            );    

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
                                    $_POST["enviadopor_entrante"],
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

            $EntrantesModel->insertar_trazabilidad(
                $resp,
                "Se modificó la información del radicado"
            );  

             echo 1;             
        }else{
            echo 0;		
        }
        
    }    
        

    public function mover() {
        
        $this->model->cargar("EntrantesModel.php", 'radicados');
        $EntrantesModel = new EntrantesModel();
            
        $resp = $EntrantesModel->mover(
                                    $_POST["id_entrante"], 
                                    $_POST["carpeta_entrante"]
                                );        
      
        if( $resp != 0 ){

            $EntrantesModel->insertar_trazabilidad(
                $_POST["id_entrante"],
                "Se movió el radicado de carpeta"
            ); 

             echo 1;             
        }else{
            echo 0;		
        }
        
    }    

    public function cambiar() {
        
        $this->model->cargar("EntrantesModel.php", 'radicados');
        $EntrantesModel = new EntrantesModel();
            
        $resp = $EntrantesModel->cambiar(
                                    $_POST["id_entrante"], 
                                    $_POST["responsable_entrante"]
                                );        
      
        if( $resp != 0 ){

            $EntrantesModel->insertar_trazabilidad(
                $_POST["id_entrante"],
                "Se cambió el responsable del radicado"
            ); 

             echo 1;             
        }else{
            echo 0;		
        }
        
    }    

    public function nueva() {
        
        $this->model->cargar("EntrantesModel.php", 'radicados');
        $EntrantesModel = new EntrantesModel();            
    
        $EntrantesModel->insertar_trazabilidad(
            $_POST["id_entrante"],
            $_POST["bitacora_entrante"]
        ); 
        
    }    

    public function eliminar() {
        
        $this->model->cargar("EntrantesModel.php", "radicados");
        $EntrantesModel = new EntrantesModel();
        
        $EntrantesModel->eliminar($_POST["radicados"]);
        
        echo "1";        
        
    }
   
             
 }