<?php 
session_start();
if (!isset($_SESSION["user_id"])) {
    header("Location: login.php");
    exit();
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Dashboard - Xiaomi Store</title>

    <link rel="stylesheet" href="../assets/css/styles.css?v=1.0.1">
</head>
<body>

<header class="navbar">
    <div class="logo-section">
        <img src="../assets/images/xiaomi-logo.png" alt="Xiaomi Logo" class="logo">
        <span>Xiaomi Store</span>
    </div>
    <nav class="nav-links">
        <a href="#">Inicio</a>
        <a href="#">Productos</a>
        <a href="#">Mis Pedidos</a>
        <a href="#">Carrito</a>
        <a href="../controllers/logout.php">Cerrar sesión</a>
    </nav>
</header>

<main class="main-content">
    <h2>¡Hola, <?= htmlspecialchars($_SESSION["user_name"]) ?>!</h2>
    <p>Bienvenido a Xiaomi Store, tu tienda de confianza. 🚀</p>

    <section class="products-grid">
        <div class="product-card">
            <img src="../assets/images/producto1.0.png" alt="Producto Xiaomi">
            <h3>Realme P3 5G 12</h3>
            <p>Precio: $200</p>
            <button class="add-cart-btn">Añadir al carrito</button> 
        </div>
        <div class="product-card">
            <img src="../assets/images/producto22.png" alt="Producto Xiaomi">
            <h3>Xiaomi Watch</h3>
            <p>Precio: $150</p>
            <button class="add-cart-btn">Añadir al carrito</button>
        </div>
        <div class="product-card">
            <img src="../assets/images/producto3.png" alt="Producto Xiaomi">
            <h3>Aspiradora Robótica</h3>
            <p>Precio: $350</p>
            <button class="add-cart-btn">Añadir al carrito</button>
        </div>
        <div class="product-card">
            <img src="../assets/images/producto4.png" alt="Producto Xiaomi">
            <h3>Xiaomi Mi Tv 4x</h3>
            <p>Precio: $450</p>
            <button class="add-cart-btn">Añadir al carrito</button>
        </div>
        <div class="product-card">
            <img src="../assets/images/producto5.png" alt="Producto Xiaomi">
            <h3>Mi Smart Speaker</h3>
            <p>Precio: $55</p>
            <button class="add-cart-btn">Añadir al carrito</button>
        </div>
        <div class="product-card">
            <img src="../assets/images/producto6.png" alt="Producto Xiaomi">
            <h3>Xiaomi Buds 5</h3>
            <p>Precio: $75</p>
            <button class="add-cart-btn">Añadir al carrito</button>
        </div>
    </section>
</main>

<footer>
    <p>Todos los derechos reservados. Hecho por Darwin Armijos</p>
</footer>

<!-- ✅ Modal flotante -->
<?php if (isset($_SESSION["success"])): ?>
    <div class="modal" id="modal-success">
        <div class="modal-content">
            <p><?= $_SESSION["success"]; unset($_SESSION["success"]); ?></p>
            <button onclick="document.getElementById('modal-success').style.display='none'">Aceptar</button>
        </div>
    </div>
<?php endif; ?>

</body>
</html>










