$(document).ready(function () {
    $(".diaBuscador").click(function () {

        $(this).toggleClass("diaBuscadorSeleccionado");
    });
    
    function cargar_mis_peticiones() {
        $.ajax({
            type: 'POST',
            dstaType: 'json',
            url: "../../controlador/controlador_peticiones_trayecto.php",
            success: function (datos) {
                midato = JSON.parse(datos)
                milista = 0;
                $.each(midato, function (i, dato) {
                    if (dato['estado'] === 'pendiente') {
                        milista = milista + 1;
                    } 
                });
                
                $('#notificacion').html(milista);
                return false;
            },
            error: function (xhr) {
                alert("An error occured: " + xhr.status + " " + xhr.statusText);
            }
        });
    }
    cargar_mis_peticiones();
});
