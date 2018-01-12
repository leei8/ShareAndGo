$( document ).ready(function() {
    cargar_combo_municipios();
    function cargar_combo_municipios() {
        $.ajax({
            type: 'POST',
            dstaType: 'json',
            url: "../../controlador/controlador_combo_municipios.php",
            success: function (datos) {
                midato = JSON.parse(datos)
                milista = "";
                $.each(midato, function (i, dato) {
                    milista += "<option id=" + dato.id_municipio + ">" + dato.municipio + ", " + dato.provincia + "</option>";
                });
                $('datalist[name=municipio_salida]').html(milista);
//                $('#municipio_paso').html(milista);
                return false;
            },
            error: function (xhr) {
                alert("An error occured: " + xhr.status + " " + xhr.statusText);
            }
        });
    }

    $('#anadir_parada').on('click', function(){
        alert('asds');
    });
    //aa
});