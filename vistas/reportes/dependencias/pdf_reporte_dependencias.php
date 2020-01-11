<?php
       
    $this->pdf = new PdfReportesDependencias('L', 'mm', 'legal');
		
    $this->pdf->SetCreator('ISMAEL CABANA');
    $this->pdf->SetAuthor('ISMAEL CABANA');
    $this->pdf->SetTitle('REPORTE DE DEPENDENCIAS');
    $this->pdf->SetSubject('PRESUPUESTO DEL PROYECTO.');
    $this->pdf->AliasNbPages();

    $this->pdf->SetTextColor(0,0,0);
    $this->pdf->SetFillColor( 188, 255, 189 );   			

    $anchos = array('10', '90','90');
    
    $this->pdf->SetMargins("15","10","15");
    
    
    $this->pdf->AddPage();
    
      
    $this->pdf->SetWidths(array(20,150,150));

    $this->pdf->SetAligns(array('C','C','C'));

    $this->pdf->SetFont('Arial','B',9);

    $this->pdf->Cell(20, 10, utf8_decode('No.'),1,0, "C", 1);             
    $this->pdf->Cell(150, 10, utf8_decode('Nombre de la dependencia'),1,0, "C", 1);        
    $this->pdf->Cell(150, 10, utf8_decode('Nombre del Jefe'),1,1, "C", 1);      

       $this->pdf->SetFont('Arial','',9);
                            
     $fechas = new Fechas(); 
     
$cont = 1;     
     
     foreach ($dependencias as $dependencia){
               
        $this->pdf->Row(
            array(                 
                $cont,
                $dependencia['nombre_dependencia'],
                $dependencia['nombre_jefe']
            )
        );
        
        $cont++;
        
     }
         
     
?>