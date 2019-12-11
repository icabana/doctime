<?php

class EntrantesControlador extends ControllerBase {

    public function index() {
        
        $this->model->cargar("EntrantesModel.php", "radicados");
        $EntrantesModel = new EntrantesModel();
        $entrantes = $EntrantesModel->getTodosActivos();

        $this->model->cargar("CarpetasModel.php", "radicados");
        $CarpetasModel = new CarpetasModel();
        $carpetas = $CarpetasModel->getTodos();

        $this->model->cargar("EstadosradicadoModel.php", "configuracion");
        $EstadosradicadoModel = new EstadosradicadoModel();
        $estadosradicado = $EstadosradicadoModel->getTodos();


        $this->model->cargar("EmpleadosModel.php", "administracion");
        $EmpleadosModel = new EmpleadosModel();
        $empleados = $EmpleadosModel->getTodos();

        include 'vistas/radicados/entrantes/default.php';
                        
    }    


    public function indexFinalizados() {
        
        $this->model->cargar("EntrantesModel.php", "radicados");
        $EntrantesModel = new EntrantesModel();
        $entrantes = $EntrantesModel->getTodosFinalizados();

        $this->model->cargar("CarpetasModel.php", "radicados");
        $CarpetasModel = new CarpetasModel();
        $carpetas = $CarpetasModel->getTodos();

        $this->model->cargar("EstadosradicadoModel.php", "configuracion");
        $EstadosradicadoModel = new EstadosradicadoModel();
        $estadosradicado = $EstadosradicadoModel->getTodos();


        $this->model->cargar("EmpleadosModel.php", "administracion");
        $EmpleadosModel = new EmpleadosModel();
        $empleados = $EmpleadosModel->getTodos();

        include 'vistas/radicados/entrantes/default.php';
                        
    }    


    public function indexArchivados() {
        
        $this->model->cargar("EntrantesModel.php", "radicados");
        $EntrantesModel = new EntrantesModel();
        $entrantes = $EntrantesModel->getTodosArchivados();

        $this->model->cargar("CarpetasModel.php", "radicados");
        $CarpetasModel = new CarpetasModel();
        $carpetas = $CarpetasModel->getTodos();

        $this->model->cargar("EstadosradicadoModel.php", "configuracion");
        $EstadosradicadoModel = new EstadosradicadoModel();
        $estadosradicado = $EstadosradicadoModel->getTodos();


        $this->model->cargar("EmpleadosModel.php", "administracion");
        $EmpleadosModel = new EmpleadosModel();
        $empleados = $EmpleadosModel->getTodos();

        include 'vistas/radicados/entrantes/default.php';
                        
    }    

    
    public function indexUsuario() {
        
        $this->model->cargar("EntrantesModel.php", "radicados");
        $EntrantesModel = new EntrantesModel();
        $entrantes = $EntrantesModel->getTodosUsuario();

        $this->model->cargar("CarpetasModel.php", "radicados");
        $CarpetasModel = new CarpetasModel();
        $carpetas = $CarpetasModel->getTodos();

        $this->model->cargar("EmpleadosModel.php", "administracion");
        $EmpleadosModel = new EmpleadosModel();
        $empleados = $EmpleadosModel->getTodos();

        $this->model->cargar("EstadosradicadoModel.php", "configuracion");
        $EstadosradicadoModel = new EstadosradicadoModel();
        $estadosradicado = $EstadosradicadoModel->getTodos();

        include 'vistas/radicados/entrantes/default_usuario.php';
                        
    }    


