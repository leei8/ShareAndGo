
function validar_informacion_registro() {
    if (comprobar_contrasena_registro() && comprobar_municipio_registro() && comprobar_fecha(value)) {
        alert("datos correctos")
        return true;
    } else {
        alert("datos incorrectos")
        return false;
    }
}

function comprobar_arroba(value,e) {
    var caracter;
    var codigo;

    codigo = e.which;
    caracter = String.fromCharCode(codigo);
    if (caracter == "@") {
        if (value.indexOf('@') >= 0) {
            return false;
        } else {
            return true;
        }
    }
}

function solo_letras(e) {
    key = e.keyCode || e.which;
    tecla = String.fromCharCode(key).toString();
    letras = "áéíóúabcdefghijklmnñopqrstuvwxyzÁÉÍÓÚABCDEFGHIJKLMNÑOPQRSTUVWXYZ";
    especiales = [8, 37, 39, 46, 6];
    tecla_especial = false
    for (var i in especiales) {
        if (key == especiales[i]) {
            tecla_especial = true;
            break;
        }
    }

    if (letras.indexOf(tecla) == -1 && !tecla_especial) {
        return false;
    }
}

function solo_numeros(e) {
    if (window.event) {// asignamos el valor de la tecla a keynum
        keynum = e.keyCode;
    } else {
        keynum = e.which;
    }
    // comprobamos si se encuentra en el rango numérico y que teclas no
    // recibirá.
    if ((keynum > 47 && keynum < 58) || keynum == 8 || keynum == 13
            || keynum == 6) {
        return true;
    } else {
        return false;
    }
}

function comprobar_contrasena_registro() {
    var contrasena = document.form_registro.contrasena_registro.value;
    var contrasena2 = document.form_registro.contrasena_registro2.value;

    if (contrasena === contrasena2) {
        return true;
    } else {
        alert("Las dos claves son distintas...");
        return false;

    }
}

function comprobar_municipio_registro() {

    var municipio_metido = document.getElementById("municipioid").value;

    var datalist = document.getElementById("poo2");

    if (datalist.querySelector("option[value='" + municipio_metido + "'")) {

        return true;
    } else {
        return false;

    }
}

function validar_informacion_modificar(){
    if(comprobar_contrasena_modificar() && comprobar_municipio_modificar()){
        return  true;
    }else{
        return false;
    }
}

function comprobar_contrasena_modificar() {

    var contrasena = document.getElementById('contrasena_modificar').value;
    var contrasena2 = document.getElementById('contrasena_modificar2').value;

    if (contrasena === contrasena2) {
        return true;
    } else {
        alert("Las dos claves son distintas...");
        return false;

    } 
}

function comprobar_municipio_modificar() {

    var municipio_metido = document.getElementById("municipiomodif").value;

    var datalist = document.getElementById("poo1");

    alert (datalist.querySelector("option[value='" + municipio_metido + "'"));
    if (datalist.querySelector("option[value='" + municipio_metido + "'")) {

        return true;
        
        
    } else {
        alert("El municipio metido no es válido")
        return false;
        
    }
}

//function comprobar_fecha(fecha){
//
//    var fecha_metida = document.getElementById('escondido').innerHTML;
// 
//    alert(fecha_metida)
//
//    var hoy = new Date().toISOString().slice(0,10);
//
//       alert(hoy);
//
//
//    if(fecha_metida > hoy){
//        alert("si vienes del futuro")
//        return false;
//    }else{
//        alert("ok")
//        return true;
//    }
//}