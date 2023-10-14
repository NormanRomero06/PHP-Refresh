<?php

#Variable Numerica

$numero = 5;
echo "Esto es una variable Numero: $numero<br>";
var_dump($numero);
echo "<br><br>";

#Varible texto
$palabra = "palabra";
echo "Esto es una variable de texto: $palabra<br>";
var_dump($palabra);
echo "<br><br>";

#Variable Boleana
$booleana = true;
echo "Esto es una variable booleana: $booleana<br>";
var_dump($booleana);
echo "<br><br>";

#Variable Arreglo
$colores = array("rojo","amarillo");
echo "Esto es una variable arreglo: $colores[1] <br>";
var_dump($colores);
echo "<br><br>";

#Variable Arreglo con propiedades
$verduras = array("verdura1"=>"lechuga","verdura2"=>"cebolla");
echo "Esto es una variable arreglo con propiedades: $verduras[verdura1]<br>";
var_dump($verduras);
echo "<br><br>";

#Variable de tipo objecto
$frutas = (object)["fruta1"=>"pera","fruta2"=>"manzana"];
echo "Esto es una variable objeto: $frutas->fruta1<br>";
var_dump($frutas);
?>