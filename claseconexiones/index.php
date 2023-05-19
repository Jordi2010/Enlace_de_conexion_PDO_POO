<!--Enlace de conexión con PDO.
    Asignatura: Programación orientada a objetos I.
    Estudiante: Jordi Haziel Amaya Martínez.-->

<?php
include_once 'conexion.php';
$conectar=new ConexionPDO($host, $db, $user, $password);
$conectar->conectar();
echo "<br><br>";

$conectar->desconectar();
?>