<?php session_start(); ?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Registro - Xiaomi Store</title>
    <link rel="stylesheet" href="../assets/css/styles.css?v=1.0.1">

    <!-- SweetAlert CDN -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</head>
<body>
<div class="form-container">
    <h1 class="form-title text-orange-600">¡Bienvenido a Xiaomi Store! Regístrate y descubre lo mejor en tecnología</h1>

    <?php if (isset($_SESSION["error"])): ?>
        <div class="error"><?php echo $_SESSION["error"]; unset($_SESSION["error"]); ?></div>
    <?php endif; ?>

    <form id="registerForm" action="../controllers/register.php" method="POST">
        <input type="text" name="name" required placeholder="Nombre completo">
        <input type="email" name="email" required placeholder="Correo electrónico">
        <input type="text" name="phone" required placeholder="Teléfono">
        <input type="text" name="address" required placeholder="Dirección">

        <div class="password-container">
            <input type="password" name="password" id="password" required placeholder="Contraseña">
            <button type="button" class="toggle-password" data-target="password">👁</button>
        </div>

        <div class="password-container">
            <input type="password" name="confirm_password" id="confirm_password" required placeholder="Confirmar contraseña">
            <button type="button" class="toggle-password" data-target="confirm_password">👁</button>
        </div>

        <p id="mensaje-error" style="color:red; font-weight:bold;"></p>
        <button type="submit">Registrarse</button>
    </form>

    <p class="form-text">¿Ya tienes una cuenta? <a href="login.php">Inicia sesión aquí</a></p>
</div>

<footer>
    <p>Todos los derechos reservados. Hecho por Darwin Armijos</p>
</footer>

<!-- Script de validaciones -->
<script src="../assets/js/validation.js"></script>

<!-- Ventana flotante si registro exitoso -->
<script>
<?php if (isset($_SESSION["success"])): ?>
    Swal.fire({
        icon: 'success',
        title: '¡Registro exitoso!',
        text: 'Ahora puedes iniciar sesión.',
        confirmButtonText: 'Ir al login'
    }).then((result) => {
        if (result.isConfirmed) {
            window.location.href = 'login.php';
        }
    });
    <?php unset($_SESSION["success"]); ?>
<?php endif; ?>
</script>

</body>
</html>





























