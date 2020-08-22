function radicados_responsable(){

    $('.main-sidebar').removeClass('sidebar-expanded sidebar-focused');
    
    $('.ui-helper-reset ui-widget elfinder-quicklook ui-draggable ui-resizable').remove();
    $('.ui-widget').remove();
    $('.elfinder-quicklook').remove();
    $('.ui-draggable').remove();
    $('.ui-resizable').remove();

    limpiar_cuerpo();
    
    abrirVentanaContenedorTabla(
        'tabla_radicados_responsable',
        'estadisticas', 'Estadisticas', 'radicadosPorResponsable', '');    
        
}


function radicados_dependencias(){

    $('.main-sidebar').removeClass('sidebar-expanded sidebar-focused');
    
    $('.ui-helper-reset ui-widget elfinder-quicklook ui-draggable ui-resizable').remove();
    $('.ui-widget').remove();
    $('.elfinder-quicklook').remove();
    $('.ui-draggable').remove();
    $('.ui-resizable').remove();

    limpiar_cuerpo();
    
    abrirVentanaContenedorTabla(
        'tabla_radicados_dependencia',
        'estadisticas', 'Estadisticas', 'radicadosPorDependencia', '');    
        
}


function radicados_tiporadicado(){

    $('.main-sidebar').removeClass('sidebar-expanded sidebar-focused');
    
    $('.ui-helper-reset ui-widget elfinder-quicklook ui-draggable ui-resizable').remove();
    $('.ui-widget').remove();
    $('.elfinder-quicklook').remove();
    $('.ui-draggable').remove();
    $('.ui-resizable').remove();

    limpiar_cuerpo();
    
    abrirVentanaContenedorTabla(
        'tabla_radicados_tiporadicado',
        'estadisticas', 'Estadisticas', 'radicadosPorTiporadicado', '');    
        
}