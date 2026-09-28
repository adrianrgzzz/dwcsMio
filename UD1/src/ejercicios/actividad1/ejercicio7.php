<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Ejercicio 7: Anagramas</title>
</head>
<body>

    <h2>Comprobador de Anagramas</h2>

    <form method="POST" action="">
        <label for="palabra1">Primera palabra:</label><br>
        <input type="text" id="palabra1" name="palabra1" required><br><br>

        <label for="palabra2">Segunda palabra:</label><br>
        <input type="text" id="palabra2" name="palabra2" required><br><br>

        <button type="submit" name="comprobar">Comprobar</button>
    </form>

    <br>

    <?php
    if ($_SERVER["REQUEST_METHOD"] === "POST" && isset($_POST['palabra1'], $_POST['palabra2'])) {
        $p1 = trim($_POST['palabra1']);
        $p2 = trim($_POST['palabra2']);

        $limpia1 = strtolower(str_replace(' ', '', $p1));
        $limpia2 = strtolower(str_replace(' ', '', $p2));

        if (strlen($limpia1) !== strlen($limpia2)) {
            $esAnagrama = false;
        } else {
            $arr1 = str_split($limpia1);
            $arr2 = str_split($limpia2);

            sort($arr1);
            sort($arr2);

            $esAnagrama = ($arr1 === $arr2);
        }

        if ($esAnagrama) {
            echo "<p style='color: green;'><strong>\"$p1\"</strong> y <strong>\"$p2\"</strong> <strong>SÍ</strong> son anagramas.</p>";
        } else {
            echo "<p style='color: red;'><strong>\"$p1\"</strong> y <strong>\"$p2\"</strong> <strong>NO</strong> son anagramas.</p>";
        }
    }
    ?>

</body>
</html>