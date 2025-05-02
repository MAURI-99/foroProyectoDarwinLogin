<?php
session_start();
require_once("../config/db.php");

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $email = trim($_POST["email"]);
    $password = $_POST["password"];

    $sql = "SELECT id, name, password FROM users WHERE email = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $stmt->store_result();

    if ($stmt->num_rows == 1) {
        $stmt->bind_result($id, $name, $hashed_password);
        $stmt->fetch();

        if (password_verify($password, $hashed_password)) {
            
            $_SESSION["user_id"] = $id;
            $_SESSION["user_name"] = $name;
            $_SESSION["success"] = "✅ ¡Bienvenido $name a Xiaomi Store!";
            header("Location: ../views/dashboard.php");
            exit();
        } else {
            
            $_SESSION["error"] = "❌ Contraseña incorrecta";
            header("Location: ../views/login.php");
            exit();
        }
    } else {
        $_SESSION["error"] = "❌ Correo no registrado";
        header("Location: ../views/login.php");
        exit();
    }
}
?>










