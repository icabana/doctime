<?php

class EntrantesControlador extends ControllerBase {
    
    public function cargarEntrantes() {
        
        $this->model->cargar("EntrantesModel.php", "radicados");
        $EntrantesModel = new EntrantesModel();

        $entrantes = $EntrantesModel->getTodosTodos();
        
        include 'vistas/reportes/entrantes/entrantes.php';
                        
    }   



    public function generarReporteEntrantes(){
         
        $this->model->cargar("EntrantesModel.php", "radicados");
        $EntrantesModel = new EntrantesModel();     
        
        $entrantes = $EntrantesModel->getEntrantesPorEstadoyFecha(
            $_POST['estado'], $_POST['fecha1'], $_POST['fecha2'], $_POST['remitente'], $_POST['destinatario']
        );
                 
        include("vistas/reportes/entrantes/pdf_reporte.php");   
       
        $dirPdf = "archivos/reportes/entrantes/pdf_reporte.pdf";

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

        include("vistas/reportes/entrantes/reporte_excel_entrantes.php");        
           
        echo "archivos/reportes_excel/".$nombre_archivo;
          
    }
    


    public function cargarTablaEntrantes(){
         
        $this->model->cargar("EntrantesModel.php", "radicados");
        $EntrantesModel = new EntrantesModel();     
        
        $entrantes = $EntrantesModel->getEntrantesPorEstadoyFecha(
                            $_POST['estado'], 
                            $_POST['fecha1'], 
                            $_POST['fecha2'],
                            $_POST['remitente'],
                            $_POST['destinatario']
                        );
              
        include 'vistas/reportes/entrantes/tabla_entrantes.php';
          
    }
    
    
 }
 
?>