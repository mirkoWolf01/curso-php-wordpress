<main>
    <h2>Catalogo de productos:</h2>
    <form action="carrito.php" method="post">
        <div id="product_viewer">
            <?php
            display_product(
                "Buñuelo de Frutilla",
                4000,
                "Sabroso y esponjoso buñuelo relleno de sabrosa mermelada de frutilla."
            );

            display_product(
                "Buñuelo de Chocolate",
                5432.57,
                "Sabroso y esponjoso buñuelo relleno de suave chocolate amargo."
            );

            display_product(
                "Chocotorta",
                3500,
                "Clasico argentino, relleno de dulce de leche y queso crema."
            );

            display_with_discount(
                "Torta de Pistacho",
                10700,
                25,
                "Delicioso y crocante pastel de pistacho, ideal para acompañar con un buen cafe o mate."
            );

            display_with_discount(
                "Torta de Crema y Duraznos",
                7000,
                33,
                "Esponjosa, llena de crema y duraznos"
            );
            ?>
        </div>
        <input type="submit" value="finalizar compra" id="submit_button"></input>
    </form>
</main>

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
    $dollar_price = 1450;
    return round($final_price / $dollar_price, 2);
}
?>