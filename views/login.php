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

    <!-- Mensajes flotantes -->
    <?php if (isset($_SESSION["success"])): ?>
        <div class="modal" id="modal-success">
            <div class="modal-content">
                <p><?php echo $_SESSION["success"]; unset($_SESSION["success"]); ?></p>
                <button onclick="document.getElementById('modal-success').style.display='none'">Aceptar</button>
            </div>
        </div>
    <?php endif; ?>

    <?php if (isset($_SESSION["error"])): ?>
        <div class="modal" id="modal-error">
            <div class="modal-content">
                <p><?php echo $_SESSION["error"]; unset($_SESSION["error"]); ?></p>
                <a href="recover_password.php" style="color: blue; display:block; margin-top:10px;">¿Olvidaste tu contraseña? Recupérala aquí.</a>
                <button onclick="document.getElementById('modal-error').style.display='none'">Cerrar</button>
            </div>
        </div>
    <?php endif; ?>

    <!-- Formulario -->
    <form action="../controllers/login.php" method="POST">
        <input type="email" name="email" required placeholder="Correo electrónico" />
        <div class="password-container">
            <input type="password" name="password" id="password" required placeholder="Contraseña" />
            <button type="button" class="toggle-password" data-target="password">👁</button>
        </div>
        <button type="submit">Iniciar sesión</button>
    </form>

    <p>¿No tienes cuenta? <a href="register.php">Regístrate aquí</a></p>
</div>

<footer>
    <p>Todos los derechos reservados. Hecho por Darwin Armijos</p>
</footer>

<!-- Pequeño CSS para modal -->
<style>
.modal {
    position: fixed;
    top:0; left:0; width:100%; height:100%;
    background: rgba(0,0,0,0.5);
    display: flex; align-items: center; justify-content: center;
}
.modal-content {
    background: white; padding: 20px; border-radius: 10px; text-align: center;
}
</style>

<!-- Script -->
<script src="../assets/js/validation.js"></script>
</body>
</html>






