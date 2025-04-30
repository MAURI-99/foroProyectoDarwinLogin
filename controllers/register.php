<?php
session_start();
require_once("../config/db.php");

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $name = trim($_POST["name"]);
    $email = trim($_POST["email"]);
    $phone = trim($_POST["phone"]);
    $address = trim($_POST["address"]);
    $password = $_POST["password"];
    $confirm_password = $_POST["confirm_password"];

    // Validar que las contraseñas coincidan
    if ($password !== $confirm_password) {
        header("Location: ../views/register.php?error=Las contraseñas no coinciden");
        exit();
    }

    // Verificar si el email ya existe
    $sql_check = "SELECT id FROM users WHERE email = ?";
    $stmt_check = $conn->prepare($sql_check);
    $stmt_check->bind_param("s", $email);
    $stmt_check->execute();
    $stmt_check->store_result();

    if ($stmt_check->num_rows > 0) {
        header("Location: ../views/register.php?error=Este correo ya está registrado");
        exit();
    }

    // Insertar nuevo usuario
    $hashed_password = password_hash($password, PASSWORD_DEFAULT);
    $sql = "INSERT INTO users (name, email, phone, address, password) VALUES (?, ?, ?, ?, ?)";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("sssss", $name, $email, $phone, $address, $hashed_password);

    if ($stmt->execute()) {
        // Registro exitoso, redirigir al login
        header("Location: ../views/login.php?success=Registro exitoso. Ahora inicia sesión.");
        exit();
    } else {
        header("Location: ../views/register.php?error=Error al registrar el usuario");
        exit();
    }
}
?>






