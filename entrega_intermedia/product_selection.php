<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>index</title>
    <link rel="stylesheet" href="styles/product_selection_style.css">
</head>

<body>
    <header>
        <h1>Bienvenido/a nuevamente
            <?php
            $conexion = mysqli_connect("localhost", "root", "", "Pasteleria")
                or die("Error en la base de datos:" . mysqli_connect_error());

            $id = $_GET["user_id"];
            $user_row = mysqli_query($conexion, "SELECT * FROM Usuarios WHERE id_usuario = '$id'");

            echo mysqli_fetch_assoc($user_row)['nombre'];
            ?>
        </h1>
        <form action="historial.php?user_id=<?php echo $_GET["user_id"] ?>" method="post">
            <input type="submit" value="Ver historial de compras" id="submit_history"></input>
        </form>
    </header>

    <main>
        <h2>Catalogo de productos:</h2>
        <form action="carrito.php?user_id=<?php echo $_GET["user_id"] ?>" method="post">
            <div id="product_viewer">
                <?php
                $productos = mysqli_query($conexion, "SELECT * FROM Productos ORDER BY Productos.nombre ASC");

                while ($producto = mysqli_fetch_assoc($productos)) {
                    $name = $producto['nombre'];
                    $description = $producto['descripcion'];
                    $price = $producto['precio'];
                    $discount = $producto['descuento'];

                    if ($discount == 0) {
                        display_product($name, $price, $description);
                    } else {
                        display_with_discount($name, $price, $discount, $description);
                    }
                }
                ?>
            </div>
            <input type="submit" value="finalizar compra" id="submit_button"></input>
        </form>
    </main>

    <footer>
        <?php
        if (isset($_GET["empty_cart"]) and $_GET["empty_cart"] == true) {
            echo "<h3> SELECCIONE PRODUCTO PARA COMPRAR</h3>";
        }
        ?>
    </footer>

</body>

</html>


<?php
function display_product(string $name, float $price, string $description)
{
    $international_price = _international_price($price);

    echo "<div class=\"product\">";
    echo "<h2>$name</h2>";
    echo "<p>$description</p>";
    echo "<p class=\"price\">Precio: $$price pesos / $$international_price dollars</p>";

    echo "<div class=\"buy_container\">";

    echo "COMPRAR";
    echo "<input type=\"checkbox\" name=\"bought_products[$name]\" value=$price></input>";

    echo "</div>";
    echo "</div>";
}

function display_with_discount(string $name, float $price, float $discount, string $description)
{
    $final_price = $price * (1 - $discount / 100);
    $international_price = _international_price($final_price);

    echo "<div class=\"product promotion\">";
    echo "<h2>$name</h2>";
    echo "<p>$description</p>";

    echo "<p class=\"price_before_discount\">Antes: $price<p>";
    echo "<p class=\"price\">Ahora: $$final_price pesos / $$international_price dollars</p>";

    echo "<p class=\"discount_label\">$discount% de descuento</p>";

    echo "<div class=\"buy_container\">";

    echo "COMPRAR";
    echo "<input type=\"checkbox\" name=\"bought_products[$name]\" value=$final_price></input>";

    echo "</div>";

    echo "</div>";
}

function _international_price(float $final_price): float
{
    $dollar_price = 1500;
    return round($final_price / $dollar_price, 2);
}
?>