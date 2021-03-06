//Se recogen todos los municipios de la base de datos.
$(document).ready(function () {
    
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
                 if($('datalist[name=municipio_paso')){
                    $('datalist[name=municipio_paso]').html(milista);
                }
                
                if($('datalist[name=municipio_salida')){
                    $('datalist[name=municipio_salida]').html(milista);
                }
                return false;
            },
            error: function (xhr) {
                alert("An error occured: " + xhr.status + " " + xhr.statusText);
            }
        });
    }
});