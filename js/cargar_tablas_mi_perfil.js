$(document).ready(function () {
    function cargar_tabla_trayectos_creados() {
        $.ajax({
            type: 'POST',
            dstaType: 'json',
            url: "../../controlador/controlador_trayectos_creados.php",
            success: function (datos) {
                midato = JSON.parse(datos)
                milista = "";
                $.each(midato, function (i, dato) {
                    milista += "<tr><td>"
                            + dato['matricula'] + "</td><td>"
                            + dato['municipios'] + "</td><td>"
                            + dato['fecha_creacion'] + "</td><td>"
                            + dato['tiempo_estimado'] + "</td><td>"
                            + dato['plazas_disponibles'] + "</td>"
                            if(dato['ocasional'] === 1){
                                $tipo = "ocasional"
                            }else{
                                $tipo = "frecuente"
                            }
                        milista += "<td>" + $tipo + "</td></tr>";
                });
                $('#tabla_trayectos_creados').append(milista);
                return false;
            },
            error: function (xhr) {
                alert("An error occured: " + xhr.status + " " + xhr.statusText);
            }
        });
    }
    function cargar_mis_trayectos_compartidos() {
        $.ajax({
            type: 'POST',
            dstaType: 'json',
            url: "../../controlador/controlador_trayectos_compartidos.php",
            success: function (datos) {
                midato = JSON.parse(datos)
                milista = "";
                $.each(midato, function (i, dato) {
                    milista += "<tr><td>"
                            + dato['conductor'] + "</td><td>"
                            + dato['matricula'] + "</td><td>"
                            + dato['municipios'] + "</td><td>"
                            + dato['plazas_disponibles'] + "</td><td>"
                            + dato['dias'] + "</td><td>"
                            + dato['tiempo_estimado'] + "</td>";
                    
                            if(dato['ocasional']===1){
                                $tipo = "ocasional"
                            }else{
                                $tipo = "frecuente"
                            }
                    milista +="<td>" + $tipo + "</td><td>"
                            + dato['fecha_creacion'] + "</td></tr>";
                });
                $('#tabla_trayectos_compartidos').append(milista);
                return false;
            },
            error: function (xhr) {
                alert("An error occured: " + xhr.status + " " + xhr.statusText);
            }
        });
    }
    function cargar_mis_coches() {
        $.ajax({
            type: 'POST',
            dstaType: 'json',
            url: "../../controlador/controlador_mis_coches.php",
            success: function (datos) {
                midato = JSON.parse(datos)
                milista = "";
                $.each(midato, function (i, dato) {
                    milista += "<tr><td>"
                            + dato['matricula'] + "</td><td>"
                            + dato['nombre'] + "</td><td>"
                            + dato['color'] + "</td><td>"
                            + dato['numero_plazas'] + "</td>";
                });
                $('#tabla_mis_coches').append(milista);
                return false;
            },
            error: function (xhr) {
                alert("An error occured: " + xhr.status + " " + xhr.statusText);
            }
        });
    }

    cargar_tabla_trayectos_creados();
    cargar_mis_trayectos_compartidos();
    cargar_mis_coches();
});

