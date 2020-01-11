<?php

class ReportesControlador extends ControllerBase {
    
    public function cargarEntrantes() {
        
        $this->model->cargar("EntrantesModel.php", "radicados");
        $EntrantesModel = new EntrantesModel();

        $entrantes = $EntrantesModel->getTodosTodos();
        
        include 'vistas/reportes/entrantes.php';
                        
    }   

     
    public function cargarTablaReportesSalida() {
        
        $this->model->cargar("SalientesModel.php", "radicados");
        $SalientesModel = new SalientesModel();

        $salientes = $SalientesModel->getTodosTodos();
        
        include 'vistas/reportes/salientes.php';
                        
    }   
    
    public function cargarTablaReportesEmpleados() {
        
        $this->model->cargar("EmpleadosModel.php", "administracion");
        $EmpleadosModel = new EmpleadosModel();
        
        $this->model->cargar("DependenciasModel.php", "administracion");
        $DependenciasModel = new DependenciasModel();
        
        $this->model->cargar("SexosModel.php", "configuracion");
        $SexosModel = new SexosModel();

        $empleados = $EmpleadosModel->getTodos();
        $dependencias = $DependenciasModel->getTodos();
        $sexos = $SexosModel->getTodos();

        include 'vistas/reportes/empleados.php';
                        
    }   
    
    public function cargarTablaReportesTerceros() {
        
        $this->model->cargar("TercerosModel.php", "administracion");
        $TercerosModel = new TercerosModel();
        
        $terceros = $TercerosModel->getTodos();
        
        include 'vistas/reportes/terceros.php';
                        
    }   
    
    
    public function generarReporteEntrantes(){
         
        $this->model->cargar("EntrantesModel.php", "radicados");
        $EntrantesModel = new EntrantesModel();     
        
        $entrantes = $EntrantesModel->getEntrantesPorEstadoyFecha(
            $_POST['estado'], $_POST['fecha1'], $_POST['fecha2'], $_POST['remitente'], $_POST['destinatario']
        );
                 
        include("vistas/reportes/pdf_reporte.php");   
       
        $dirPdf = "archivos/reportes/pdf_reporte.pdf";

        $this->pdf->Output(''.$dirPdf.'');

        echo "urlRuta=".$dirPdf;
        
    }
    
    public function generarReporteSalientes(){
         
        $this->model->cargar("SalientesModel.php", "radicados");
        $SalientesModel = new SalientesModel();     
        
        $salientes = $SalientesModel->getSalientesPorEstadoyFecha(
            $_POST['fecha1'], $_POST['fecha2']
        );
                 
        include("vistas/reportes/pdf_reporte_saliente.php");          
        $dirPdf = "archivos/reportes/pdf_reporte_saliente.pdf";
        $this->pdf->Output(''.$dirPdf.'');
        echo "urlRuta=".$dirPdf;
        
    }
    
    public function generarReporteEntrantesExcel(){
         
        $this->model->cargar("EntrantesModel.php", "radicados");
        $EntrantesModel = new EntrantesModel();     
        
        $entrantes = $EntrantesModel->getEntrantesPorEstadoyFecha(
                                            $_POST['estado'], 
                                            $_POST['fecha1'], 
                                            $_POST['fecha2'],
                                            $_POST['remitente'],
                                            $_POST['destinatario']
                                        );
      
      
        $nombre_archivo = "entrada_".date('Y-m-d_H-i-s').".xls";        
        $ruta = dirname(__FILE__, 3).DIRECTORY_SEPARATOR."archivos".DIRECTORY_SEPARATOR."reportes_excel".DIRECTORY_SEPARATOR.$nombre_archivo;        

        include("vistas/reportes/reporte_excel_entrantes.php");        
           
        echo "archivos/reportes_excel/".$nombre_archivo;
          
    }
    
    
    public function generarReporteSalientesExcel(){
         
        $this->model->cargar("SalientesModel.php", "radicados");
        $SalientesModel = new SalientesModel();     
        
        $salientes = $SalientesModel->getSalientesPorEstadoyFecha(
            $_POST['fecha1'], 
            $_POST['fecha2']
        );
      
        include("vistas/reportes/reporte_excel_salientes.php");        
           
        echo "<center><br><br><br><a href='vistas/reportes/reporte_excel_salientes.xls' ><div style='background-color: #232583; width:150px; padding:5px; color: white'>Descargar Archivo</div></a></center>";
          
    }
    
    
    
