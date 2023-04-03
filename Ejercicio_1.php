<?php
$nombre = [
"EVER",
"LUZ",
"JHESSICA",
"JUAN PAUL",
"JUAN RONALDO",
"CLAUDIA MARISOL",
"MARTIN",
"RODRIGO",
"BORIS",
"YOLA",
"ROSSE"
];
//MUESTRA ELEMENTO DEL VECTOR
echo $nombre[5]."<br>";
//MUESTRA LA POSICION DEL ELEMENTO DEL VECTOR
$clave = array_search("CLAUDIA MARISOL",$nombre);
echo $clave;
//CONTAR LA CANTIDAD DE ELEMENTOS DEL VECTOR
echo "<br>La cantidad de elementos es: ".count($nombre);

?>