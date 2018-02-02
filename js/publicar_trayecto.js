$(document).ready(function () {

    var numero_trayectos = 0;
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
                    milista += "<option data-value='" + dato.id_municipio + "' value='" + dato.municipio + ', ' + dato.provincia + "'></option>";
                });
                if ($('datalist[name=municipio_paso')) {
                    $('datalist[name=municipio_paso]').html(milista);
                }

                if ($('datalist[name=municipio_salida')) {
                    $('datalist[name=municipio_salida]').html(milista);
                }

                return false;
            },
            error: function (xhr) {
                alert("An error occured: " + xhr.status + " " + xhr.statusText);
            }
        });
    }

    var $numero_trayectos = 0;
//    FUNCION PARA SELECCIONAR TODOS LOS CHECKBOX
    $("#seleccionartodos").click(function () {
        $(".check").prop('checked', $(this).prop('checked'));
    });
//    FUNCION PARA AÑADIR(MAX: 4) Y BORRAR TRAYECTOS
    $(".add-more").click(function () {
        if ($numero_trayectos === 4) {

            return false;
        }
        var html = $(".copy-fields").html();
        $(".after-add-more").after(html);
        cargar_combo_municipios();


        $numero_trayectos = $numero_trayectos + 1;


    });
    $("body").on("click", ".remove", function () {
        $(this).parents(".control-group").remove();
        $numero_trayectos = $numero_trayectos - 1;
    });

    $("#anadirParada").click(function () {
        numero_trayectos++;

        if (numero_trayectos > 4) {
            numero_trayectos = 0;
        }

    })

    $("#insertar_trayecto").click(function () {
        insertar_trayecto();

    });

    //Recoge los coches que tiene el usuario(si es que los tiene), si no saca un mensaje.
    $("#botonTrayecto").click(function () {
        $.ajax({
            type: 'POST',
            dstaType: 'json',
            url: "../../controlador/controlador_mis_coches.php",
            success: function (datos) {
                midato = JSON.parse(datos)
                milista = "";
                $.each(midato, function (i, dato) {
                    
                  milista += "<option id='" + dato['id_vehiculo'] + "' value='" + dato['nombre'] + "," + dato['matricula'] + "'></option>";     
                            
                  //  milista += "<option id=" + dato['id_vehiculo'] + " value=" + dato['nombre'] + ',' + dato['matricula'] + "></option>";
                });

                if (milista == "") {
                    var result = confirm("Para publicar un trayecto, necesitas tener al menos un coche registrado.");

                    if (result) {
                        header('Location: ../popup/registrar_coche.php');
                    }
                }
                return false;
            },
            error: function (xhr) {
                alert("An error occured: " + xhr.status + " " + xhr.statusText);
            }
        });
    });

    function insertar_trayecto() {
        // Obtiene el municipio salida y con ello, su id.

        var value = $("#municipio_salida").val();

        var id_municipio_salida = $('#poo1 [value="' + value + '"]').attr('data-value');


        // Obtiene el coche e id seleccionado.
        var value_vehiculo = $("#elegir_coche").val();

        var vehiculo_seleccionado = $('#poo3 [value="' + value_vehiculo + '"]').attr('id');


        // Recoge los id's de las paradas (en el caso de que haya alguna)
        var paradas = [];

        $("input[name='parada']").each(function () {


            var paradas_1 = $(this).val();

            var id_paradas = $('#poo1 [value="' + paradas_1 + '"]').attr('data-value');

            paradas.push(id_paradas);


        })

        //Recoge los dias seleccionados en los checkbox.
        var dias_seleccionados = [];


        $(".check:checked").each(function () {
            dias_seleccionados.push($(this).val());

        });
        // Recoge la fecha actual.
        var d = new Date();

        var month = d.getMonth() + 1;
        var day = d.getDate();

        var output = d.getFullYear() + '-' +
                (month < 10 ? '0' : '') + month + '-' +
                (day < 10 ? '0' : '') + day;

        $("#fecha_actual").val(output);

        var fecha_actual = $("#fecha_actual").val();


        var json = "submit=&municipio_salida=" + id_municipio_salida + "&paradas=" + paradas + "&coche=" + vehiculo_seleccionado + "&plazas_disponibles=" + $("#plazasdipo").val() + "&tipo_trayecto=" + $("input[name='Tipo']:checked").val() + "&dias_seleccionados=" + dias_seleccionados + "&fecha_actual=" + fecha_actual;

        $.ajax({
            type: 'POST',
            data: json,
            dstaType: 'json',
            url: "../../controlador/controlador_insertar_trayecto.php",
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