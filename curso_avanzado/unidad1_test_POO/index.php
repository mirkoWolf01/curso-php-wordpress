<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="estilos.css">
</head>

<body>
    <main>
        <h1>Algo importante</h1>
        <?php
        include 'Vehiculos.php';

        $auto = new Auto("Fiat", "SIENA", "gris");
        $auto->Cargar(100);
        $auto->Encender();
        $auto->Andar(10);

        echo "<p>" . $auto->Datos() . "</p>";

        $moto = new Moto("Honda", "1091", "rojo");
        $moto->Cargar(50);
        $moto->Encender();
        $moto->Andar(1);

        $moto->Wheelie();

        echo "<p>" . $moto->Datos() . "</p>";

        ?>
    </main>
</body>

</html>