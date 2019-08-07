//shadow-sm bg-white rounded
/**
 * Hover para efecto de los servicios
 */
$(document).ready(function() {
    $('.servicios').hover(
        function() {
            $(this).addClass('shadow bg-white rounded');
        },
        function() {
            $(this).removeClass('shadow bg-white rounded');
        }
    );
});