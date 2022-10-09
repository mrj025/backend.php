<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>“tp4_backend.php</title>
</head>
<body>
    <p>1. Almacenar en un array los 10 primeros números pares y mostrar en pantalla uno debajo del otro.</p>
    <?php
   $pares = [0, 2, 4, 6, 8, 10];
   print_r($pares) ;

   foreach ($pares as $valor) {
   echo $valor."<br/>";
   }
    ?>

    <p>2. Crear un array e introducir los siguientes valores: Pedro, Ana, 34 y 1, sin asignar el índice de la
matriz. Mostrar el esquema del array con print_r().</p>

<?php
$val_array = ["Pedro", "Ana", 31, 1];
print_r($val_array);
?>

<p>3. Crear un array asociativo e introducir los siguientes valores:
Nombre: Pedro
Apellido: Torres
Dirección: Av. Mayor 3703
Teléfono: 1122334455</p>

<?php
$array_indice = ['Nombre'=> "Pedro", 'Direccion'=> "Av. Mayor 3703", 'Telefono' => 1122334455];
print_r($array_indice);
?>
<p>4. Crear un array introduciendo las ciudades: Madrid, Barcelona, Londres, New York, Los Ángeles y
Chicago, sin asignar índices al array. A continuación, muestra el contenido del array.
Ejemplo: La ciudad con el índice 0 tiene el nombre Madrid.
</p>

<?php
$ciudades = ["Madrid", "Barcelona", "Londres", "New York", "Los Angeles", "Chicago"];
print ("La ciudad con el indice 0 es: $ciudades[0]<br/>" );
print ("La ciudad con el indice 1 es: $ciudades[1]<br/>" );
print ("La ciudad con el indice 2 es: $ciudades[2]<br/>" );
print ("La ciudad con el indice 3 es: $ciudades[3]<br/>" );
print ("La ciudad con el indice 4 es: $ciudades[4]<br/>" );
print ("La ciudad con el indice 5 es: $ciudades[5]<br/>");
?>
<p>5. Repite el ejercicio anterior pero ahora se ha de crear índices, MD para Madrid, BCL para Barcelona,
LD para Londres, NY para New York, LA para Los Ángeles y CCG para Chicago.
Ejemplo: El índice de Madrid es MD.</p>
<?php
$ciudades = ['MD'=> "Madrid", 'BCL'=> "Barcelona", 'LD'=> "Londres", 'NY'=> "New York", 'LA'=> "Los Angeles", 'CCG'=> "Chicago"];
print ("El indice $ciudades[MD] es 0 <br/>");
print ("El indice $ciudades[BCL] es 1 <br/>" );
print ("El indice $ciudades[LD] es 2 <br/>" );
print ("El indice $ciudades[NY] es 3 <br/>" );
print ("El indice $ciudades[LA] es 4 <br/>" );
print ("El indice $ciudades[CCG] es 5 <br/>");
?>

</body>
</html>