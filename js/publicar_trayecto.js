$(document).ready(function () {
    var numero_trayectos = 0;

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
//    FUNCION PARA AÑADIR Y BORRAR TRAYECTOS
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
    
    $("#botonTrayecto").click(function(){
       
      
        $.ajax({
            type: 'POST',
            dstaType: 'json',
            url: "../../controlador/controlador_mis_coches.php",
            success: function (datos) {
                midato = JSON.parse(datos)
                milista = "";
                $.each(midato, function (i, dato) {
                    milista += "<option id=" + dato['id_vehiculo'] + " value=" + dato['nombre'] + ',' + dato['matricula'] +  "></option>";
                });
                
                if(milista == ""){
                 var result = confirm("Para publicar un trayecto, necesitas tener al menos un coche registrado." );
                 
                 if (result){
                     header('Location: ../popup/registrar_coche.php');
                 } else {
                  alert('Ha dicho no');
                 
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
       // Obtenemos el valor y con ello, su id del municipio salida.
       
        var value = $("#municipio_salida").val();

        var id_municipio_salida = $('#poo1 [value="' + value + '"]').attr('data-value');
        
        
        // Obtenemos el valor e id del vehiculo seleccionado.
        var value_vehiculo = $("#elegir_coche").val();

        var vehiculo_seleccionado = $('#poo3 [value="' + value_vehiculo + '"]').attr('id');


        // recogemos los id's de las paradas (en el caso de que haya alguna)
        var paradas = [];

        $("input[name='parada']").each(function () {


            var paradas_1 = $(this).val();

            var id_paradas = $('#poo1 [value="' + paradas_1 + '"]').attr('data-value');

            paradas.push(id_paradas);


        })
        
        //cogemos los dias seleccionados en los checkbox.
        var dias_seleccionados = [];


        $(".check:checked").each(function () {
            dias_seleccionados.push($(this).val());


        });
        
        var fecha_actual  = $("#fecha_actual").val();

        var json = "submit=&municipio_salida=" + id_municipio_salida + "&paradas=" + paradas + "&coche=" + vehiculo_seleccionado + "&plazas_disponibles=" + $("#plazasdipo").val() + "&tipo_trayecto=" + $("input[name='Tipo']").val() + "&dias_seleccionados=" + dias_seleccionados + "&fecha_actual=" + fecha_actual;

        alert(json);

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
    
    
    var d = new Date();

var month = d.getMonth()+1;
var day = d.getDate();

var output = d.getFullYear() + '-' +
    (month<10 ? '0' : '') + month + '-' +
(day<10 ? '0' : '') + day;

$("#fecha_actual").val(output);
});