    public function generarReporteTerceros(){
         
        $this->model->cargar("TercerosModel.php", "administracion");
        $TercerosModel = new TercerosModel();

        $terceros = $TercerosModel->getTodos();
                 
        include("vistas/reportes/pdf_reporte_terceros.php");   
       
        $dirPdf = "archivos/reportes/pdf_reporte_terceros.pdf";

        $this->pdf->Output(''.$dirPdf.'');

        echo "urlRuta=".$dirPdf;
        
    }
    

    
    public function generarReporteExcel(){
         
        $this->model->cargar("EmpleadosModel.php", "configuracion");
        $EmpleadosModel = new EmpleadosModel();

        $empleados = $EmpleadosModel->getFiltroEmpleados(
            $_POST['dependencia'], 
            $_POST['sexo']
        );

        include("vistas/reportes/reporte_excel_empleados.php");        
           
        echo "<center><br><br><br><a href='vistas/reportes/reporte_excel_empleados.xls' ><div style='background-color: #232583; width:150px; padding:5px; color: white'>Descargar Archivo</div></a></center>";
          
    }
    
    
    
    public function generarReporteEmpleados(){
         
        $this->model->cargar("EmpleadosModel.php", "administracion");
        $EmpleadosModel = new EmpleadosModel();

        $empleados = $EmpleadosModel->getFiltroEmpleados(
            $_POST['dependencia'], 
            $_POST['sexo']
        );

                 
        include("vistas/reportes/pdf_reporte_empleados.php");   
       
        $dirPdf = "archivos/reportes/pdf_reporte_empleados.pdf";

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

        include("vistas/reportes/reporte_excel_empleados.php");        
           
        echo "archivos/reportes_excel/".$nombre_archivo;
    }
    
    
    public function generarReporteTercerosExcel(){
         
        $this->model->cargar("TercerosModel.php", "administracion");
        $TercerosModel = new TercerosModel();

        $terceros = $TercerosModel->getTodos();
       
        $nombre_archivo = "terceros_".date('Y-m-d_H-i-s').".xls";        
        $ruta = dirname(__FILE__, 3).DIRECTORY_SEPARATOR."archivos".DIRECTORY_SEPARATOR."reportes_excel".DIRECTORY_SEPARATOR.$nombre_archivo;        

        include("vistas/reportes/reporte_excel_terceros.php");        
           
        echo "archivos/reportes_excel/".$nombre_archivo;
    }
    
    
    
    
    
    public function cargarReporteEntrantes(){
         
        $this->model->cargar("EntrantesModel.php", "radicados");
        $EntrantesModel = new EntrantesModel();     
        
        $entrantes = $EntrantesModel->getEntrantesPorEstadoyFecha(
                            $_POST['estado'], 
                            $_POST['fecha1'], 
                            $_POST['fecha2'],
                            $_POST['remitente'],
                            $_POST['destinatario']
                        );
              
        include 'vistas/reportes/tabla_entrantes.php';
          
    }
    
    
    public function cargarReporteSaliente(){
         
        $this->model->cargar("SalientesModel.php", "radicados");
        $SalientesModel = new SalientesModel();     
        
        $salientes = $SalientesModel->getSalientesPorEstadoyFecha($_POST['fecha1'], $_POST['fecha2']);
              
        include 'vistas/reportes/tabla_salientes.php';
          
    }
    
    
    
    
    public function cargarReporteEmpleados(){
         
        $this->model->cargar("EmpleadosModel.php", "administracion");
        $EmpleadosModel = new EmpleadosModel();     
        
        $empleados = $EmpleadosModel->getFiltroEmpleados(
                            $_POST['dependencia'], 
                            $_POST['sexo']
                        );
              
        include 'vistas/reportes/tabla_empleados.php';
          
    }
    
    
    
 }
 
?>