//1 CREAR UNA VARIABLE QUE GUARDE UN NUMERO Y VERIFICAR SI ES NEGATIVO , POSITIVO, O CERO.
//2 GUARDAR EN UNA VARIABLE LOS MESES Y HACER EL SWITCH , MOSTRAR EN QUE EPOCA DE EL AÑO ESTA.
//3 SUBIR TODO A GITHUB

<?php
   $numero = 10;
   if($numero > 0){
      echo 'El número es positivo.';
   }else if($numero < 0){
      echo 'El número es negativo.';
   }else{
      echo 'El número es cero.';
   }
?>

<?php

$meses = ["enero", "febrero", "marzo", "abril", "mayo", "junio", "julio", "agosto", "septiembre", "octubre", "noviembre", "diciembre"];
$mes = date("F");
$estacion = "";

switch (array_search($mes, $meses)) {
  case 11:
  case 0:
  case 1:
    $estacion = "invierno";
    break;
  case 2:
  case 3:
  case 4:
    $estacion = "primavera";
    break;
  case 5:
  case 6:
  case 7:
    $estacion = "verano";
    break;
  case 8:
  case 9:
  case 10:
    $estacion = "otoño";
    break;
}

echo "El mes actual es " . $mes . " y pertenece a la estación " . $estacion . ".";

?>