<?php
$pregunta=$_POST['pregunta'];
$archivoDeInstrucciones = 'Enunciado.txt';
$file = fopen($archivoDeInstrucciones, "w");
fwrite($file, $pregunta . PHP_EOL);
fclose($file);
echo "ok la escritura";
?>