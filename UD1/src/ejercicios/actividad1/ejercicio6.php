<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Ejercicio 6: Positivo, Negativo o Cero</title>
</head>
<body>

    <h2>Comprobar número</h2>

    <form method="POST" action="">
        <label for="numero">Introduce un número:</label>
        <input type="number" step="any" id="numero" name="numero" required>
        <button type="submit" name="enviar">Enviar</button>
    </form>

    <br>

    <?php
    if ($_SERVER["REQUEST_METHOD"] === "POST" && isset($_POST['numero'])) {
        $numero = (float) $_POST['numero'];

        if ($numero > 0) {
            echo "El número <strong>$numero</strong> es <strong>positivo</strong>.";
        } elseif ($numero < 0) {
            echo "El número <strong>$numero</strong> es <strong>negativo</strong>.";
        } else {
            echo "El número introducido es <strong>cero</strong>.";
        }
    }
    ?>

</body>
</html>