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
            $_POST['fecha1'], $_POST['fecha2']
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
            $_POST['fecha2']
        );
      
        include("vistas/reportes/salientes/reporte_excel_salientes.php");        
           
        echo "<center><br><br><br><a href='vistas/reportes/reporte_excel_salientes.xls' ><div style='background-color: #232583; width:150px; padding:5px; color: white'>Descargar Archivo</div></a></center>";
          
    }
    
    

    public function cargarTablaSalientes(){
         
        $this->model->cargar("SalientesModel.php", "radicados");
        $SalientesModel = new SalientesModel();     
        
        $salientes = $SalientesModel->getSalientesPorEstadoyFecha($_POST['fecha1'], $_POST['fecha2']);
              
        include 'vistas/reportes/salientes/tabla_salientes.php';
          
    }
    
    
    
 }
 
?>