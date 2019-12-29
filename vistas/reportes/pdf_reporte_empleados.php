<?php
       
    $this->pdf = new PdfReportes('L', 'mm', 'legal');
		
    $this->pdf->SetCreator('ISMAEL CABANA');
    $this->pdf->SetAuthor('ISMAEL CABANA');
    $this->pdf->SetTitle('REPORTE DE EMPLEADOS');
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
        $this->pdf->Cell(70, 10, utf8_decode('Nombre del Empleado'),1,0, "C", 1);        
        $this->pdf->Cell(40, 10, utf8_decode('Documento'),1,0, "C", 1);             
        $this->pdf->Cell(40, 10, utf8_decode('Teléfono'),1,0, "C", 1);        
        $this->pdf->Cell(70, 10, utf8_decode('Correo'),1,0, "C", 1);           
        $this->pdf->Cell(40, 10, utf8_decode('Dirección'),1,0, "C", 1);        
        $this->pdf->Cell(40, 10, utf8_decode('Ciudad'),1,1, "C", 1);

       $this->pdf->SetFont('Arial','',9);
                            
     $fechas = new Fechas(); 
     
$cont = 1;     
     
     foreach ($empleados as $empleado){
               
        $this->pdf->Row(
            array(                 
                $cont,
                $empleado['nombres_empleado']." ".$empleado['apellidos_empleado'],
                $empleado['nombre_tipodocumento']." ".$empleado['documento_empleado'],                
                $empleado['telefono_empleado'],
                $empleado['correo_empleado'],
                $empleado['direccion_empleado'],
                $empleado['ciudad_empleado']
            )
        );
        
        $cont++;
        
     }
         
     
?>