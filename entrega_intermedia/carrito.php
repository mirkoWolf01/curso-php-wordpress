    <?php
    if ($_POST["bought_products"] == null) {
        $url_destino = " index.php?empty_cart=true";

        header("Location: " . $url_destino);
        exit();
    }
    ?>

    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <title>index</title>
        <link rel="stylesheet" href="carrito_style.css">
    </head>

    <body>
        <header>
            <h2>Factura a Pagar</h2>
        </header>

        <main>
            <?php
            $products = $_POST['bought_products'];
            $final_payment = 0;

            foreach ($products as $name => $precio) {
                $final_payment += $precio;
                echo "Producto: ", $name, " - Precio: $", $precio, "<br>";
            }
            echo "<hr class=\"divisor\">";
            echo "<p id=\"final_payment\">PRECIO FINAL: $", $final_payment, "</p>";
            ?>
        </main>

        <form action="index.php">
            <input type="submit" value="COMPLETAR PAGO">
        </form>
    </body>

    </html>