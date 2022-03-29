<?php

$Array_1 = array("num1" => 1, "num2" => 2, "num3" => 3, "num4" => 4, "num5" => 5);

$Array_2 = array("numX" => 15, "numY" => 85, "numL" => 75);

$Var = 123;

$Array_2["num9"] = $Var;

$resultado = array_merge($Array_1,$Array_2);

$numero_tot = sizeof($resultado);

echo "El numero total que hay en la array es de: " . $numero_tot;

echo "<br>";

var_dump($resultado);

?>
