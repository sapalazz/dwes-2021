<?php

$cad1 = 'lola';
$cad2 = 'dolores';

// Si las dos cadenas son iguales
echo "--CADENAS IGUALES--<br>";
if(!strcmp($cad1, $cad2))
{
    echo "La cadena $cad1 y la cadena $cad2 son iguales.<br>";
}
else
{
    echo "La cadena $cad1 y la cadena $cad2 son distintas.<br><br>";
}

// La longitud de ambas cadenas
echo "--LONGITUD CADENAS--<br>";
$long_cad1 = mb_strlen($cad1);
$long_cad2 = mb_strlen($cad2);

echo "La longitud de la cadena $cad1 es de $long_cad1 caracteres.<br>";
echo "La longitud de la cadena $cad2 es de $long_cad2 caracteres.<br><br>";

// Ambas en minúscula
echo "--CADENAS EN MINÚSCULA--<br>";
$minus_cad1 = strtolower($cad1);
$minus_cad2 = strtolower($cad2);

echo "La cadena $cad1 en minúsculas es $minus_cad1.<br>";
echo "La cadena $cad2 en minúsculas es $minus_cad2.<br><br>";

// Ambas en mayúscula
echo "--CADENAS EN MAYÚSCULA--<br>";
$mayus_cad1 = strtoupper($cad1);
$mayus_cad2 = strtoupper($cad2);

echo "La cadena $cad1 en mayúsculas es $mayus_cad1.<br>";
echo "La cadena $cad2 en mayúsculas es $mayus_cad2.<br><br>";

// Ambas al revés
echo "--CADENAS AL REVÉS--<br>";
$rev_cad1 = strrev($cad1);
$rev_cad2 = strrev($cad2);

echo "La cadena $cad1 al revés es $rev_cad1.<br>";
echo "La cadena $cad2 al revés es $rev_cad2.<br><br>";

// Ambas al revés sin función strrev()
echo "--CADENAS AL REVÉS SIN STRREV()--<br>";

$length_cad1 = strlen($cad1);  
$length_cad2 = strlen($cad2);

for ($i=($length_cad1-1) ; $i >= 0 ; $i--)   
// $i=strlen($cad1)-1; $i>=0; $i--)
{  
  echo $cad1[$i];
}
echo "<br>";  

for ($x=($length_cad2-1) ; $x >= 0 ; $x--)  
// $x=strlen($cad2)-1; $x>=0; $x--) 
{  
  echo $cad2[$x];  
}
echo "<br>";


?>