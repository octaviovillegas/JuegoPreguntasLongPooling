<?php


set_time_limit(0);
//http://php.net/manual/es/function.set-time-limit.php

// los datos se pueden traer de una base de datos u otro origen
$archivoDeInstrucciones = 'Enunciado.txt';

//while eterno
while (true) {

    // si la fechayHora fueron pasadas $fechaUltimaLlamada = timestamp, sino $fechaUltimaLlamada = null
    $fechaUltimaLlamada = isset($_GET['fechayHora']) ? (int)$_GET['fechayHora'] : null;

    //http://php.net/manual/es/function.clearstatcache.php
    clearstatcache();
   
    //http://php.net/manual/es/function.filemtime.php
    //Nota: Los resultados de esta función son guardados en caché. Para más información ver clearstatcache().
    //Devuelve el momento de cuándo el archivo se modificó por última vez, o FALSE en caso de error. El momento es devuelto como tiempo Unix, lo cual es apropiado para la función date().
    $fechaModificacionDeArchivo = filemtime($archivoDeInstrucciones);

    // si la fecha y hora no fueron pasadas(primera) , o el archivo se modifico (cambio a fecha)
    if ($fechaUltimaLlamada == null || $fechaModificacionDeArchivo > $fechaUltimaLlamada) {

       
        $ContenidoDelArchivo = file_get_contents($archivoDeInstrucciones);

       
        $ArrayResultado = array(
            'textoDeLaPregunta' => $ContenidoDelArchivo,
            'fechayHora' => $fechaModificacionDeArchivo
        );

        // codificar a JSON,  ArrayResultado (para AJAX)
        $json = json_encode($ArrayResultado);
       //retotorno los datos
        echo $json;

       
        break;

    } else {
        // wait for 1 sec 
        sleep( 1 );
        continue;
    }
}
