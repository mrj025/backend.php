<?php

$usuario = $_POST ["user"];
$contrasenia =  $_POST ["pass"];

$ckuser = "admin";
$ckpass = "123";

if ($usuario == $ckuser and $contrasenia == $ckpass) {
     echo "Correcto";
}

else {
    echo "Incorrecto ";
    }

?>