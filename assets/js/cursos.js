/**
 * Hover para efecto de los servicios
 */
$(document).ready(function() {
    $('.servicios').click(function(){
        $('.temarioCursos').fadeToggle('slow');
    });

    $('#contacto').click(function(){
        modalContactos();
    });
    
    function modalContactos(){
        $('#modalContactos').modal('show')
    }

    $('#youTube').click(function(){
        modalYouTube();
    });

    function modalYouTube(){
        $('#modalYouTube').modal('show');
    }
});

