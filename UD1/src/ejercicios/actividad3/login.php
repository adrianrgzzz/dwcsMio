<?php
require_once 'conexion.php';
session_start();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nic       = trim($_POST['nic']);
    $passPlana = $_POST['password'];

    $stmt = $pdo->prepare("SELECT * FROM usuarios WHERE nic = :nic");
    $stmt->execute([':nic' => $nic]);
    $usuario = $stmt->fetch();

    if ($usuario && password_verify($passPlana, $usuario['password'])) {
        $_SESSION['usuario'] = $usuario['nic'];
        echo "¡Bienvenido, " . htmlspecialchars($usuario['nombre']) . "! Has iniciado sesión con éxito.";
    } else {
        echo "NIC o contraseña incorrectos.";
    }
}
?>

<form method="POST" action="">
    <input type="text" name="nic" placeholder="NIC de usuario" required><br>
    <input type="password" name="password" placeholder="Contraseña" required><br>
    <button type="submit">Entrar</button>
</form>
<p>¿No tienes cuenta? <a href="registro.php">Regístrate aquí</a></p>