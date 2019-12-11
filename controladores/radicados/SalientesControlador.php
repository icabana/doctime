<?php

class SalientesControlador extends ControllerBase {

    public function index() {
        
        $this->model->cargar("SalientesModel.php", "radicados");
        $SalientesModel = new SalientesModel();
        $salientes = $SalientesModel->getTodos();

        $this->model->cargar("EstadosradicadoModel.php", "configuracion");
        $EstadosradicadoModel = new EstadosradicadoModel();
        $estadosradicado = $EstadosradicadoModel->getTodos();

        $this->model->cargar("EmpleadosModel.php", "administracion");
        $EmpleadosModel = new EmpleadosModel();
        $empleados = $EmpleadosModel->getTodos();

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

        $this->model->cargar("SalientesModel.php", "radicados");
        $SalientesModel = new SalientesModel();
        $max_consecutivo = $SalientesModel->getConsecutivo() + 1;

        $cantidad = strlen($max_consecutivo);
        for($i=$cantidad; $i<5; $i++){
            $consecutivo2 .= "0"; 
        }

        $consecutivo = $consecutivo2.$max_consecutivo;
        $numero_saliente = date("Ymd").$consecutivo;

        include 'vistas/radicados/salientes/insertar.php';
        
    }

         
    public function editar(){

        $this->model->cargar("TercerosModel.php", "administracion");
        $TercerosModel = new TercerosModel();
        $terceros = $TercerosModel->getTodos();   
        
        $this->model->cargar("TiposradicadoModel.php", "administracion");
        $TiposradicadoModel = new TiposradicadoModel();
        $tiposradicado = $TiposradicadoModel->getTodos();

        $this->model->cargar("SalientesModel.php");
        $SalientesModel = new SalientesModel();         
        $datos = $SalientesModel->getDatos($_POST['id_saliente']);

        $trazabilidad = $SalientesModel->getTrazabilidad($_POST['id_saliente']);

        $this->model->cargar("DocumentosSalientesModel.php", "configuracion");
        $DocumentosSalientesModel = new DocumentosSalientesModel();   
        $documentos  = $DocumentosSalientesModel->getTodos($_POST['id_saliente']);

        $this->model->cargar("EmpleadosModel.php", "administracion");
        $EmpleadosModel = new EmpleadosModel();
        $empleados = $EmpleadosModel->getTodos();

        include 'vistas/radicados/salientes/editar.php';
               
    }
         
    public function editarArchivo(){

        include 'vistas/radicados/salientes/archivo.php';
               
    }
         
