<?php
function comprobarNumero(int $numero){
    if($numero === 0){
        return "es cero";
    }
    if ($numero < 0){
        return "$numero es menor que 0";
    }
    return "$numero es mayor que 0";
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Ejercicio 6: Positivo, Negativo o Cero</title>
</head>
<body>
    <form action="" method="post">
        <label for="numero">Introduzca un numero</label>
        <input type="text" name="num">
        <button type="submit">Comprobar</button>
    </form>
    
    <div class="respuesta">
        <?php
            $numero = $_POST["num"] ?? "";
            if (is_numeric($numero)) {
                echo comprobarNumero($numero);
            }
        ?>
    </div>
</body>
</html>