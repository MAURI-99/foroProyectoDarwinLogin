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
    <link rel="stylesheet" href="../assets/css/styles.css">
    <style>
        /* Modal Flotante */
        .modal {
            position: fixed;
            top: 0; left: 0; width: 100%; height: 100%;
            background: rgba(0, 0, 0, 0.5);
            display: flex; align-items: center; justify-content: center;
            z-index: 1000;
        }
        .modal-content {
            background: white; padding: 20px; border-radius: 10px; text-align: center;
            box-shadow: 0 0 10px rgba(0,0,0,0.3);
            max-width: 300px;
        }
        .modal-content p {
            margin-bottom: 15px;
            font-size: 16px;
            font-weight: bold;
        }
        .modal-content button {
            padding: 8px 15px;
            background-color: #ff6900;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }
        .modal-content button:hover {
            background-color: #e85d00;
        }
    </style>
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
            <img src="../assets/images/producto1.png" alt="Producto Xiaomi">
            <h3>Smartphone Redmi 12</h3>
            <p>Precio: $200</p>
        </div>
        <div class="product-card">
            <img src="../assets/images/producto2.png" alt="Producto Xiaomi">
            <h3>Xiaomi Watch</h3>
            <p>Precio: $150</p>
        </div>
        <div class="product-card">
            <img src="../assets/images/producto2.png" alt="Producto Xiaomi">
            <h3>Xiaomi Watch</h3>
            <p>Precio: $150</p>
        </div>
        <div class="product-card">
            <img src="../assets/images/producto2.png" alt="Producto Xiaomi">
            <h3>Xiaomi Watch</h3>
            <p>Precio: $150</p>
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









