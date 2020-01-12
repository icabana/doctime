<?php

class TercerosControlador extends ControllerBase {
    

    
    public function cargarTerceros() {
        
        $this->model->cargar("TercerosModel.php", "administracion");
        $TercerosModel = new TercerosModel();
        
        $terceros = $TercerosModel->getTodos();
        
        include 'vistas/reportes/terceros/terceros.php';
                        
    }   
    
    
    public function generarReporteTerceros(){
         
        $this->model->cargar("TercerosModel.php", "administracion");
        $TercerosModel = new TercerosModel();

        $terceros = $TercerosModel->getTodos();
                 
        include("vistas/reportes/terceros/pdf_reporte_terceros.php");   
       
        $dirPdf = "archivos/reportes/terceros/pdf_reporte_terceros.pdf";

        $this->pdf->Output(''.$dirPdf.'');

        echo "urlRuta=".$dirPdf;
        
    }
    
    
    public function generarReporteTercerosExcel(){
         
        $this->model->cargar("TercerosModel.php", "administracion");
        $TercerosModel = new TercerosModel();

        $terceros = $TercerosModel->getTodos();
       
        $nombre_archivo = "terceros_".date('Y-m-d_H-i-s').".xls";        
        $ruta = dirname(__FILE__, 3).DIRECTORY_SEPARATOR."archivos".DIRECTORY_SEPARATOR."reportes_excel".DIRECTORY_SEPARATOR.$nombre_archivo;        

        include("vistas/reportes/terceros/reporte_excel_terceros.php");        
           
        echo "archivos/reportes_excel/".$nombre_archivo;
    }
    
    
    
 }
 
?>