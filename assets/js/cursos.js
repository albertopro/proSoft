/**
 * Hover para efecto de los servicios
 */
$(document).ready(function() {
    $('.servicios').click(function(){
        $('.temarioCursos').toggle('slow');
    });

    $('#contacto').click(function(){
        modalContactos();
    });
    
    function modalContactos(){
        $('#modalContactos').modal('show')
    }
});

