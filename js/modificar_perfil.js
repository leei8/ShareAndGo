$(document).ready(function () {

    //Recoge los municipios de la BBDD.
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
                    milista += "<option data-value='" + dato.id_municipio + "' value='" + dato.municipio + ', '+ dato.provincia +  "'></option>";
                });
                $('datalist[name=municipio_modificar]').html(milista);
                return false;
            },
            error: function (xhr) {
                alert("An error occured: " + xhr.status + " " + xhr.statusText);
            }
        });
    }
    //Recoge ID del municipio metido.
    $("#municipiomodif").change(function () {
        var value = $("#municipiomodif").val();

        var id_municipio = $('#poo1 [value="' + value + '"]').attr('data-value');
        $("#municipiomodif_id").val(id_municipio);
    
    });
});