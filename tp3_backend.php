<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<p>1. Mostrar los números del 1 al 100.</p>
<?php

$num = 1;
while ($num<=100) {
    echo $num;
    echo ",";
    
    $num = $num+1;
}
?>

<p>2. Mostrar los números del 100 al 1.</p>
<?php
$num = 100;
while ($num>=1) {
    echo $num;
    echo ",";
    $num = $num-1;
}
?>
<p>3. Mostrar los números pares del 1 al 100.</p>
<?php
$num = 0;
while ($num<=100) {
    echo $num;
    echo ",";
    $num = $num+2;
}
?>
<p>4. Mostrar los números impares del 1 al 100.</p>
<?php
$num = 0;
for ($num=1; $num<=100; $num++){
    while($num%2 !=0){
        echo $num;
        echo ",";
        $num = $num+1;
    }
}
?>
<p>5. Mostrar la suma de los números de 1 a 20.</p>
<?php

$num=1;
$cont = 0;
$acum = 0;
while($cont <= 19) {
    $cont = $cont + 1;
    $acum = $acum + $cont;
    echo $acum;
    echo ",";
}

?>

<p>6. Mostrar la suma de números pares de 1 a 20.</p>
<?php
$num=1;
$cont = 0;
$acum = 0;
while($cont <= 19) {
    $cont = $cont + 2;
    $acum = $acum + $cont;
    echo $acum;
    echo ",";
}
?>
</body>
</html>


