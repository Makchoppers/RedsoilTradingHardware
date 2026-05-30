<?php
session_start();

// DB connection (adjust as needed)
$host = 'localhost';
$db = 'u470834742_redsoil';
$user = 'u470834742_redsoiladmins';
$pass = 'Pabayalayco123';

try {
    $pdo = new PDO("mysql:host=$host;dbname=$db;charset=utf8mb4", $user, $pass);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    $_SESSION['login_error'] = 'Database connection failed.';
    header('Location: index.php');  // redirect back to login page
    exit;
}

// Get POST data
$email = $_POST['email'] ?? '';
$password = $_POST['password'] ?? '';

if (empty($email) || empty($password)) {
    $_SESSION['login_error'] = 'Please enter email and password.';
    header('Location: index.php');
    exit;
}

// Fetch admin by email
$stmt = $pdo->prepare("SELECT * FROM admins WHERE email = ?");
$stmt->execute([$email]);
$admin = $stmt->fetch(PDO::FETCH_ASSOC);

if ($admin && password_verify($password, $admin['password_hash'])) {
    $_SESSION['admin_logged_in'] = true;
    $_SESSION['admin_id'] = $admin['id'];
    header('Location: admin_dashboard.php');
    exit;
} else {
    $_SESSION['login_error'] = 'Invalid email or password.';
    header('Location: index.php');
    exit;
}