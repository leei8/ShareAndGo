$(document).ready(function () {


    $("#registrar_vehiculo").click(function () {
        registrar_coche();
    });
    function registrar_coche() {

        var value = $("#marca_vehiculo").val();

        var id_marca = $('#marca [value="' + value + '"]').attr('data-value');

        var json = "submit=&matricula=" + $("#matricula").val() + "&marca=" + id_marca + "&tipo=" + $("#sel1").val() + "&color=" + $("#color").val() + "&plazas=" + $("#plazas").val();
       $.ajax({
            type: 'POST',
            data:  json ,
            dstaType: 'json',
            url: "../../controlador/controlador_registrar_vehiculo.php",
            success: function (datos) {
                alert("Se ha insertado con exito")
                
            },
            error: function (xhr) {
                alert("An error occured: " + xhr.status + " " + xhr.statusText);
            }
        })
        esconder();
    }

});

