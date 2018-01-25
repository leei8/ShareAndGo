$(document).ready(function () {
    cargar_combo_municipios();
    $("#municipioidregistro").hide();
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
                $('datalist[name=municipio_registro]').html(milista);
                return false;
            },
            error: function (xhr) {
                alert("An error occured: " + xhr.status + " " + xhr.statusText);
            }
        });
    }

    $("#municipioid").change(function () {
        var value = $("#municipioid").val();
      
        var id_municipio = $('#poo2 [value="' + value + '"]').attr('data-value');
       $("#municipioidregistro").val(id_municipio);
    });




});

