function validar_largura_50(valor) {
	var valor = document.valor.value;

	if (valor.length > 50 || valor.length < 0) {
		alert("Este campo acepta un máximo de 50 caracteres.");
		return false;
	} else {
		return true;
	}
}

function solo_letras(e) {
	key = e.keyCode || e.which;
	tecla = String.fromCharCode(key).toString();
	letras = "áéíóúabcdefghijklmnñopqrstuvwxyzÁÉÍÓÚABCDEFGHIJKLMNÑOPQRSTUVWXYZ";
	especiales = [ 8, 37, 39, 46, 6 ];
	tecla_especial = false
	for ( var i in especiales) {
		if (key == especiales[i]) {
			tecla_especial = true;
			break;
		}
	}

	if (letras.indexOf(tecla) == -1 && !tecla_especial) {
		alert('Tecla no aceptada');
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
function validar_email() {
	var correo = document.getElement
	if (/\w+\@\w+\.\w+/.test(correo)) { // comprobar que el correo cumpla el
										// formato.
		alert('Correo correcto.');
		return true;
	} else {
		alert('Correo incorrecto');
		return false;
	}
}

function validar_telefono(telefono){
	var telefono = document.getElementById("telefono").value;
	
	if(telefono.length < 9 || telefono.length > 9){
		alert("Introduce 9 dígitos.");
		return false;
	}else{
		return true;
	}
}
