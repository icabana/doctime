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
        
->setCellValue('A1', 'REPORTE DE RADICADOS');
                    

    $this->excel->setActiveSheetIndex(0)
    
    ->setCellValue('A1', 'No de Radicado')
    ->setCellValue('B1', 'Fecha de Radicado')                    
    ->setCellValue('C1', 'Remitente')            
    ->setCellValue('D1', 'Enviado por')            
    ->setCellValue('E1', 'Destinatario')
    ->setCellValue('F1', 'Asunto')            
    ->setCellValue('G1', 'Tipo de Solicitud')            
    ->setCellValue('H1', 'Medio')            
    ->setCellValue('I1', 'Responsable del Radicado')            
    ->setCellValue('J1', 'Estado');
    
    $columna =2;
            

    foreach($entrantes as $entrante){
            
        $this->excel->setActiveSheetIndex(0)

            ->setCellValue('A'.$columna, "".$entrante['numero_entrante']."")            
            ->setCellValue('B'.$columna, $entrante['fecharadicado_entrante'])                
            ->setCellValue('C'.$columna, $entrante['nombre_tercero'])                
            ->setCellValue('D'.$columna, $entrante['enviadopor_entrante'])
            ->setCellValue('E'.$columna, $entrante['nombres_empleado']." ".$entrante['apellidos_empleado'])
            ->setCellValue('F'.$columna, $entrante['asunto_entrante'])
            ->setCellValue('G'.$columna, $entrante['medio_entrante'])
            ->setCellValue('H'.$columna, $entrante['nombre_tiporadicado'])
            ->setCellValue('I'.$columna, $entrante['nombres_responsable']." ".$entrante['apellidos_responsable'])
            ->setCellValue('J'.$columna, $entrante['nombre_estado']);

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
  $this->excel->getActiveSheet()->getStyle('A1:J1')->applyFromArray($styleArray_color);

  $this->excel->getActiveSheet()->getColumnDimension('A')->setWidth(20);
  $this->excel->getActiveSheet()->getColumnDimension('B')->setWidth(20);
  $this->excel->getActiveSheet()->getColumnDimension('C')->setWidth(40);
  $this->excel->getActiveSheet()->getColumnDimension('D')->setWidth(40);
  $this->excel->getActiveSheet()->getColumnDimension('E')->setWidth(40);
  $this->excel->getActiveSheet()->getColumnDimension('F')->setWidth(50);
  $this->excel->getActiveSheet()->getColumnDimension('G')->setWidth(30);
  $this->excel->getActiveSheet()->getColumnDimension('H')->setWidth(30);
  $this->excel->getActiveSheet()->getColumnDimension('I')->setWidth(30);
  $this->excel->getActiveSheet()->getColumnDimension('J')->setWidth(30);
    

// Rename worksheet
$this->excel->getActiveSheet()->setTitle('Radicados de Entrada');

// Set active sheet index to the first sheet, so Excel opens this as the first sheet
$this->excel->setActiveSheetIndex(0);

// Save Excel 2007 file

$callStartTime = microtime(true);

$objWriter = PHPExcel_IOFactory::createWriter($this->excel, 'Excel5');
$objWriter->save($ruta);
$callEndTime = microtime(true);
$callTime = $callEndTime - $callStartTime;


?>