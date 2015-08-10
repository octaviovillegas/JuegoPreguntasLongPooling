<?php
$pregunta=$_POST['pregunta'];
$respuesta=$_POST['respuesta'];
$archivoDeRespuestas = 'Respuestas.txt';
$file = fopen($archivoDeRespuestas, "a");
fwrite($file, $pregunta." -->".$respuesta . PHP_EOL);
fclose($file);
echo "ok la escritura";
?>