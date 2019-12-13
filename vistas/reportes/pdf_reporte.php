<?php
       
    $this->pdf = new PdfReporteContratos(L, 'mm', 'legal');
		
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
    
      
        $this->pdf->SetWidths(array(70,40,40,100,35,35));

    $this->pdf->SetAligns(array('L','L','L','J','C','C'));

     $this->pdf->SetFont('Arial','B',9);

        $this->pdf->Cell(70, 10, utf8_decode('MODALIDAD DE SELECCIÓN'),1,0, "C", 1);     
        
        $this->pdf->Cell(40, 10, utf8_decode('NO. DEL CONTRATO'),1,0, "C", 1);
        
        $this->pdf->Cell(40, 10, utf8_decode('VALOR DEL CONTRATO'),1,0, "C", 1);
                
        $this->pdf->Cell(100, 10, utf8_decode('CONTRATISTA'),1,0, "C", 1);

        $this->pdf->Cell(35, 10, utf8_decode('FECHA DE INICIO'),1,0, "C", 1);
        
        $this->pdf->Cell(35, 10, utf8_decode('FECHA FINAL'),1,1, "C", 1);

       $this->pdf->SetFont('Arial','',9);
                            
     $fechas = new Fechas(); 
          
     foreach ($contratos as $contrato){
             
        $tipo_contrato = "";

        if($contrato['TIPO_CONTRATO'] == "LP"){ $tipo_contrato = 'LICITACIÓN PUBLICA'; }
        if($contrato['TIPO_CONTRATO'] == "SAMC"){ $tipo_contrato = 'SELECCIÓN ABREVIADA DE MENOR CUANTIA'; }
        if($contrato['TIPO_CONTRATO'] == "SASI"){ $tipo_contrato = 'SELECCIÓN ABREVIADA POR SUBASTA INVERSA'; }
        if($contrato['TIPO_CONTRATO'] == "SA"){ $tipo_contrato = 'OTRAS SELECCIONES ABREVIADAS';   }
        if($contrato['TIPO_CONTRATO'] == "CM"){ $tipo_contrato = 'CONCURSO DE MERITOS';        }
        if($contrato['TIPO_CONTRATO'] == "CD"){ $tipo_contrato = 'CONTRATACIÓN DIRECTA';        }
        if($contrato['TIPO_CONTRATO'] == "MC"){ $tipo_contrato = 'MÍNIMA CUANTÍA';    }
  
                
        $num_dias = $fechas->diasEntreFechas($contrato['FECHAINICIO_CONTRATO'], $contrato['FECHAFINAL_CONTRATO']);

        $this->pdf->Row(
            array(                 
                utf8_decode($tipo_contrato),
                "No. ".$contrato['NUMERO_CONTRATO'],
                "$".number_format($contrato['VALOR_CONTRATO'], 0, ".", "."),
                $contrato['DOCUMENTO_CONTRATISTA']." - ".strtoupper($contrato['NOMBRE_CONTRATISTA']),
                $contrato['FECHAINICIO_CONTRATO'],
                $contrato['FECHAFINAL_CONTRATO']
            )
        );
        
     }
         
     
?>