<?php
       
    $this->pdf = new PdfReportesEmpleados('L', 'mm', 'legal');
		
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
    
      
        $this->pdf->SetWidths(array(30,35,54,54,54,70,25));

    $this->pdf->SetAligns(array('L','L','L','L','L','L'));

     $this->pdf->SetFont('Arial','B',9);

        $this->pdf->Cell(30, 10, 'No. de Radicado',1,0, "C", 1);  
        $this->pdf->Cell(35, 10, 'Fecha de Radicado',1,0, "C", 1);
        $this->pdf->Cell(54, 10, 'Remitente',1,0, "C", 1);
        $this->pdf->Cell(54, 10, 'Enviado Por',1,0, "C", 1);
        $this->pdf->Cell(54, 10, 'Destinatario',1,0, "C", 1);
        $this->pdf->Cell(70, 10, 'Asunto',1,0, "C", 1);
        $this->pdf->Cell(25, 10, 'Estado',1,1, "C", 1);

       $this->pdf->SetFont('Arial','',9);
                          
          
     foreach ($entrantes as $entrante){
             
        $this->pdf->Row(
            array(                 
                $entrante['numero_entrante'],
                $entrante['fecharadicado_entrante'],
                utf8_decode($entrante['nombre_tercero']),
                utf8_decode($entrante['enviadopor_entrante']),
                utf8_decode($entrante['nombres_empleado']." ".$entrante['apellidos_empleado']),
                utf8_decode($entrante['asunto_entrante']),
                $entrante['nombre_estado']   
            )
        );
        
     }
         
     
?>