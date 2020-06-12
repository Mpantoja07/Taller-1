<?php 

/**.Hacer un programa en PHP que permita mostrar en pantalla la suma, resta, multiplicación, de dos números enteros
almacenados en 2 variables diferentes. Conserve el siguiente formato de impresión:
La suma de () + () = ()
La resta de ()-()= ()
La multiplicación de ()x() =()
La división de ()/()=() */

$primerNumero = 132112;
$segundoNumero = 123123;
$suma = $primerNumero+$segundoNumero;
$resta = $primerNumero-$segundoNumero;
$multiplicacion = $primerNumero*$segundoNumero;
$division = $primerNumero/$segundoNumero;

echo("La suma de (".$primerNumero.") + (".$segundoNumero. ") = (".$suma.")<br>");
echo("La resta de (".$primerNumero.") - (".$segundoNumero. ") = (".$resta.")<br>");
echo("La multiplicación de (".$primerNumero.") * (".$segundoNumero. ") = (".$multiplicacion.")<br>");
echo("La división de (".$primerNumero.") / (".$segundoNumero. ") = (".$division.")<br><br>");

/**El gimnasio Bodytech, lo contrata para desarrollar una aplicación web que permita a sus usuarios calcular el índice de
masa corporal, basado en la formula 𝐈𝐌𝐂 =
𝑷𝒆𝒔𝒐
𝑨𝒍𝒕𝒖𝒓𝒂𝒙𝑨𝒍𝒕𝒖𝒓𝒂
La clasificación del IMC es la siguiente:
• IMC <= 18,4 (Insuficiencia de peso)
• 18,5<=IMC<=24,9 (Peso normal)
• 25<=IMC<=29,9 (Sobrepeso)
• 30<=IMC<=34,9 (Obesidad 1)
• 35<=IMC<=39,9 (Obesidad 2)
• IMC>=40 (Obesidad 3)
Ejecute su programa para un usuario cuyo peso es de 85KG y cuya estatura es de
1.78m y muestre en pantalla el resultado obtenido */

$peso = 85;
$altura = 1.70;
$imc = $peso/($altura*$altura);

if ( $imc <= 18.4){
  echo ("Usted tiene Insuficiencia de peso");
} else if(18.5<= $imc && $imc <= 24.9){
  echo("Usted tiene Peso normal");
} else if(25 <= $imc && $imc <= 29.9){
  echo("Usted tiene Sobre peso");
} else if(30 <= $imc && $imc <= 34.9){
  eho("Usted tiene Obesidad 1");
} else if (35 <= $imc && $imc <= 39.9){
  echo("Usted tiene Obesidad 2");
} else if ($imc >= 40){
  echo("Usted tiene Obesidad 3");
}
echo("<br>");
echo("<br>");

/**Hacer un programa en PHP para la tienda Spring Step que tiene una promoción de descuento para vender al mayor, esta
dependerá del número de zapatos que se compren. Si son 3 pares se les dará un 10% de descuento sobre el total de la
compra; si el número de zapatos es mayor 3 pares pero menor o igual de 5 pares, se le otorga un 20% de descuento; y si son
más 5 pares de zapatos se otorgará un 40% de descuento. Defina la cantidad de variables que necesite, el precio de cada
pare de zapatos =$150.000 y establezca el valor total de una compra de 5 pares de zapatos.
 */

$cantidadZapatos = 5;
$costoneto = 150000;
$totalCompra = ($cantidadZapatos * $costoneto);

if ($cantidadZapatos == 3) {
  $valordescuento = $totalCompra * 0.10;
    
} else if ($cantidadZapatos > 3 && $cantidadZapatos <= 5){
  $valordescuento = $totalCompra * 0.20;
    
} else if ($cantidadZapatos > 5) {
  $valordescuento = $totalCompra * 0.40;
}

$valorPagar = ($cantidadZapatos * $costoneto) - $valordescuento;

echo( "Cantidad Vendida:". $cantidadZapatos);
echo("<br>");
echo("Coste Neto:" .$totalCompra);
echo("<br>");
echo("Valor del Descuento:". $valordescuento); 
echo("<br>");
echo(" Valor de un Pagar es:" .$valorPagar);
echo("<br>");
echo("<br>");


/**Hacer un programa en PHP para ayudar a un trabajador de Postobón a saber cuál será su sueldo semanal, se sabe que si
trabaja 40 horas o menos, se le pagará $20000 por hora, pero si trabaja más de 40 horas entonces las horas extras se le
pagarán a $25 por hora. Ejecute su código para calcular el salario con 36 horas trabajadas.
 */
$valorHora = 20000;
$valorHoraExtra= 25000;
$horasTrabajadas = 36;

if($horasTrabajadas <= 40){
  echo("El salario del trabajador es: ".($valorHora*$horasTrabajadas));
} else if($horasTrabajadas > 40){
  echo("El salario del trabajador es; ".($valorHoraExtra*$horasTrabajadas));
}
echo("<br><br>");

/**5. Después de realizar una consulta en la base de datos DE LA JUGOSA SAS se tienen almacenados los valores
 *  de dicha consulta en un arreglo denominado salpicón, el cual presenta la siguiente configuración:
[dulce1]=>”Banano”
[dulce2]=>”Manzana”
[dulce3]=>”Durazno”
[acido1]=>”Piña”
[acido2]=>”Naranja”
[acido3]=>”Lulo”
Defina el arreglo salpicón e imprima utilizando un ciclo foreach el contenido deeste. */
 
$salpicon = array("dulce1"=>"Banano", "dulce2"=>"Manzana","dulce3"=>"Durazno","acido1"=>"Piña","acido2"=>"Naranja","acido3"=>"Lulo");

foreach($salpicon as $clave=>$ficha){

  echo($clave);
  echo("<br>");
  print_r($ficha);
  echo("<br>");
 }
?>