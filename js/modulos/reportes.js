function cargar_reporte_entrantes(){

  $('.ui-helper-reset ui-widget elfinder-quicklook ui-draggable ui-resizable').remove();
  $('.ui-widget').remove();
  $('.elfinder-quicklook').remove();
  $('.ui-draggable').remove();
  $('.ui-resizable').remove();

  limpiar_cuerpo();
  
  abrirVentanaContenedorTabla(
      'tabla_reportes',
      'reportes', 'Reportes', 'cargarEntrantes', '');    
      
}

function cargar_reporte_salientes(){

  $('.ui-helper-reset ui-widget elfinder-quicklook ui-draggable ui-resizable').remove();
  $('.ui-widget').remove();
  $('.elfinder-quicklook').remove();
  $('.ui-draggable').remove();
  $('.ui-resizable').remove();

  limpiar_cuerpo();
  
  abrirVentanaContenedorTabla(
      'tabla_reportes',
      'reportes', 'Reportes', 'cargarTablaReportesSalida', '');    
      
}



function cargarReportesEmpleados(){
    
    $('.ui-helper-reset ui-widget elfinder-quicklook ui-draggable ui-resizable').remove();
    $('.ui-widget').remove();
    $('.elfinder-quicklook').remove();
    $('.ui-draggable').remove();
    $('.ui-resizable').remove();

    limpiar_cuerpo();
    
   abrirVentanaContenedorTabla(
              'tabla_entrantes',
            'reportes', 'Reportes', 'cargarTablaReportesEmpleados', '',"validar_sesion();")
        
}

function cargarReportesTerceros(){
    
    $('.ui-helper-reset ui-widget elfinder-quicklook ui-draggable ui-resizable').remove();
    $('.ui-widget').remove();
    $('.elfinder-quicklook').remove();
    $('.ui-draggable').remove();
    $('.ui-resizable').remove();

    limpiar_cuerpo();
    
    abrirVentanaContenedorTabla(
              'tabla_entrantes',
            'reportes', 'Reportes', 'cargarTablaReportesTerceros', '',"validar_sesion();")
        
}
