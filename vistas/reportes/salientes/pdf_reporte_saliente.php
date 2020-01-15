<?php
       
    $this->pdf = new PdfReporteSalientes(L, 'mm', 'legal');
		
    $this->pdf->SetCreator('ISMAEL CABANA');
    $this->pdf->SetAuthor('ISMAEL CABANA');
    $this->pdf->SetTitle('REPORTE DE CONTRATOS');
    $this->pdf->SetSubject('PRESUPUESTO DEL PROYECTO.');
    $this->pdf->AliasNbPages();

    $this->pdf->SetTextColor(0,0,0);
    $this->pdf->SetFillColor( 188, 255, 189 );   			

    $anchos = array('5', '10', '25','35','45', '55', '65', '115', '30');
    
    $this->pdf->SetMargins("30","10","30");
    
    
    $this->pdf->AddPage();
    
      
        $this->pdf->SetWidths(array(40,45,64,64,80));

    $this->pdf->SetAligns(array('L','L','L','L','L'));

     $this->pdf->SetFont('Arial','B',9);

        $this->pdf->Cell(40, 10, 'No. de Radicado',1,0, "C", 1);  
        $this->pdf->Cell(45, 10, 'Fecha de Radicado',1,0, "C", 1);
        $this->pdf->Cell(64, 10, 'Remitente',1,0, "C", 1);
        $this->pdf->Cell(64, 10, 'Destinatario',1,0, "C", 1);
        $this->pdf->Cell(80, 10, 'Asunto',1,1, "C", 1);

       $this->pdf->SetFont('Arial','',9);
                          
          
     foreach ($salientes as $saliente){
             
        $this->pdf->Row(
            array(                 
                $saliente['numero_saliente'],
                $saliente['fecharadicado_saliente'],
                utf8_decode($saliente['nombres_empleado']." ".$saliente['apellidos_empleado']),
                utf8_decode($saliente['nombre_tercero']),
                utf8_decode($saliente['asunto_saliente'])
            )
        );
        
     }
         
     
?>