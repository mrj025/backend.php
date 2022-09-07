<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
    <h1>Trabajo practico N° 1</h1>

   <?php
  print "<p> 1. 'Imprima por pantalla: 'Hola mundo'</p>\n";
  print "<p> Hola Mundo\n";
   ?>
   <br> <hr>

   <?php
  print "<p> 2. Cargue en una variable la cadena de caracteres “Hola mundo” y luego la imprima por pantalla.</p>\n";
   $mensaje = "HOLA MUNDO";
   echo $mensaje; 
   ?>
   <br> <hr>

   <?php
  print "<p>3. Crear dos variables enteras y mostrar por pantalla, la suma, la resta, 
  la multiplicación, la división   entera y el resto de la división entera. </p>\n";

   $num1 = 18;
   $num2 = 4;
   print "<p> Suma: $num1 + $num2: ";
   echo $num1+$num2;
   print "<p> Resta: $num1 - $num2: ";
   echo $num1-$num2;
   print "<p> Multiplicación: $num1 * $num2: ";
   echo $num1*$num2;
   print "<p> Division: $num1 / $num2: ";
   echo $num1/$num2;
   ?>
   <br> <hr>

   <?php
  print "<p> 4. Realizar la transformación de grados Celsius a Fahrenheit, para el valor 20°C
   y luego lo imprima por pantalla.</p>\n";
   $grados_cel = 20;
   $grados_fa = 32;
   print "<p> Resultado: ($grados_cel * 9/5) + $grados_fa : ";
   echo ($grados_cel*9/5)+ $grados_fa; 
   ?>
   <br> <hr>

   <?php
  print "<p>5. Implementar algoritmos que permitan:</p>\n
 <p> a) Calcular el perímetro y el área de un rectángulo, dado que su base es 18cm y su altura 12cm.</p>\n
 <p> b) Calcular el perímetro y el área de un círculo dado que su radio es de 30cm</p>\n";
 $base = 18;
 $altura = 12;
 $radio = 30;
 print "<p> a) El Perimetro del rectangulo es, 2*($base * $altura): ";
   echo 2* ($base*$altura);
 print "<p> a) El Area del rectangulo es, ($base * $altura): ";
   echo ($base*$altura);
print "<p> b) El Perimetro del circulo es, 2 x Pi * $radio): ";
   echo 2*3.14* $radio;  
print "<p> b) El Area del circulo es, (PI* $radio^2): ";
   echo 3.14*($radio*$radio);

   ?>
   <br> 
</body>
</html>