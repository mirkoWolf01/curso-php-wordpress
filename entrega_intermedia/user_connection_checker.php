<?php
if (isset($_POST["username"]) and isset($_POST["mail"]) and $_POST["username"] != "" and $_POST["mail"] != "") {
    $url_destino = " product_selection.php?";

    $conexion = mysqli_connect("localhost", "root", "", "Pasteleria")
        or die("Error en la base de datos:" . mysqli_connect_error());

    $mail = $_POST["mail"];
    $sql_row = mysqli_query($conexion, "SELECT * FROM `Usuarios` WHERE mail = '$mail' LIMIT 1");

    if (mysqli_num_rows($sql_row) > 0) {
        $user = mysqli_fetch_assoc($sql_row);
        header("Location: " . $url_destino . "user_id=" . $user["id_usuario"]);
    } else {
        $received_username = $_POST["username"];
        $received_mail = $_POST["mail"];

        mysqli_query($conexion, "INSERT INTO Usuarios (id_usuario, nombre, mail) 
            VALUES (NULL, '$received_username', '$received_mail')");

        $user_id = mysqli_insert_id($conexion);
        header("Location: $url_destino" . "user_id=$user_id");
    }
} else {
    error_log("Should write a username and a mail");
    header("Location: index.php?empty_field=true");
}
exit();
