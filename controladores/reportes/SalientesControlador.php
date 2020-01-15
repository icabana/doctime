<?php

class SalientesControlador extends ControllerBase {
     

    public function cargarSalientes() {
        
        $this->model->cargar("SalientesModel.php", "radicados");
        $SalientesModel = new SalientesModel();

        $salientes = $SalientesModel->getTodosTodos();
        
        include 'vistas/reportes/salientes/salientes.php';
                        
    }   
    


    public function generarReporteSalientes(){
         
        $this->model->cargar("SalientesModel.php", "radicados");
        $SalientesModel = new SalientesModel();     
        
        $salientes = $SalientesModel->getSalientesPorEstadoyFecha(
            $_POST['fecha1'], $_POST['fecha2'], $_POST['remitente'], $_POST['destinatario']
        );
                 
        include("vistas/reportes/salientes/pdf_reporte_saliente.php");          
        $dirPdf = "archivos/reportes/salientes/pdf_reporte_saliente.pdf";
        $this->pdf->Output(''.$dirPdf.'');
        echo "urlRuta=".$dirPdf;
        
    }

    
    
    public function generarReporteSalientesExcel(){
         
        $this->model->cargar("SalientesModel.php", "radicados");
        $SalientesModel = new SalientesModel();     
        
        $salientes = $SalientesModel->getSalientesPorEstadoyFecha(
            $_POST['fecha1'], 
            $_POST['fecha2'], 
            $_POST['remitente'],
             $_POST['destinatario']
        );
        
           
        $nombre_archivo = "saliente_".date('Y-m-d_H-i-s').".xls";        
        $ruta = dirname(__FILE__, 3).DIRECTORY_SEPARATOR."archivos".DIRECTORY_SEPARATOR."reportes_excel".DIRECTORY_SEPARATOR.$nombre_archivo;        

        include("vistas/reportes/salientes/reporte_excel_salientes.php");        
           
        echo "archivos/reportes_excel/".$nombre_archivo;
       
    }
    
    

    public function cargarTablaSalientes(){
         
        $this->model->cargar("SalientesModel.php", "radicados");
        $SalientesModel = new SalientesModel();     
        
        $salientes = $SalientesModel->getSalientesPorEstadoyFecha($_POST['fecha1'], $_POST['fecha2'],
                                                                            $_POST['remitente'],
                                                                            $_POST['destinatario']);
              
        include 'vistas/reportes/salientes/tabla_salientes.php';
          
    }
    
    
    
 }
 
?>