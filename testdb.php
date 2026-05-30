<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

$host = 'localhost';
$dbname = 'u470834742_redsoil';
$user = 'u470834742_redsoiladmins';
$pass = 'Pabayalayco123';

try {
    $pdo = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8mb4", $user, $pass);
    echo "Database connection successful!";
} catch (PDOException $e) {
    echo "DB Connection error: " . $e->getMessage();
}
?>