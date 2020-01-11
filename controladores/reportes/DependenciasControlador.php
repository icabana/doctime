<?php

class DependenciasControlador extends ControllerBase {
    
    
    public function cargarDependencias() {
        
        $this->model->cargar("DependenciasModel.php", "administracion");
        $DependenciasModel = new DependenciasModel();
        
        $dependencias = $DependenciasModel->getTodos();
        
        include 'vistas/reportes/dependencias/dependencias.php';
                        
    }   
    

    
    public function generarReporteDependencias(){
         
        $this->model->cargar("DependenciasModel.php", "administracion");
        $DependenciasModel = new DependenciasModel();

        $dependencias = $DependenciasModel->getTodos();
                 
        include("vistas/reportes/pdf_reporte_dependencias.php");   
       
        $dirPdf = "archivos/reportes/pdf_reporte_dependencias.pdf";

        $this->pdf->Output(''.$dirPdf.'');

        echo "urlRuta=".$dirPdf;
        
    }
    

    
    public function generarReporteDependenciasExcel(){
         
        $this->model->cargar("DependenciasModel.php", "administracion");
        $DependenciasModel = new DependenciasModel();

        $dependencias = $DependenciasModel->getTodos();
       
        $nombre_archivo = "dependencias_".date('Y-m-d_H-i-s').".xls";        
        $ruta = dirname(__FILE__, 3).DIRECTORY_SEPARATOR."archivos".DIRECTORY_SEPARATOR."reportes_excel".DIRECTORY_SEPARATOR.$nombre_archivo;        

        include("vistas/reportes/reporte_excel_dependencias.php");        
           
        echo "archivos/reportes_excel/".$nombre_archivo;
    }
    
    
    
    
 }
 
?>