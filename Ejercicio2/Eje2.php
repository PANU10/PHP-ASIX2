<!-- Apartado A -->

<?php
$a= '1' ;
$b= '1' ;
$c= '1' ;
$d= '1' ;
$e= '1' ;

echo "<p><b>A) El resultado de la función pasando como parámetros $a,$b,$c,$d,$e és:</p></b>";

suma($a, $b, $c, $d, $e);
function suma($a, $b, $c, $d, $e) {
  $resultado = $a + $b + $c + $d + $e;
  echo $resultado;
}

?>

<!-- Apartado B -->

<?php
$a= 2 ;
$b= 5 ;
$c= 1 ;
$d= 8 ;
$e= 10 ;

$tmp = ejeB($a, $b, $c, $d, $e);
function ejeB($a, $b, $c, $d, $e) {
    $resultado = $a + $b + $c + $d + $e;
    return $resultado;
}

echo "<p><b>B) \$tmp El resultado de la función pasando como parámetros $a,$b,$c,$d,$e és:</b></p>";
echo "<p>\$tmp: $tmp</p>";

?>

<!-- Apartado C -->

<?php
$altura = 10;
$radio = 5;
echo "<p><b>C) Radio = $radio / Altura = $altura: </b></p>";

function calcularVolumenCilindro($altura, $radio) {

    $volumen = round(pi() * $radio * $radio * $altura, 3);
    return $volumen;

}

$resultado = calcularVolumenCilindro($altura, $radio);
echo "<p>\$volumen: $resultado</p>";

?>


<!-- Apartado D -->

<?php

const Debug = 1;

function mensajeError($mensaje) {
   
    if (Debug == 1) {
        echo"<p style='border: ridge #ff0000 2px;'> <b>Debug</b>: <br>$mensaje</br></p>";
    }
}
  echo "<p><b> D) Debug: </b></p>";
  mensajeError("Mensaje de prueba de depuración.");

?>