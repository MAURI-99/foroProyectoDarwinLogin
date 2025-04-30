<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $_SESSION["success"] = "Si el correo existe, recibirás instrucciones.";
    header("Location: ../views/login.php");
    exit();
}
?>
