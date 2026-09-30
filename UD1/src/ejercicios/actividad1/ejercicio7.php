<?php
function esAnagrama(string $p1, string $p2): bool {
    $p1 = strtolower(trim($p1));
    $p2 = strtolower(trim($p2));

    if (strlen($p1) !== strlen($p2) || $p1 === $p2) {
        return false;
    }

    foreach (str_split($p1) as $letra) {
        $i = strpos($p2, $letra);
        if ($i === false) {
            return false;
        }
        $p2 = substr_replace($p2, "", $i, 1);
    }

    return true;
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Ejercicio 7</title>
</head>
<body>
    <form action="" method="POST">
        <label>Palabra</label>
        <input type="text" name="palabra1" required><br>
        <label>Anagrama?</label>
        <input type="text" name="palabra2" required><br>
        <button type="submit">Comprobar</button>
    </form>

    <div>
        <?php
        if (isset($_POST['palabra1'], $_POST['palabra2'])) {
            echo esAnagrama($_POST['palabra1'], $_POST['palabra2']) ? "Es anagrama" : "No es anagrama";
        }
        ?>
    </div>
</body>
</html>