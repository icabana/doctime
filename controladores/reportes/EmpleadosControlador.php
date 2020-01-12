<?php

class EmpleadosControlador extends ControllerBase {
    

    public function cargarEmpleados() {
        
        $this->model->cargar("EmpleadosModel.php", "administracion");
        $EmpleadosModel = new EmpleadosModel();
        
        $this->model->cargar("DependenciasModel.php", "administracion");
        $DependenciasModel = new DependenciasModel();
        
        $this->model->cargar("SexosModel.php", "configuracion");
        $SexosModel = new SexosModel();

        $empleados = $EmpleadosModel->getTodos();
        $dependencias = $DependenciasModel->getTodos();
        $sexos = $SexosModel->getTodos();

        include 'vistas/reportes/empleados/empleados.php';
                        
    }   
    


    public function generarReporteEmpleados(){
         
        $this->model->cargar("EmpleadosModel.php", "administracion");
        $EmpleadosModel = new EmpleadosModel();

        $empleados = $EmpleadosModel->getFiltroEmpleados(
            $_POST['dependencia'], 
            $_POST['sexo']
        );

                 
        include("vistas/reportes/empleados/pdf_reporte_empleados.php");   
       
        $dirPdf = "archivos/reportes/empleados/pdf_reporte_empleados.pdf";

        $this->pdf->Output(''.$dirPdf.'');

        echo "urlRuta=".$dirPdf;
        
    }
    

    
    public function generarReporteEmpleadosExcel(){
         
        $this->model->cargar("EmpleadosModel.php", "administracion");
        $EmpleadosModel = new EmpleadosModel();

        $empleados = $EmpleadosModel->getFiltroEmpleados(
            $_POST['dependencia'], 
            $_POST['sexo']
        );

       
        $nombre_archivo = "empleados_".date('Y-m-d_H-i-s').".xls";        
        $ruta = dirname(__FILE__, 3).DIRECTORY_SEPARATOR."archivos".DIRECTORY_SEPARATOR."reportes_excel".DIRECTORY_SEPARATOR.$nombre_archivo;        

        include("vistas/reportes/empleados/reporte_excel_empleados.php");        
           
        echo "archivos/reportes_excel/".$nombre_archivo;
    }
    
    
    
    public function cargarTablaEmpleados(){
         
        $this->model->cargar("EmpleadosModel.php", "administracion");
        $EmpleadosModel = new EmpleadosModel();     
        
        $empleados = $EmpleadosModel->getFiltroEmpleados(
                            $_POST['dependencia'], 
                            $_POST['sexo']
                        );
              
        include 'vistas/reportes/empleados/tabla_empleados.php';
          
    }
    
    
    
 }
 
?>