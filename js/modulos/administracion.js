function cargar_dependencias(){

    $('.main-sidebar').removeClass('sidebar-expanded sidebar-focused');

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

    $('.main-sidebar').removeClass('sidebar-expanded sidebar-focused');
    
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


function cargar_empleados_usuario(){

    $('.main-sidebar').removeClass('sidebar-expanded sidebar-focused');
    
    $('.ui-helper-reset ui-widget elfinder-quicklook ui-draggable ui-resizable').remove();
    $('.ui-widget').remove();
    $('.elfinder-quicklook').remove();
    $('.ui-draggable').remove();
    $('.ui-resizable').remove();

    limpiar_cuerpo();
    
    abrirVentanaContenedorTabla(
        'tabla_empleados',
        'administracion', 'Empleados', 'index_usuario', '');    
        
}


function cargar_terceros(){

    $('.main-sidebar').removeClass('sidebar-expanded sidebar-focused');
    
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

    $('.main-sidebar').removeClass('sidebar-expanded sidebar-focused');
    
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

    $('.main-sidebar').removeClass('sidebar-expanded sidebar-focused');
    
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

    $('.main-sidebar').removeClass('sidebar-expanded sidebar-focused');
    
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

    $('.main-sidebar').removeClass('sidebar-expanded sidebar-focused');
    
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
