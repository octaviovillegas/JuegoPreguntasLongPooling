
function TraerInstruccion(fechayHora)
{
    var Parametros = {'fechayHora' : fechayHora};

    $.ajax(
        {
            type: 'GET',
            url: '../server/server.php',
            data: Parametros,
            success: function(ParametrosRespuesta){
                // transformo los datos de respuesta a JSON
                var obj = jQuery.parseJSON(ParametrosRespuesta);
                // muestro el enunciado
                $('#Enunciado').html("<input type='text' id=enunciado value='"+ obj.textoDeLaPregunta +"' readonly>");
                //llamo a la funcion con la fecha y hora que me devolvio el servidor
                TraerInstruccion(obj.fechayHora);
            }
        }
    );
}


// initialize jQuery
$(function() {
    //llamo a la funcion sin la fecha y hora, es la primer llamada
        TraerInstruccion();




        $("input[name=respuesta]").click(function () {  

            respuesta=$(this).val();
            pregunta=$('#enunciado').val();

            var Parametros = {'respuesta' : respuesta, 'pregunta' : pregunta};

              $.ajax(
                    {
                        type: 'POST',
                        url: '../server/responder.php',
                        data: Parametros,
                        success: function(ParametrosRespuesta){
                          
                           alert(ParametrosRespuesta);
                        }
                    }
                );


            

        });// $("input[name=respuesta]").click(function () { 
});