    public function actualizarUpload(){

        
        $this->model->cargar("DocumentosSalientesModel.php", "configuracion");
        $DocumentosSalientesModel = new DocumentosSalientesModel();   
        $documentos  = $DocumentosSalientesModel->getTodos($_POST['id_saliente']);


        $id_saliente = $_POST['id_saliente'];
        include 'vistas/radicados/salientes/tabla_documentos.php';
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

        $this->model->cargar("SalientesModel.php");
        $SalientesModel = new SalientesModel();         
        $datos = $SalientesModel->getDatos($_POST['id_saliente']);

        $trazabilidad = $SalientesModel->getTrazabilidad($_POST['id_saliente']);

        $this->model->cargar("DocumentosSalientesModel.php", "configuracion");
        $DocumentosSalientesModel = new DocumentosSalientesModel();   
        $documentos  = $DocumentosSalientesModel->getTodos($_POST['id_saliente']);
        
        include 'vistas/radicados/salientes/editar_usuario.php';
               
    }

    
    public function buscarDestinatario() {

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

      
    
    public function buscarRemitente() {

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
      
        $this->model->cargar("SalientesModel.php", "radicados");
        $SalientesModel = new SalientesModel();                 
        $max_consecutivo = $SalientesModel->getConsecutivo() + 1;

        $cantidad = strlen($max_consecutivo);
        for($i=$cantidad; $i<5; $i++){
            $consecutivo2 .= "0"; 
        }

        $consecutivo = $consecutivo2.$max_consecutivo;
        $numero_saliente = date("Ymd").$consecutivo;
        
       $resp = $SalientesModel->insertar(
                                    $max_consecutivo,
                                    $numero_saliente,
                                    $_POST["remitente_saliente"],
                                    $_POST["enviadopor_saliente"],
                                    $_POST["destinatario_saliente"],
                                    $_POST["fecharadicado_saliente"],
                                    $_POST["prioridad_saliente"],
                                    $_POST["numerofolios_saliente"],
                                    $_POST["descripcionfolios_saliente"],
                                    $_POST["asunto_saliente"],
                                    $_POST["tiporadicado_saliente"]
                                );        
        
        if( $resp != 0 ){
            
            mkdir('archivos/uploads/salientes/'.$resp);

            $SalientesModel->insertar_trazabilidad(
                $resp,
                "Registró el Radicado No. ".$numero_saliente
            );    

            echo $resp;

        }else{

            echo 0;			

        }      
        
    }
    
    public function guardar() {
        
        $this->model->cargar("SalientesModel.php", 'radicados');
        $SalientesModel = new SalientesModel();
            
        $resp = $SalientesModel->editar(
                                    $_POST["id_saliente"], 
                                    $_POST["remitente_saliente"],
                                    $_POST["destinatario_saliente"],
                                    $_POST["fecharadicado_saliente"],
                                    $_POST["numerofolios_saliente"],
                                    $_POST["descripcionfolios_saliente"],
                                    $_POST["asunto_saliente"],
                                    $_POST["tiporadicado_saliente"]
                                );        
      
        if( $resp != 0 ){

            $SalientesModel->insertar_trazabilidad(
                $_POST["id_saliente"],
                "Modificó la información del radicado"
            );  

             echo 1;             
        }else{
            echo 0;		
        }
        
    }    
        

    public function mover() {
        
        $this->model->cargar("SalientesModel.php", 'radicados');
        $SalientesModel = new SalientesModel();
            
        $resp = $SalientesModel->mover(
                                    $_POST["id_saliente"], 
                                    $_POST["carpeta_saliente"]
                                );        
      
        if( $resp != 0 ){

            $SalientesModel->insertar_trazabilidad(
                $_POST["id_saliente"],
                "Movió el radicado de carpeta"
            ); 

             echo 1;             
        }else{
            echo 0;		
        }
        
    }    


    public function nuevoDocumento() {
        
        $this->model->cargar("SalientesModel.php", 'radicados');
        $SalientesModel = new SalientesModel();
            
        $resp = $SalientesModel->nuevoDocumento(
                                    $_POST["id_saliente"], 
                                    $_POST["documento"]
                                );        
      
        if( $resp != 0 ){

            $SalientesModel->insertar_trazabilidad(
                $_POST["id_saliente"],
                "Agregó un nuevo documento"
            ); 

             echo 1; 

        }else{
            echo 0;		
        }
        
    }    


    public function cambiar() {
        
        $this->model->cargar("SalientesModel.php", 'radicados');
        $SalientesModel = new SalientesModel();
            
        $resp = $SalientesModel->cambiar(
                                    $_POST["id_saliente"], 
                                    $_POST["responsable_saliente"]
                                );        
      
       

            $SalientesModel->insertar_trazabilidad(
                $_POST["id_saliente"],
                "Cambió el responsable del radicado"
            ); 

        
    }    

    public function nueva() {
        
        $this->model->cargar("SalientesModel.php", 'radicados');
        $SalientesModel = new SalientesModel();            
    
        $SalientesModel->insertar_trazabilidad(
            $_POST["id_saliente"],
            $_POST["bitacora_saliente_editar"]
        ); 
        
    }    



    public function mover_default() {
        
        $this->model->cargar("SalientesModel.php", 'radicados');
        $SalientesModel = new SalientesModel();
            
        $resp = $SalientesModel->mover_default(
                                    $_POST["radicados"], 
                                    $_POST["carpeta_saliente"]
                                );        
      
        if( $resp != 0 ){
            
            $array_radicados = explode(",", $_POST['radicados']);

            foreach($array_radicados as $array){

                if($array[0] != 0){
                    $SalientesModel->insertar_trazabilidad(
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
        
        $this->model->cargar("SalientesModel.php", 'radicados');
        $SalientesModel = new SalientesModel();
            
        $resp = $SalientesModel->cambiar_default(
                                    $_POST["radicados"], 
                                    $_POST["responsable_saliente"]
                                );        

                   
            $array_radicados = explode(",", $_POST['radicados']);

            foreach($array_radicados as $array){

                if($array[0] != 0){
                    $SalientesModel->insertar_trazabilidad(
                        $array[0],
                        "Se modificó el responsable del Radicado"
                    ); 
                }
            }

             echo 1;    

       
        
    }    


    public function cambiarestado_default() {
        
        $this->model->cargar("SalientesModel.php", 'radicados');
        $SalientesModel = new SalientesModel();
            
        $resp = $SalientesModel->cambiarestado_default(
                                    $_POST["radicados"], 
                                    $_POST["estado_saliente"]
                                );        

                   
            $array_radicados = explode(",", $_POST['radicados']);

            foreach($array_radicados as $array){

                if($array[0] != 0){
                    $SalientesModel->insertar_trazabilidad(
                        $array[0],
                        "Se modificó el estado del Radicado"
                    ); 
                }
            }

             echo 1;    

       
        
    }    


    public function cambiarestado() {
        
        $this->model->cargar("SalientesModel.php", 'radicados');
        $SalientesModel = new SalientesModel();
            
        $resp = $SalientesModel->cambiarestado_default(
                                    $_POST["radicados"], 
                                    $_POST["estado_saliente"]
                                );        

                   
        $array_radicados = explode(",", $_POST['radicados']);

        foreach($array_radicados as $array){

            if($array[0] != 0){
                $SalientesModel->insertar_trazabilidad(
                    $array[0],
                    "Se modificó el estado del Radicado"
                ); 
            }
        }

            echo 1;    
        
    }    



    public function nueva_default() {
        
        $this->model->cargar("SalientesModel.php", 'radicados');
        $SalientesModel = new SalientesModel();   
        
        $array_radicados = explode(",", $_POST['radicados']);

        foreach($array_radicados as $array){
    
            if($array[0] != 0){

                $SalientesModel->insertar_trazabilidad(
                    $array[0],
                    $_POST["bitacora_saliente"]
                ); 
                
            }

        }
        
    }    


    public function eliminar() {
        
        $this->model->cargar("SalientesModel.php", "radicados");
        $SalientesModel = new SalientesModel();
        
        $SalientesModel->eliminar($_POST["radicados"]);
        
        echo "1";        
        
    }
   

    public function enviarBandejaSaliente() {
        
        $this->model->cargar("SalientesModel.php", "radicados");
        $SalientesModel = new SalientesModel();
        
        $SalientesModel->enviarBandejaSaliente($_POST["radicados"]);

        
        $array_radicados = explode(",", $_POST['radicados']);

        foreach($array_radicados as $array){
    
            if($array[0] != 0){

                $SalientesModel->insertar_trazabilidad(
                    $array[0],
                    "Envió el radicado nuevamente a la Bandeja de Entrada"
                ); 
                
            }

        }
        
        echo "1";        
        
    }
   
             
 }