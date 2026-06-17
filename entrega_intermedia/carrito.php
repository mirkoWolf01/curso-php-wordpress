<?php
if (! isset($_POST["bought_products"])) {
    $url_destino = " product_selection.php?empty_cart=true&user_id=" . $_GET["user_id"];

    header("Location: " . $url_destino);
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>index</title>
    <link rel="stylesheet" href="styles/carrito_style.css">
</head>

<body>
    <header>
        <h2>Factura a Pagar</h2>
    </header>

    <main>
        <?php
        $conexion = mysqli_connect("localhost", "root", "", "Pasteleria")
            or die("Error en la base de datos:" . mysqli_connect_error());

        $user_id = $_GET["user_id"];
        $user_row = mysqli_query($conexion, "SELECT * FROM `Usuarios` WHERE id_usuario = '$user_id'");
        $current_date = date("Y-m-d");

        $products = $_POST['bought_products'];
        $final_payment = 0;

        foreach ($products as $name => $precio) {
            $product_row = mysqli_query($conexion, "SELECT * FROM Productos WHERE nombre = '$name'");
            $product_id = mysqli_fetch_assoc($product_row)['id_producto'];

            mysqli_query($conexion, "INSERT INTO Compras (id_compra, fk_id_comprador, fk_id_producto_comprado, fecha_de_compra) 
            VALUES (NULL, '$user_id', '$product_id', '$current_date')");

            $final_payment += $precio;
            echo "Producto: ", $name, " - Precio: $", $precio, "<br>";
        }
        echo "<hr class=\"divisor\">";
        echo "<p id=\"final_payment\">PRECIO FINAL: $", $final_payment, "</p>";
        ?>
    </main>

    <form action="product_selection.php?user_id=<?php echo $user_id ?>" method="post">
        <input type="submit" value="COMPLETAR PAGO">
    </form>
</body>

</html>