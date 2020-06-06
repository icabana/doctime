<?php

class AlertasControlador extends ControllerBase {


    public function radicadosxFinalizar() {
        
        $this->model->cargar("AlertasModel.php", "alertas");
        $AlertasModel = new AlertasModel();

        $empleados = $AlertasModel->getPorFinalizar();

        $fechas = new Fechas();
        $correo = new Correos();
        $param = new Parametros();
        $numero_contrato = "";   
        $mensaje = "";

        $cont = 1;

        foreach($empleados as $empleado){

            $nombre = $empleado['nombres_empleado']." ".$empleado['apellidos_empleado'];

            $mensaje = file_get_contents("plantillas/correos/plantilla_radicados/index.html");

            $numero_contrato = $contrato['numero_contrato'];

            $asunto = "Contrato No. ".$numero_contrato." esta por finalizar";

            $correos_supervisores[] = $param->valor('correoalertas1');
            $correos_supervisores[] = $param->valor('correoalertas2');
        
            $mensaje = str_replace("#dias#", $fechas->diasEntreFechas($contrato['fechafinal_contrato'], date("Y-m-d")), $mensaje);
            $mensaje = str_replace("#nombre#", $nombre, $mensaje);
            $mensaje = str_replace("#numero_contrato#", $numero_contrato, $mensaje);
            $mensaje = str_replace("#nombre_modalidad#", $contrato['nombre_modalidad'], $mensaje);
            $mensaje = str_replace("#nombre_tipocontrato#", $contrato['nombre_tipocontrato'], $mensaje);
            $mensaje = str_replace("#fechainicio_contrato#", $contrato['fechainicio_contrato'], $mensaje);
            $mensaje = str_replace("#fechafinal_contrato#", $contrato['fechafinal_contrato'], $mensaje);
            $mensaje = str_replace("#valor_contrato#", "$".number_format($contrato['valor_contrato'],0,',','.'), $mensaje);
            $mensaje = str_replace("#objeto_contrato#", $contrato['objeto_contrato'], $mensaje);

            $mensaje = str_replace("#nombre_empresa#",  $param->valor('empresa'), $mensaje);
            $mensaje = str_replace("#direccion#", $param->valor('direccion'), $mensaje);
            $mensaje = str_replace("#telefono#", $param->valor('telefono'), $mensaje);
            $mensaje = str_replace("#correo#", $param->valor('correo'), $mensaje);
            $mensaje = str_replace("#paginaweb#", $param->valor('paginaweb'), $mensaje);
            $mensaje = str_replace("#facebook#", $param->valor('facebook'), $mensaje);
            $mensaje = str_replace("#twitter#", $param->valor('twitter'), $mensaje);

            if($cont == 1){
                $correo->EnviarCorreo($mensaje, $asunto, $correos_supervisores);
            }
            $cont = 2;

        }
                        
    }    


    
    public function enviarCorreoEmpleado() {
        
        $this->model->cargar("AlertasModel.php", "alertas");
        $AlertasModel = new AlertasModel();

        $empleado = $AlertasModel->getPorFinalizarPorEmpleado($_POST['id_empleado']);

        $fechas = new Fechas();
        $correo = new Correos();
        $param = new Parametros();
        $numero_contrato = "";   
        $mensaje = "";

        $cont = 1;

        $nombre = $empleado['nombres_empleado']." ".$empleado['apellidos_empleado'];

        $mensaje = file_get_contents("plantillas/correos/plantilla_radicados_x_empleado/index.html");

        $mensaje2 = "";

        $radicados = $AlertasModel->getTodosRadicadosPorEmpleado($empleado['id_empleado']);

        foreach($radicados as $radicado){

                $nombre_remitente = $radicado['nombre_tercero'];
                $nombre_destinatario = $radicado['nombres_empleado']." ".$radicado['apellidos_empleado'];

                $mensaje2 .= "<br><br>";

                $mensaje2 .= "<b>No de Radicado:</b> ".$radicado['numero_entrante']."<br>";
                $mensaje2 .= "<b>Fecha de Radicado: </b>".$radicado['fecharadicado_entrante']."<br>";
                $mensaje2 .= "<b>Fecha Max de Respuesta: </b>".$radicado['fechamaxima_entrante']."<br>";
                $mensaje2 .= "<b>Tipo de Radicado: </b>".$radicado['nombre_tiporadicado']."<br>";
                $mensaje2 .= "<b>Remitente: </b>".$nombre_remitente."<br>";
                $mensaje2 .= "<b>Destinatario: </b>".$nombre_destinatario."<br>";
                $mensaje2 .= "<b>Asunto: </b>".$radicado['asunto_entrante']."<br>";


        }

        $mensaje = str_replace("#nombre#", $nombre, $mensaje);
        $mensaje = str_replace("#mensaje2#", $mensaje2, $mensaje);              

        $mensaje = str_replace("#nombre_empresa#",  $param->valor('NOMBREEMPRESA'), $mensaje);
        $mensaje = str_replace("#direccion#", $param->valor('DIREMPRESA'), $mensaje);
        $mensaje = str_replace("#telefono#", $param->valor('TELEFEMPRESA'), $mensaje);
        $mensaje = str_replace("#correo#", $param->valor('CORREOEMPRESA'), $mensaje);
        $mensaje = str_replace("#paginaweb#", $param->valor('PAGINAEMPRESA'), $mensaje);
        $mensaje = str_replace("#facebook#", $param->valor('FACEBOOK'), $mensaje);
        $mensaje = str_replace("#twitter#", $param->valor('TWITTER'), $mensaje);

       

        echo $correo->EnviarCorreo($mensaje, "Radicados por Finalizar", array($_POST['correo']));
       
        
                        
    }    

    
 }