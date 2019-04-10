<?php
$nombreCompleto = $_POST['name'];
$cedula = $_POST['identification'];
$correo = $_POST['email'];
$telefono = $_POST['tel'];
$depa = $_POST['Depa'];
$mun = $_POST['Mun'];

mail('ruthstefania28@gmail.com', 'Nuevo Registro Prevenir Express' , $nombreCompleto)

?>