function radicados_responsable(){

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