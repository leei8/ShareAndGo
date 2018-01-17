$( document ).ready(function() {
    $("#registrarcoche").on("click", function (){
        cargar_marca_coches();
    });
    function cargar_marca_coches() {
        
        $.ajax({
            type: 'POST',
            dstaType: 'json',
            url: "../../controlador/controlador_combo_marcas.php",
            
            success: function (datos) {
                midato = JSON.parse(datos)
                milista = "";
                $.each(midato, function (i, dato) {
                    milista += "<option data-value='" + dato.id_marca + "' value='" + dato.nombre + "'></option>";
                });
                $('datalist[name=marca]').html(milista);
//                $('#municipio_paso').html(milista);
                return false;
            },
            error: function (xhr) {
                alert("An error occured: " + xhr.status + " " + xhr.statusText);
            }
        });
    }

//    $('#anadir_parada').on('click', function(){
//        alert('asds');
//    });
//    aa
});