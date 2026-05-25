<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>index</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <?php
    include "funciones.php"
    ?>
    <header>
        <h1>Pagina epica sobre pasteles y buñuelos</h1>
    </header>
    <main>
        <h2>Catalogo de productos:</h2>
        <div id="product_viewer">
            <?php
            $b_frutilla = new Product(
                "Buñuelo de Frutilla",
                "Sabroso y esponjoso buñuelo relleno de sabrosa mermelada de frutilla.",
                4000
            );
            $b_frutilla->display();

            $b_choco = new Product(
                "Buñuelo de Chocolate",
                "Sabroso y esponjoso buñuelo relleno de suave chocolate amargo.",
                5432.57
            );
            $b_choco->display();

            $p_ricota = new Product(
                "Pastel de Pistacho",
                "Delicioso y crocante pastel de pistacho, ideal para acompañar con un buen cafe o mate.",
                10700.9
            );
            $p_ricota->display_with_discount(20)
            ?>
        </div>

    </main>

    <footer>

    </footer>

</body>

</html>