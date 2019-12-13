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
        
->setCellValue('A1', 'REPORTE DE RADICADOS SALIENTES');
                    

    $this->excel->setActiveSheetIndex(0)
    
    ->setCellValue('A1', 'No de Radicado')
    ->setCellValue('B1', 'Fecha de Radicado')                    
    ->setCellValue('C1', 'Remitente')              
    ->setCellValue('D1', 'Destinatario')
    ->setCellValue('E1', 'Asunto');
    
    $columna =2;
            

    foreach($salientes as $saliente){
            
        $this->excel->setActiveSheetIndex(0)

            ->setCellValue('A'.$columna, "".$saliente['numero_saliente']."")            
            ->setCellValue('B'.$columna, $saliente['fecharadicado_saliente'])                
            ->setCellValue('C'.$columna, $saliente['nombres_empleado']." ".$saliente['apellidos_empleado'])
            ->setCellValue('D'.$columna, $saliente['nombre_tercero'])                
            ->setCellValue('E'.$columna, $saliente['asunto_saliente']);

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

    $this->excel->getActiveSheet()->getStyle('A1:E1')->applyFromArray($styleArray_color);

    $this->excel->getActiveSheet()->getColumnDimension('A')->setWidth(20);
    $this->excel->getActiveSheet()->getColumnDimension('B')->setWidth(20);
    $this->excel->getActiveSheet()->getColumnDimension('C')->setWidth(40);
    $this->excel->getActiveSheet()->getColumnDimension('D')->setWidth(40);
    $this->excel->getActiveSheet()->getColumnDimension('E')->setWidth(50);
    

// Rename worksheet
$this->excel->getActiveSheet()->setTitle('Radicados de Entrada');

// Set active sheet index to the first sheet, so Excel opens this as the first sheet
$this->excel->setActiveSheetIndex(0);

// Save Excel 2007 file




$callStartTime = microtime(true);

$objWriter = PHPExcel_IOFactory::createWriter($this->excel, 'Excel5');
$objWriter->save(str_replace('.php', '.xls', __FILE__));
$callEndTime = microtime(true);
$callTime = $callEndTime - $callStartTime;


?>