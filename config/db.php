<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "xiaomi_store_db";

$conn = new mysqli($servername, $username, $password, $database);

if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}
?>



