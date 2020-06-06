function cargar_dependencias(){

    $('.ui-helper-reset ui-widget elfinder-quicklook ui-draggable ui-resizable').remove();
    $('.ui-widget').remove();
    $('.elfinder-quicklook').remove();
    $('.ui-draggable').remove();
    $('.ui-resizable').remove();

    limpiar_cuerpo();
    
    abrirVentanaContenedorTabla(
        'tabla_dependencias',
        'administracion', 'Dependencias', 'index', '');    
        
}

function cargar_empleados(){

    $('.ui-helper-reset ui-widget elfinder-quicklook ui-draggable ui-resizable').remove();
    $('.ui-widget').remove();
    $('.elfinder-quicklook').remove();
    $('.ui-draggable').remove();
    $('.ui-resizable').remove();

    limpiar_cuerpo();
    
    abrirVentanaContenedorTabla(
        'tabla_empleados',
        'administracion', 'Empleados', 'index', '');    
        
}

function cargar_terceros(){

    $('.ui-helper-reset ui-widget elfinder-quicklook ui-draggable ui-resizable').remove();
    $('.ui-widget').remove();
    $('.elfinder-quicklook').remove();
    $('.ui-draggable').remove();
    $('.ui-resizable').remove();

    limpiar_cuerpo();
    
    abrirVentanaContenedorTabla(
        'tabla_terceros',
        'administracion', 'Terceros', 'index', '');    
        
}

function cargar_series(){

    $('.ui-helper-reset ui-widget elfinder-quicklook ui-draggable ui-resizable').remove();
    $('.ui-widget').remove();
    $('.elfinder-quicklook').remove();
    $('.ui-draggable').remove();
    $('.ui-resizable').remove();

    limpiar_cuerpo();
    
    abrirVentanaContenedorTabla(
        'tabla_series',
        'administracion', 'Series', 'index', '');    
        
}

function cargar_subseries(){

    $('.ui-helper-reset ui-widget elfinder-quicklook ui-draggable ui-resizable').remove();
    $('.ui-widget').remove();
    $('.elfinder-quicklook').remove();
    $('.ui-draggable').remove();
    $('.ui-resizable').remove();

    limpiar_cuerpo();
    
    abrirVentanaContenedorTabla(
        'tabla_subseries',
        'administracion', 'Subseries', 'index', '');    
        
}

function cargar_tiposdocumentales(){

    $('.ui-helper-reset ui-widget elfinder-quicklook ui-draggable ui-resizable').remove();
    $('.ui-widget').remove();
    $('.elfinder-quicklook').remove();
    $('.ui-draggable').remove();
    $('.ui-resizable').remove();

    limpiar_cuerpo();
    
    abrirVentanaContenedorTabla(
        'tabla_tiposdocumentales',
        'administracion', 'Tiposdocumentales', 'index', '');    
        
}

function cargar_tiposradicado(){

    $('.ui-helper-reset ui-widget elfinder-quicklook ui-draggable ui-resizable').remove();
    $('.ui-widget').remove();
    $('.elfinder-quicklook').remove();
    $('.ui-draggable').remove();
    $('.ui-resizable').remove();

    limpiar_cuerpo();
    
    abrirVentanaContenedorTabla(
        'tabla_tiposradicado',
        'administracion', 'Tiposradicado', 'index', '');    
        
}

function enviar_correo_empleado(correo, id_empleado) {

    ejecutarAccion(
      'alertas',
      'Alertas',
      'enviarCorreoEmpleado',
      "correo="+correo+"&id_empleado="+id_empleado,
      'mensaje_alertas("success", "Correo Enviado Correctamente", "center");'
    );

  }
