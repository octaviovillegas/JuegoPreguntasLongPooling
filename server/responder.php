<?php
$pregunta=$_POST['pregunta'];
$respuesta=$_POST['respuesta'];
$archivoDeRespuestas = 'Respuestas.txt';
$file = fopen($archivoDeRespuestas, "r");

$num_lineas = 0; 
//$caracteres = 0; 

while (!feof ($file)) { 
    //si extraigo una línea del archivoDeRespuestas y no es false 
    if ($linea = fgets($file)){ 
        //acumulo una en la variable número de líneas 
       $num_lineas++; 
        //acumulo el número de caracteres de esta línea 
       // $caracteres += strlen($linea); 
    } 
} 
fclose($file);



$file = fopen($archivoDeRespuestas, "a");
fwrite($file, $pregunta." -->".$respuesta . PHP_EOL);
fclose($file);
$num_lineas++; 
echo "usted respondio en el lugar número :".$num_lineas ;

?>