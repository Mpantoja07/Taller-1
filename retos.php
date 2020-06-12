<?php 
/*RETO1 NIVEL COQUITO: Almacena en un array indexado los 10 primeros
 numeros pares e imprime cada uno de estos en una linea diferente*/

$numerosPares= array(2,4,6,8,10,12,14,16,18,20);
$numerosImpares= array(1,3,5,7,9,11,13,15,17,19,21);

print_r($numerosPares);
echo("<br>");
print_r($numerosImpares);
echo("<br>");
echo("<br>");


/**RETO2 NIVEL SAYAYIN: Definir un arreglo indexado que contenga los
 primeros 100 numeros naturales y dentro de un foreach calcular la 
 suma de estos números */

 $numerosNaturales = array();
 for($i = 1; $i  < 101; $i ++){
    $numerosNaturales[ ] = $i;
 }
 
 $suma = 0;
 foreach($numerosNaturales as $contador){
    $suma += $contador;
 }
 
 echo ($suma);
 echo("<br>");
 echo("<br>");

/**RETO3 NIVEL ESPARTANO: El seleccionador nacional de la seleccipon 
 Colombia carlos quieroz necesita de sus servicios para almacenar la
  información de los mejores jugadores colombianos  Cree   un arreglo 
  multidimensional donde guarde nombre, posición, pais donde 
  juega, edad y estatura imprima usando un ciclo foreach anidado*/

 $jugadoresColmbianos=array(
    "jugador1"=>array("nombre"=>"Pingui","posición"=>"Poste", "pais"=>"Nueva zelanda", "edad"=>27),
    "jugador2"=>array("nombre"=>"Juan","posición"=>"Delantero", "pais"=>"Choco", "edad"=>19),
    "jugador3"=>array("nombre"=>"Sabier","posición"=>"defensa", "pais"=>"Alemania", "edad"=>22),
    "jugador4"=>array("nombre"=>"Pambele","posición"=>"Central", "pais"=>"", "edad"=>25),
    "jugador5"=>array("nombre"=>"Daniel","posición"=>"D efensa", "pais"=>"Argentina", "edad"=>23),
    "jugador6"=>array("nombre"=>"Andres","posición"=>"Delantero", "pais"=>"España", "edad"=>21),
    "jugador7"=>array("nombre"=>"Memo","posición"=>"central", "pais"=>"Peru", "edad"=>27),
 );

 foreach($jugadoresColmbianos as $clave=>$ficha){

    echo($clave);
    echo("<br>");
    print_r($ficha);
    echo("<br>");

 }

?>