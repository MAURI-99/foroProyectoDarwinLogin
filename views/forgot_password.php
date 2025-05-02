<?php
session_start();
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Recuperar Contraseña - Xiaomi Store</title>
    <link rel="stylesheet" href="../assets/css/styles.css?v=1.0.1">
</head>
<body>
    <div class="container">
        <h2>Recuperar Contraseña</h2>

        <form id="forgotForm" action="../controllers/forgot_password.php" method="POST">
            <input name="email" type="email" placeholder="Ingresa tu correo" required>
            <button type="submit">Enviar Instrucciones</button>
        </form>

        <div style="text-align: center; margin-top: 1rem;">
            <a href="login.php">Volver a Iniciar Sesión</a>
        </div>
    </div>

    <script src="../assets/js/validation.js?v=1.0.1"></script>
</body>
</html>

