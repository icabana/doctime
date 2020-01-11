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
        
->setCellValue('A1', 'REPORTE DE TERCEROS');
                    

            $this->excel->setActiveSheetIndex(0)
            
            ->setCellValue('A1', 'No.')

            ->setCellValue('B1', 'NOMBRE DE LA DEPENDENCIAS')
                    
            ->setCellValue('C1', 'NOMBRE DEL JEFE');
            
            $columna =2;
            
            $cont = 1;
            
            foreach($dependencias as $dependencia){
                            

        $this->excel->setActiveSheetIndex(0)

             ->setCellValue('A'.$columna, $cont)

             ->setCellValue('B'.$columna, $dependencia['nombre_dependencia'])

             ->setCellValue('C'.$columna, $dependencia['nombre_jefe']);

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
  $this->excel->getActiveSheet()->getStyle('A1:C1')->applyFromArray($styleArray_color);

  $this->excel->getActiveSheet()->getColumnDimension('A')->setWidth(30);
  $this->excel->getActiveSheet()->getColumnDimension('B')->setWidth(35);
  $this->excel->getActiveSheet()->getColumnDimension('C')->setWidth(35);
    

// Rename worksheet
$this->excel->getActiveSheet()->setTitle('Reporte de Indicadores');

// Set active sheet index to the first sheet, so Excel opens this as the first sheet
$this->excel->setActiveSheetIndex(0);

// Save Excel 2007 file



$callStartTime = microtime(true);

$objWriter = PHPExcel_IOFactory::createWriter($this->excel, 'Excel5');
$objWriter->save($ruta);
$callEndTime = microtime(true);
$callTime = $callEndTime - $callStartTime;


?>