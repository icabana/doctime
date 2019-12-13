<?php
       
    $this->pdf = new PdfReporteContratistas(L, 'mm', 'legal');
		
    $this->pdf->SetCreator('ISMAEL CABANA');
    $this->pdf->SetAuthor('ISMAEL CABANA');
    $this->pdf->SetTitle('REPORTE DE CONTRATOS');
    $this->pdf->SetSubject('PRESUPUESTO DEL PROYECTO.');
    $this->pdf->AliasNbPages();

    $this->pdf->SetTextColor(0,0,0);
    $this->pdf->SetFillColor( 188, 255, 189 );   			

    $anchos = array('5', '10', '25','35','45', '55', '65', '115', '30');
    
    $this->pdf->SetMargins("15","10","15");
    
    
    $this->pdf->AddPage();
    
      
        $this->pdf->SetWidths(array(10,70,40,40,40,40,70));

    $this->pdf->SetAligns(array('C','C','C','C','C','C','C'));

     $this->pdf->SetFont('Arial','B',9);

        $this->pdf->Cell(10, 10, utf8_decode('No.'),1,0, "C", 1);     
        
        $this->pdf->Cell(70, 10, utf8_decode('NOMBRE DEL CONTRATISTA'),1,0, "C", 1);
        
        $this->pdf->Cell(40, 10, utf8_decode('NIT/CÉDULA'),1,0, "C", 1);
                
        $this->pdf->Cell(40, 10, utf8_decode('DIRECCIÓN'),1,0, "C", 1);
        
        $this->pdf->Cell(40, 10, utf8_decode('CIUDAD'),1,0, "C", 1);

        $this->pdf->Cell(40, 10, utf8_decode('TELÉFONO'),1,0, "C", 1);
        
        $this->pdf->Cell(70, 10, utf8_decode('CORREO'),1,1, "C", 1);

       $this->pdf->SetFont('Arial','',9);
                            
     $fechas = new Fechas(); 
     
$cont = 1;     
     
     foreach ($contratistas as $contratista){
               
        $this->pdf->Row(
            array(                 
                $cont,
                $contratista['NOMBRE_CONTRATISTA'],
                $contratista['DOCUMENTO_CONTRATISTA'],
                $contratista['DIRECCION1_CONTRATISTA'],
                $contratista['CIUDAD_CONTRATISTA'],
                $contratista['TELEFONO_CONTRATISTA'],
                $contratista['CORREO1_CONTRATISTA']
            )
        );
        
        $cont++;
        
     }
         
     
?>