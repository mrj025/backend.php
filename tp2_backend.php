<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<h2>1. Crear una variable n y validar que sea un número positivo.</h2>


<?php
$numero = -7;
if ($numero > 0) {
    echo "El numero es positivo";
}
else {
    echo "El numero es negativo";
}
?>
 <br> <hr> 
 <h2>2. Crear una variable n y validar que sea un número mayor a 1 y menor a 10. </h2>

 <?php
$numero = 5;
if ($numero > 0 and $numero < 10) {
    echo "El numero esta entre 0 y 10";
}
else {
    echo "El numero no esta entre 0 y 10";
}
?>
 <br> <hr> 
 <h2>3. Crear una variable n y validar que sea un número mayor a 10 o menor a 2.</h2>
 <?php
$numero = 5;
if ($numero > 10 or $numero < 2) {
    echo "El numero es mayor a 10 o menor a 2";
}
else {
    echo "El numero no es mayor 10 o menor a 2";
}
?>
<br> <hr>

<h2>4. Crear dos variables, una con nombre numero1 y otra con el nombre de numero2. Si numero1 es
mayor a numero2, mostrar por pantalla, la suma y la resta. Si numero2 es mayor a numero1,
mostrar por pantalla la multiplicación, la división entera y el resto de la división. Si numero1 y
numero2 son iguales, mostrar el siguiente mensaje “Los números ingresados son iguales”.</h2>

<?php
$numero1 = 5;
$numero2 = 8;
if ($numero1 > $numero2) {
    echo "El resultado de la suma es: ", $numero1+$numero2;
    echo ("<br>");
    echo "El resultado de la resta es: ", $numero1-$numero2;
    echo ("<br>");
}
elseif ($numero2>$numero1){
    echo "El resultado de la multiplicación es: ", $numero1*$numero2;
    echo ("<br>");
    echo "El resultado de la division es: ", $numero1/$numero2;
    echo ("<br>");
}

elseif ($numero1 == $numero2) {
    echo "Los numeros ingresados son iguales";
}

?>

</body>
</html>