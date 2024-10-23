<?php
if((!empty($_POST['nombre']) && !empty($_POST['apellido']) &&!empty($_POST['edad'])))
{
    $nombre = $_POST['nombre'];
    $apellido = $_POST['apellido'];
    $edad = $_POST['edad'];
    echo "Tu nombre es $nombre $apellido y tu edad es $edad";
}
else
{
    echo 'Tus datos no fueron encontrados';
}