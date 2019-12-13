<?php

error_reporting(E_ALL);
ini_set('display_errors', FALSE);
ini_set('display_startup_errors', FALSE);
date_default_timezone_set('Europe/London');

define('EOL',(PHP_SAPI == 'cli') ? PHP_EOL : '<br />');

$this->excel = new PHPExcel();

$this->excel->getProperties()->setCreator("ViceInvestigacion")
                            ->setLastModifiedBy("Maarten Balliauw")
                            ->setTitle("PHPExcel Test Document")
                            ->setSubject("PHPExcel Test Document")
                            ->setDescription("Test document for PHPExcel, generated using PHP classes.")
                            ->setKeywords("office PHPExcel php")
                            ->setCategory("Test result file");




  //PARTE PRINCIPAL DE LOS INDICADORES    

$this->excel->setActiveSheetIndex(0)
        
->setCellValue('A1', 'REPORTE DE CONTRATOS');
                    

            $this->excel->setActiveSheetIndex(0)
            
            ->setCellValue('A1', 'MODALIDAD DE SELECCIÓN')

            ->setCellValue('B1', 'No. DEL CONTRATO')
                    
            ->setCellValue('C1', 'VALOR DEL CONTRATO')
            
            ->setCellValue('D1', 'DOC. DEL CONTRATISTA')
            
            ->setCellValue('E1', 'NOMBRE DEL CONTRATISTA')

            ->setCellValue('F1', 'FECHA DE INICIO')
            
            ->setCellValue('G1', 'FECHA FINAL')
           
            ->setCellValue('H1', 'OBJETO');
            
            $columna =2;
            

            foreach($contratos as $contrato){
                
                $tipo_contrato = "";
            
                if($contrato['TIPO_CONTRATO'] == "LP"){ $tipo_contrato = 'LICITACIÓN PUBLICA'; }
                if($contrato['TIPO_CONTRATO'] == "SAMC"){ $tipo_contrato = 'SELECCIÓN ABREVIADA DE MENOR CUANTIA'; }
                if($contrato['TIPO_CONTRATO'] == "SASI"){ $tipo_contrato = 'SELECCIÓN ABREVIADA POR SUBASTA INVERSA'; }
                if($contrato['TIPO_CONTRATO'] == "SA"){ $tipo_contrato = 'OTRAS SELECCIONES ABREVIADAS';   }
                if($contrato['TIPO_CONTRATO'] == "CM"){ $tipo_contrato = 'CONCURSO DE MERITOS';        }
                if($contrato['TIPO_CONTRATO'] == "CD"){ $tipo_contrato = 'CONTRATACIÓN DIRECTA';        }
                if($contrato['TIPO_CONTRATO'] == "MC"){ $tipo_contrato = 'MÍNIMA CUANTÍA';    }
                    
                
                $fechas = new Fechas();
            $num_dias = $fechas->diasEntreFechas($contrato['FECHAINICIO_CONTRATO'], $contrato['FECHAFINAL_CONTRATO']);
            

        $this->excel->setActiveSheetIndex(0)

             ->setCellValue('A'.$columna, $tipo_contrato)

             ->setCellValue('B'.$columna, "No. ".$contrato['NUMERO_CONTRATO'])

             ->setCellValue('C'.$columna,  "$".number_format($contrato['VALOR_CONTRATO'], 0, ".", "."))
                                
             ->setCellValue('D'.$columna, $contrato['DOCUMENTO_CONTRATISTA'])
                
             ->setCellValue('E'.$columna, utf8_encode($contrato['NOMBRE_CONTRATISTA']))
                
             ->setCellValue('F'.$columna, $contrato['FECHAINICIO_CONTRATO'])
                
             ->setCellValue('G'.$columna, $contrato['FECHAFINAL_CONTRATO'])
                
             ->setCellValue('H'.$columna, $contrato['OBJETO_CONTRATO']);

            $columna ++;

        }

        

          
$styleArray_color = array(
    'font' => array(
        'bold' => true,
        'width'=>55
    ),
    'borders' => array(
        'top' => array(
            'style' => PHPExcel_Style_Border::BORDER_THIN,
        ),
    ),
    'fill' => array(
        'type' => PHPExcel_Style_Fill::FILL_SOLID,
        'color' => array('rgb' => 'CCFFCC'),
       
        'rotation' => 90,
        'startcolor' => array(
            'argb' => 'FF1C00',
        ),
        'endcolor' => array(
            'argb' => 'FF1C00',
        ),
    ),
);
  $this->excel->getActiveSheet()->getStyle('A1:H1')->applyFromArray($styleArray_color);

  $this->excel->getActiveSheet()->getColumnDimension('A')->setWidth(45);
  $this->excel->getActiveSheet()->getColumnDimension('B')->setWidth(30);
  $this->excel->getActiveSheet()->getColumnDimension('C')->setWidth(30);
  $this->excel->getActiveSheet()->getColumnDimension('D')->setWidth(30);
  $this->excel->getActiveSheet()->getColumnDimension('E')->setWidth(30);
  $this->excel->getActiveSheet()->getColumnDimension('F')->setWidth(30);
  $this->excel->getActiveSheet()->getColumnDimension('G')->setWidth(30);
  $this->excel->getActiveSheet()->getColumnDimension('H')->setWidth(55);
    

// Rename worksheet
$this->excel->getActiveSheet()->setTitle('Reporte de Indicadores');

// Set active sheet index to the first sheet, so Excel opens this as the first sheet
$this->excel->setActiveSheetIndex(0);

// Save Excel 2007 file




$callStartTime = microtime(true);

$objWriter = PHPExcel_IOFactory::createWriter($this->excel, 'Excel5');
$objWriter->save(str_replace('.php', '.xls', __FILE__));
$callEndTime = microtime(true);
$callTime = $callEndTime - $callStartTime;


?>