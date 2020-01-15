function cargar_reporte_entrantes(){

  $('.ui-helper-reset ui-widget elfinder-quicklook ui-draggable ui-resizable').remove();
  $('.ui-widget').remove();
  $('.elfinder-quicklook').remove();
  $('.ui-draggable').remove();
  $('.ui-resizable').remove();

  limpiar_cuerpo();
  
  abrirVentanaContenedorTabla(
      'tabla_reportes',
      'reportes', 'Entrantes', 'cargarEntrantes', '');    
      
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
      'reportes', 'Salientes', 'cargarSalientes', '');    
      
}



function cargar_reporte_empleados(){

    $('.ui-helper-reset ui-widget elfinder-quicklook ui-draggable ui-resizable').remove();
    $('.ui-widget').remove();
    $('.elfinder-quicklook').remove();
    $('.ui-draggable').remove();
    $('.ui-resizable').remove();

    limpiar_cuerpo();
  
   abrirVentanaContenedorTabla(
      'tabla_empleados',
      'reportes', 'Empleados', 'cargarEmpleados', '',"")
        
}



function cargar_reporte_terceros(){
    
    $('.ui-helper-reset ui-widget elfinder-quicklook ui-draggable ui-resizable').remove();
    $('.ui-widget').remove();
    $('.elfinder-quicklook').remove();
    $('.ui-draggable').remove();
    $('.ui-resizable').remove();

    limpiar_cuerpo();
    
    abrirVentanaContenedorTabla(
              'tabla_terceros',
            'reportes', 'Terceros', 'cargarTerceros', '',"")
        
}



function cargar_reporte_dependencias(){
    
    $('.ui-helper-reset ui-widget elfinder-quicklook ui-draggable ui-resizable').remove();
    $('.ui-widget').remove();
    $('.elfinder-quicklook').remove();
    $('.ui-draggable').remove();
    $('.ui-resizable').remove();

    limpiar_cuerpo();
    
    abrirVentanaContenedorTabla(
        'tabla_dependencias',
        'reportes', 'Dependencias', 'cargarDependencias', '',""
    )
        
}
