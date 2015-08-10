
function enviarInstruccion()
{
 

    // alert($('#pregunta').val());
    pregunta=$('#pregunta').val();
    var parametros = {'pregunta' : pregunta};
    $.ajax(
        {
            type: 'POST',
            url: '../server/escribir.php',
            data: parametros,
            success: function(data){
             console.log(data);

            }
        }
    );

}
