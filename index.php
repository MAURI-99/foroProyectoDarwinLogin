<?php
session_start();

// Verificamos si la sesión del usuario está activa
if (isset($_SESSION["user"])) {
    header("Location: views/dashboard.php");
    exit();
} else {
    header("Location: views/login.php");
    exit();
}
?>


