<?php
require_once 'conexion.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nombre    = trim($_POST['nombre']);
    $apellido1 = trim($_POST['apellido1']);
    $apellido2 = !empty($_POST['apellido2']) ? trim($_POST['apellido2']) : null;
    $nic       = trim($_POST['nic']);
    $email     = trim($_POST['email']);
    $passPlana = $_POST['password'];

    $passHash  = password_hash($passPlana, PASSWORD_DEFAULT);

    try {
        $sql = "INSERT INTO usuarios (nombre, apellido1, apellido2, nic, email, password) 
                VALUES (:nombre, :apellido1, :apellido2, :nic, :email, :password)";
        
        $stmt = $pdo->prepare($sql);
        $stmt->execute([
            ':nombre'    => $nombre,
            ':apellido1' => $apellido1,
            ':apellido2' => $apellido2,
            ':nic'       => $nic,
            ':email'     => $email,
            ':password'  => $passHash
        ]);

        echo "Usuario registrado correctamente. <a href='login.php'>Iniciar sesión</a>";
    } catch (PDOException $e) {
        if ($e->getCode() == 23000) {
            echo "Error: El NIC o el correo ya están registrados.";
        } else {
            echo "Error: " . $e->getMessage();
        }
    }
}
?>

<form method="POST" action="">
    <input type="text" name="nombre" maxlength="60" placeholder="Nombre" required><br>
    <input type="text" name="apellido1" maxlength="100" placeholder="Primer Apellido" required><br>
    <input type="text" name="apellido2" maxlength="100" placeholder="Segundo Apellido"><br>
    <input type="text" name="nic" maxlength="30" placeholder="NIC de usuario" required><br>
    <input type="email" name="email" maxlength="320" placeholder="Correo electrónico" required><br>
    <input type="password" name="password" placeholder="Contraseña" required><br>
    <button type="submit">Registrarse</button>
</form>
<p>¿Ya tienes cuenta? <a href="login.php">Inicia sesión aquí</a></p>