function cargar_reporte_entrantes(){

    $('.main-sidebar').removeClass('sidebar-expanded sidebar-focused');
    
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

    $('.main-sidebar').removeClass('sidebar-expanded sidebar-focused');
    
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

    $('.main-sidebar').removeClass('sidebar-expanded sidebar-focused');
    
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
    
    $('.main-sidebar').removeClass('sidebar-expanded sidebar-focused');
    
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
    
    $('.main-sidebar').removeClass('sidebar-expanded sidebar-focused');
    
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
