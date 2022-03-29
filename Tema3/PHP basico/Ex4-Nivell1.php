<?php

$IntegerX = 5;
$IntegerY = 5;
$Resultado1 = $IntegerX + $IntegerY;
$Resultado2 = $IntegerX - $IntegerY;
$Resultado3 = $IntegerX * $IntegerY;
$Resultado4 = $IntegerX / $IntegerY;
$Resultado5 = $IntegerX % $IntegerY;

$DoubleN = 2.5;
$DoubleM = 2.5;
$Resultado6 = $DoubleM + $DoubleN;
$Resultado7 = $DoubleM - $DoubleN;
$Resultado8 = $DoubleM * $DoubleN;
$Resultado9 = $DoubleM / $DoubleN;
$Resultado10 = $DoubleM % $DoubleN;

$DobleX = $IntegerX * 2;
$DobleY = $IntegerY * 2;
$DobleM = $DoubleM * 2;
$DobleN = $DoubleN * 2;

$SumaTot = $IntegerX + $IntegerY + $DoubleM + $DoubleN;
$ProductoTot = $IntegerX * $IntegerY * $DoubleM * $DoubleN;
$ProductoTot2 = $IntegerX / $IntegerY / $DoubleM / $DoubleN;

print "Resultados de X e Y.";

echo "<br>";
echo $IntegerX;
echo "<br>";
echo $IntegerY;
echo "<br>";
echo $Resultado1;
echo "<br>";
echo $Resultado2;
echo "<br>";
echo $Resultado3;
echo "<br>";
echo $Resultado4;
echo "<br>";
echo $Resultado5;
echo "<br>";

print "Resultados de N y M";

echo "<br>";
echo $DoubleM;
echo "<br>";
echo $DoubleN;
echo "<br>";
echo $Resultado6;
echo "<br>";
echo $Resultado7;
echo "<br>";
echo $Resultado8;
echo "<br>";
echo $Resultado9;
echo "<br>";
echo $Resultado10;
echo "<br>";

print "El doble de cada variable";

echo ("<br>");
echo ($DobleX);
echo ("<br>");
echo ($DobleY);
echo ("<br>");
echo ($DobleM);
echo ("<br>");
echo ($DobleN);
echo ("<br>");

print "La suma de todas las variables";

echo ("<br>");
echo ($SumaTot);
echo ("<br>");
echo ($ProductoTot);
echo ("<br>");
echo ($ProductoTot2);

?>