    public function index_carpeta() {
        
        $this->model->cargar("EntrantesModel.php", "radicados");
        $EntrantesModel = new EntrantesModel();
        $entrantes = $EntrantesModel->getTodosPorCarpeta($_POST['id_carpeta']);

        $this->model->cargar("CarpetasModel.php", "radicados");
        $CarpetasModel = new CarpetasModel();
        $carpetas = $CarpetasModel->getTodos();

        $this->model->cargar("EmpleadosModel.php", "administracion");
        $EmpleadosModel = new EmpleadosModel();
        $empleados = $EmpleadosModel->getTodos();

        $this->model->cargar("EstadosradicadoModel.php", "configuracion");
        $EstadosradicadoModel = new EstadosradicadoModel();
        $estadosradicado = $EstadosradicadoModel->getTodos();

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

        $this->model->cargar("PrioridadesModel.php", "configuracion");
        $PrioridadesModel = new PrioridadesModel();
        $prioridades = $PrioridadesModel->getTodos();

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

        $this->model->cargar("TercerosModel.php", "administracion");
        $TercerosModel = new TercerosModel();
        $terceros = $TercerosModel->getTodos();   
        
        $this->model->cargar("TiposradicadoModel.php", "administracion");
        $TiposradicadoModel = new TiposradicadoModel();
        $tiposradicado = $TiposradicadoModel->getTodos();

        $this->model->cargar("EstadosModel.php", "configuracion");
        $EstadosModel = new EstadosModel();
        $estados = $EstadosModel->getTodos();

        $this->model->cargar("PrioridadesModel.php", "configuracion");
        $PrioridadesModel = new PrioridadesModel();
        $prioridades = $PrioridadesModel->getTodos();

        $this->model->cargar("EntrantesModel.php");
        $EntrantesModel = new EntrantesModel();         
        $datos = $EntrantesModel->getDatos($_POST['id_entrante']);


        $this->model->cargar("CarpetasModel.php", "radicados");
        $CarpetasModel = new CarpetasModel();
        $carpetas = $CarpetasModel->getTodos();
        
        $trazabilidad = $EntrantesModel->getTrazabilidad($_POST['id_entrante']);


        $this->model->cargar("EstadosradicadoModel.php", "configuracion");
        $EstadosradicadoModel = new EstadosradicadoModel();
        $estadosradicado = $EstadosradicadoModel->getTodos();

        $this->model->cargar("DocumentosModel.php", "configuracion");
        $DocumentosModel = new DocumentosModel();   
        $documentos  = $DocumentosModel->getTodos($_POST['id_entrante']);

        $this->model->cargar("EmpleadosModel.php", "administracion");
        $EmpleadosModel = new EmpleadosModel();
        $empleados = $EmpleadosModel->getTodos();

        include 'vistas/radicados/entrantes/editar.php';
               
    }
         
    public function editarArchivo(){

        include 'vistas/radicados/entrantes/archivo.php';
               
    }
         
    public function actualizarUpload(){

        
        $this->model->cargar("DocumentosModel.php", "configuracion");
        $DocumentosModel = new DocumentosModel();   
        $documentos  = $DocumentosModel->getTodos($_POST['id_entrante']);


        $id_entrante = $_POST['id_entrante'];
        include 'vistas/radicados/entrantes/tabla_documentos.php';
        echo $tabla_documentos;
               
    }

         
    public function editarUsuario(){
    
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

        $this->model->cargar("PrioridadesModel.php", "configuracion");
        $PrioridadesModel = new PrioridadesModel();
        $prioridades = $PrioridadesModel->getTodos();

        $this->model->cargar("EntrantesModel.php");
        $EntrantesModel = new EntrantesModel();         
        $datos = $EntrantesModel->getDatos($_POST['id_entrante']);

        $trazabilidad = $EntrantesModel->getTrazabilidad($_POST['id_entrante']);

        $this->model->cargar("DocumentosModel.php", "configuracion");
        $DocumentosModel = new DocumentosModel();   
        $documentos  = $DocumentosModel->getTodos($_POST['id_entrante']);
        
        include 'vistas/radicados/entrantes/editar_usuario.php';
               
    }

    
    public function buscarRemitente() {

        $this->model->cargar("TercerosModel.php", "administracion");
        $TercerosModel = new TercerosModel();

        $terceros = $TercerosModel->getTercerosLIKE($_POST['texto']);

        $tabla_terceros = "<table id='tabla_terceros'  class='table table-hover'>

    <thead>
        <tr>     
            <th><center>NOMBRE</center></th> 
        </tr>
        </thead>
    <tbody>";

        foreach ($terceros as $clave => $valor) {

            $tabla_terceros .= "<tr onclick='seleccionar_remitente(" . $valor['id_tercero'] . ", \"" . (utf8_encode($valor['nombre_tercero'])) . "\");'>";  
            $tabla_terceros .= "<td><strong>" . utf8_encode($valor['nombre_tercero']) . "</strong></td>";
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

            $tabla_empleados .= "<tr onclick='seleccionar_destinatario(" . $valor['id_empleado'] . ", \"" . utf8_encode($valor['nombres_empleado']) . "\", \"" . utf8_encode($valor['apellidos_empleado']) . "\");'>";  
            $tabla_empleados .= "<td><strong>" . utf8_encode($valor['nombres_empleado'])." ".utf8_encode($valor['apellidos_empleado']) . "</strong></td>";
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
            
            mkdir('archivos/uploads/entrantes/'.$resp);

            $EntrantesModel->insertar_trazabilidad(
                $resp,
                "Registró el Radicado No. ".$numero_entrante
            );    

            echo $resp;

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
                                    $_POST["observaciones_entrante"]
                                );        
      
        if( $resp != 0 ){

            $EntrantesModel->insertar_trazabilidad(
                $_POST["id_entrante"],
                "Modificó la información del radicado"
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
                "Movió el radicado de carpeta"
            ); 

             echo 1;             
        }else{
            echo 0;		
        }
        
    }    


