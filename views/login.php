<?php session_start(); ?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Login - Xiaomi Store</title>
    <link rel="stylesheet" href="../assets/css/styles.css">
</head>
<body>
<div class="form-container">
    <h1 class="form-title">¡Bienvenido de nuevo a Xiaomi Store!</h1>

    <?php if (isset($_SESSION["success"])): ?>
        <div class="success"><?php echo $_SESSION["success"]; unset($_SESSION["success"]); ?></div>
    <?php endif; ?>

    <?php if (isset($_SESSION["error"])): ?>
        <div class="error"><?php echo $_SESSION["error"]; unset($_SESSION["error"]); ?></div>
    <?php endif; ?>

    <form id="loginForm" action="../controllers/login.php" method="POST">
        <input type="email" name="email" required placeholder="Correo electrónico">

        <div class="password-container">
            <input type="password" name="password" id="login_password" required placeholder="Contraseña">
            <button type="button" class="toggle-password" data-target="login_password">👁</button>
        </div>

        <button type="submit">Iniciar sesión</button>
    </form>

    <p>¿No tienes cuenta? <a href="register.php">Regístrate aquí</a></p>
</div>

<footer>
    <p>Todos los derechos reservados. Hecho por Darwin Armijos</p>
</footer>

<!-- Enlaza el script de validación -->
<script src="../assets/js/validation.js"></script>
</body>
</html>






