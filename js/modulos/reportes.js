function cargarReportes(){

  $('.ui-helper-reset ui-widget elfinder-quicklook ui-draggable ui-resizable').remove();
  $('.ui-widget').remove();
  $('.elfinder-quicklook').remove();
  $('.ui-draggable').remove();
  $('.ui-resizable').remove();

  limpiar_cuerpo();
  
  abrirVentanaContenedorTabla(
      'tabla_reportes',
      'reportes', 'Reportes', 'cargarTablaReportes', '');    
      
}

function cargarReportesContratistas(){
    
    $('.ui-helper-reset ui-widget elfinder-quicklook ui-draggable ui-resizable').remove();
    $('.ui-widget').remove();
    $('.elfinder-quicklook').remove();
    $('.ui-draggable').remove();
    $('.ui-resizable').remove();

    limpiar_cuerpo();
    
   abrirVentanaContenedorTabla(
              'tabla_entrantes',
            'reportes', 'Reportes', 'cargarTablaReportesContratistas', '',"validar_sesion();")
        
}

function cargarReportesEmpresas(){
    
    $('.ui-helper-reset ui-widget elfinder-quicklook ui-draggable ui-resizable').remove();
    $('.ui-widget').remove();
    $('.elfinder-quicklook').remove();
    $('.ui-draggable').remove();
    $('.ui-resizable').remove();

    limpiar_cuerpo();
    
    abrirVentanaContenedorTabla(
              'tabla_entrantes',
            'reportes', 'Reportes', 'cargarTablaReportesEmpresas', '',"validar_sesion();")
        
}
