$(document).ready(function () {
    //    FUNCION PARA CREAR FORMULARIO DE REGISTRAR COCHE
    $(".formucoche").hide();
    $("#formularioCoche").click(function () {
        
        $(".formucoche").fadeIn();
      
    });
    $("#cerrarregistrocoche").click(function (){
       $(".formucoche").fadeOut(); 
    });
});


