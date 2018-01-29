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

