<html>
    <head>
            <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!--final de Estilos-->
           <meta name="viewport" content="width=device-width, initial-scale=1">
          <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">

        <!-- jQuery library -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>

        <!-- Latest compiled JavaScript -->
        <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
        <link rel="stylesheet" type="text/css" href="../estilo.css">
        <script type="text/javascript" src="http://code.jquery.com/jquery.min.js"></script>
        <script type="text/javascript" src="control.js"></script>
    </head>
    <body>
        <div class="container">
            <div class="page-header">
                    <h1>Crear Pregunta</h1>      
            </div>
            <div class="CajaInicio animated bounceInRight">
                <form>
                		  <input type ="text"  id="pregunta"/>
                		<input type= "button"  class="btn btn-info"value="enviar"  onclick="enviarInstruccion()"/> 


                </form>
            </div>    
      
            <div id="response"></div>
        </div>
    </body>
</html>
