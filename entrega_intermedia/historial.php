<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Historial</title>
    <link rel="stylesheet" href="styles/historial_style.css">
</head>

<body>
    <header>
        <h1>Historial de Compras</h1>
    </header>

    <main>
        <?php
        $conexion = mysqli_connect("localhost", "root", "", "Pasteleria")
            or die("Error en la base de datos:" . mysqli_connect_error());

        $user_id = $_GET["user_id"];
        $fechas_compras = mysqli_query(
            $conexion,
            "SELECT fecha_de_compra FROM Compras WHERE fk_id_comprador = '$user_id' GROUP BY fecha_de_compra  ORDER BY fecha_de_compra DESC"
        );

        while ($fetched_date = mysqli_fetch_assoc($fechas_compras)) {
            $fecha_actual = $fetched_date["fecha_de_compra"];

            echo "<div class=factura>";
            echo "<h2>$fecha_actual</h2>";

            $compras_en_fecha = mysqli_query(
                $conexion,
                "SELECT 
                Productos.nombre AS nombre_producto, 
                Productos.precio AS precio_producto,
                Productos.descuento AS descuento_producto
                FROM Compras
                INNER JOIN Productos 
                    ON Compras.fk_id_producto_comprado = Productos.id_producto
                WHERE fk_id_comprador = '$user_id' and fecha_de_compra = '$fecha_actual'
                "
            );

            $precio_total = 0;
            while ($compra = mysqli_fetch_assoc($compras_en_fecha)) {
                $descuento = 1 - $compra["descuento_producto"] / 100;
                $precio_total += $compra["precio_producto"] * $descuento;
                echo $compra["nombre_producto"];
                echo "<br>";
            }
            echo "<hr class=\"divisor\">";
            echo "Total pagado: $$precio_total";
            echo "</div>";
        }
        ?>
    </main>
</body>

</html>