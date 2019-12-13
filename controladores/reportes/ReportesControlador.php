<?php

class ReportesControlador extends ControllerBase {
    
    public function cargarTablaReportes() {
        
        $this->model->cargar("EntrantesModel.php", "radicados");
        $EntrantesModel = new EntrantesModel();

        $entrantes = $EntrantesModel->getTodosTodos();
        
        include 'vistas/reportes/default.php';
                        
    }   

     
    public function cargarTablaReportesSalida() {
        
        $this->model->cargar("SalientesModel.php", "radicados");
        $SalientesModel = new SalientesModel();

        $salientes = $SalientesModel->getTodosTodos();
        
        include 'vistas/reportes/default_salida.php';
                        
    }   
    
    public function cargarTablaReportesContratistas() {
        
        $this->model->cargar("ContratistasModel.php", "configuracion");
        $ContratistasModel = new ContratistasModel();

        $contratistas = $ContratistasModel->getTodosContratistas();
        
        include 'vistas/reportes/default_contratistas.php';
                        
    }   
    
    public function cargarTablaReportesEmpresas() {
        
        $this->model->cargar("EmpresasModel.php", "configuracion");
        $EmpresasModel = new EmpresasModel();

        $empresas = $EmpresasModel->getTodosEmpresas();
        
        include 'vistas/reportes/default_empresas.php';
                        
    }   
    
    
    public function generarReporteEntrantes(){
         
        $this->model->cargar("EntrantesModel.php", "radicados");
        $EntrantesModel = new EntrantesModel();     
        
        $entrantes = $EntrantesModel->getEntrantesPorEstadoyFecha(
            $_POST['estado'], $_POST['fecha1'], $_POST['fecha2']
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
        
        $entrantes = $EntrantesModel->getEntrantesPorEstadoyFecha($_POST['estado'], $_POST['fecha1'], $_POST['fecha2'], $_POST['modalidad']);
      
        include("vistas/reportes/reporte_excel.php");        
           
        echo "<center><br><br><br><a href='vistas/reportes/reporte_excel.xls' ><div style='background-color: #232583; width:150px; padding:5px; color: white'>Descargar Archivo</div></a></center>";
          
    }
    
    
    
    
    public function generarReporteContratistas(){
         
        $this->model->cargar("ContratistasModel.php", "configuracion");
        $ContratistasModel = new ContratistasModel();

        $contratistas = $ContratistasModel->getTodosContratistas();
                 
        include("vistas/reportes/pdf_reporte_contratistas.php");   
       
        $dirPdf = "archivos/reportes/pdf_reporte_contratistas.pdf";

        $this->pdf->Output(''.$dirPdf.'');

        echo "urlRuta=".$dirPdf;
        
    }
    
    
    public function generarReporteContratistasExcel(){
         
        $this->model->cargar("ContratistasModel.php", "configuracion");
        $ContratistasModel = new ContratistasModel();

        $contratistas = $ContratistasModel->getTodosContratistas();
      
        include("vistas/reportes/reporte_excel_contratistas.php");        
           
        echo "<center><br><br><br><a href='vistas/reportes/reporte_excel_contratistas.xls' ><div style='background-color: #232583; width:150px; padding:5px; color: white'>Descargar Archivo</div></a></center>";
          
    }
    
    
    
    
    
    public function generarReporteEmpresas(){
         
        $this->model->cargar("EmpresasModel.php", "configuracion");
        $EmpresasModel = new EmpresasModel();

        $empresas = $EmpresasModel->getTodosEmpresas();
                 
        include("vistas/reportes/pdf_reporte_empresas.php");   
       
        $dirPdf = "archivos/reportes/pdf_reporte_empresas.pdf";

        $this->pdf->Output(''.$dirPdf.'');

        echo "urlRuta=".$dirPdf;
        
    }
    
    
    public function generarReporteEmpresasExcel(){
         
        $this->model->cargar("EmpresasModel.php", "configuracion");
        $EmpresasModel = new EmpresasModel();

        $empresas = $EmpresasModel->getTodosEmpresas();
      
        include("vistas/reportes/reporte_excel_empresas.php");        
           
        echo "<center><br><br><br><a href='vistas/reportes/reporte_excel_empresas.xls' ><div style='background-color: #232583; width:150px; padding:5px; color: white'>Descargar Archivo</div></a></center>";
          
    }
    
    
    public function cargarReporte(){
         
        $this->model->cargar("EntrantesModel.php", "radicados");
        $EntrantesModel = new EntrantesModel();     
        
        $entrantes = $EntrantesModel->getEntrantesPorEstadoyFecha($_POST['estado'], $_POST['fecha1'], $_POST['fecha2']);
              
        include 'vistas/reportes/tabla_entrantes.php';
          
    }
    
    
    public function cargarReporteSaliente(){
         
        $this->model->cargar("SalientesModel.php", "radicados");
        $SalientesModel = new SalientesModel();     
        
        $salientes = $SalientesModel->getSalientesPorEstadoyFecha($_POST['fecha1'], $_POST['fecha2']);
              
        include 'vistas/reportes/tabla_entrantes.php';
          
    }
    
    
    
 }
 
?>