<?php
function potencia(float $a, int $b): float
{
    return $a ** $b;
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Ejercicio 8</title>
</head>
<body>
    <form action="" method="post">
        <label for="base"> Base</label>
        <input type="text" name="base">

        <label for="exponente"> Exponente </label>
        <input type="text" name="exponente">

        <button type="submit">Calcular</button>
    </form>
    <?php 
    require "funciones.php";
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $base=$_POST['base'];
        $exp = $_POST['exponente'];
        echo "$base^$exp = ", potencia($base,$exp);
    }
    ?>
</body>
</html>