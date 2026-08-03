<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>index</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <main>

        <h3>Sign Up</h3>

        <form action="form_validator.php" method="post">
            <label>Nombre :</label>
            <input type="text" name="nombre" required>

            <label>Apellido :</label>
            <input type="text" name="apellido" required>

            <label>Telefono :</label>
            <input type="tel" name="telefono" required>

            <label>Email :</label>
            <input type="email" name="mail" required>

            <label>Contenido :</label>
            <input type="text" name="contenido" minlength="10" required>

            <input type="submit" value="Enviar Form" id="submit_button">
        </form>


    </main>
</body>

</html>