<?php
ini_set('display_errors', 1);
error_reporting(E_ALL);

if (!(is_valid_field("nombre")
    and is_valid_field("apellido")
    and is_valid_field("telefono")
    and is_valid_field("mail")
    and is_valid_field("contenido"))) {

    die("Not all fields are valid");
}

$conexion = mysqli_connect("localhost", "root", "", "Contactos")
    or die("Error en la base de datos:" . mysqli_connect_error());

$nombre = mysqli_real_escape_string($conexion, $_POST["nombre"]);
$apellido = mysqli_real_escape_string($conexion, $_POST["apellido"]);
$tel = (int) $_POST["telefono"];
$mail = mysqli_real_escape_string($conexion, $_POST["mail"]);
$contenido = mysqli_real_escape_string($conexion, $_POST["contenido"]);

$query = "INSERT INTO `Contactos` 
(`Nombre`, `Apellido`, `Telefono`, `Email`, `Contenido`) 
VALUES ('$nombre', '$apellido', '$tel', '$mail', '$contenido');";

mysqli_query($conexion, $query)
    or die("Error al guardar en la base de datos: " . mysqli_error($conexion));

header("Location: success_sign.php");
exit();

function is_valid_field(string $field_name)
{
    return isset($_POST[$field_name]) and $_POST[$field_name] != "";
}