    public function nuevoDocumento() {
        
        $this->model->cargar("EntrantesModel.php", 'radicados');
        $EntrantesModel = new EntrantesModel();
            
        $resp = $EntrantesModel->nuevoDocumento(
                                    $_POST["id_entrante"], 
                                    $_POST["documento"]
                                );        
      
        if( $resp != 0 ){

            $EntrantesModel->insertar_trazabilidad(
                $_POST["id_entrante"],
                "Agregó un nuevo documento"
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
      
       

            $EntrantesModel->insertar_trazabilidad(
                $_POST["id_entrante"],
                "Cambió el responsable del radicado"
            ); 

        
    }    

    public function nueva() {
        
        $this->model->cargar("EntrantesModel.php", 'radicados');
        $EntrantesModel = new EntrantesModel();            
    
        $EntrantesModel->insertar_trazabilidad(
            $_POST["id_entrante"],
            $_POST["bitacora_entrante_editar"]
        ); 
        
    }    



    public function mover_default() {
        
        $this->model->cargar("EntrantesModel.php", 'radicados');
        $EntrantesModel = new EntrantesModel();
            
        $resp = $EntrantesModel->mover_default(
                                    $_POST["radicados"], 
                                    $_POST["carpeta_entrante"]
                                );        
      
        if( $resp != 0 ){
            
            $array_radicados = explode(",", $_POST['radicados']);

            foreach($array_radicados as $array){

                if($array[0] != 0){
                    $EntrantesModel->insertar_trazabilidad(
                        $array[0],
                        "Movió el radicado de carpeta"
                    ); 
                }
            }

             echo 1;             
        }else{
            echo 0;		
        }
        
    }    

    public function cambiar_default() {
        
        $this->model->cargar("EntrantesModel.php", 'radicados');
        $EntrantesModel = new EntrantesModel();
            
        $resp = $EntrantesModel->cambiar_default(
                                    $_POST["radicados"], 
                                    $_POST["responsable_entrante"]
                                );        

                   
            $array_radicados = explode(",", $_POST['radicados']);

            foreach($array_radicados as $array){

                if($array[0] != 0){
                    $EntrantesModel->insertar_trazabilidad(
                        $array[0],
                        "Se modificó el responsable del Radicado"
                    ); 
                }
            }

             echo 1;    

       
        
    }    


    public function cambiarestado_default() {
        
        $this->model->cargar("EntrantesModel.php", 'radicados');
        $EntrantesModel = new EntrantesModel();
            
        $resp = $EntrantesModel->cambiarestado_default(
                                    $_POST["radicados"], 
                                    $_POST["estado_entrante"]
                                );        

                   
            $array_radicados = explode(",", $_POST['radicados']);

            foreach($array_radicados as $array){

                if($array[0] != 0){
                    $EntrantesModel->insertar_trazabilidad(
                        $array[0],
                        "Se modificó el estado del Radicado"
                    ); 
                }
            }

             echo 1;    

       
        
    }    


    public function cambiarestado() {
        
        $this->model->cargar("EntrantesModel.php", 'radicados');
        $EntrantesModel = new EntrantesModel();
            
        $resp = $EntrantesModel->cambiarestado_default(
                                    $_POST["radicados"], 
                                    $_POST["estado_entrante"]
                                );        

                   
        $array_radicados = explode(",", $_POST['radicados']);

        foreach($array_radicados as $array){

            if($array[0] != 0){
                $EntrantesModel->insertar_trazabilidad(
                    $array[0],
                    "Se modificó el estado del Radicado"
                ); 
            }
        }

            echo 1;    
        
    }    



    public function nueva_default() {
        
        $this->model->cargar("EntrantesModel.php", 'radicados');
        $EntrantesModel = new EntrantesModel();   
        
        $array_radicados = explode(",", $_POST['radicados']);

        foreach($array_radicados as $array){
    
            if($array[0] != 0){

                $EntrantesModel->insertar_trazabilidad(
                    $array[0],
                    $_POST["bitacora_entrante"]
                ); 
                
            }

        }
        
    }    


    public function eliminar() {
        
        $this->model->cargar("EntrantesModel.php", "radicados");
        $EntrantesModel = new EntrantesModel();
        
        $EntrantesModel->eliminar($_POST["radicados"]);
        
        echo "1";        
        
    }
   

    public function enviarBandejaEntrante() {
        
        $this->model->cargar("EntrantesModel.php", "radicados");
        $EntrantesModel = new EntrantesModel();
        
        $EntrantesModel->enviarBandejaEntrante($_POST["radicados"]);

        
        $array_radicados = explode(",", $_POST['radicados']);

        foreach($array_radicados as $array){
    
            if($array[0] != 0){

                $EntrantesModel->insertar_trazabilidad(
                    $array[0],
                    "Envió el radicado nuevamente a la Bandeja de Entrada"
                ); 
                
            }

        }
        
        echo "1";        
        
    }
   
             
 }