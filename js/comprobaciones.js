
function valida(e){
    tecla = (document.all) ? e.keyCode : e.which;

    //Tecla de retroceso para borrar, siempre la permite
    if (tecla==8){
        return true;
    }
        
    // Patron de entrada, en este caso solo acepta numeros
    patron =/[0-9]/;
    tecla_final = String.fromCharCode(tecla);
    return patron.test(tecla_final);
}
function comprobarClave(){ 
   	contrasena = document.f1.contrasena.value 
   	contrasena2 = document.f1.contrasena2.value 

   	if (contrasena == contrasena2) 
      	alert("Las dos claves son iguales...\nRealizaríamos las acciones del caso positivo") 
   	else 
      	alert("Las dos claves son distintas...\nRealizaríamos las acciones del caso negativo") 
} 


