<?php
session_start();

$host = 'localhost';
$db = 'u470834742_redsoil';
$user = 'u470834742_redsoiladmins';
$pass = 'Pabayalayco123';

try {
    $pdo = new PDO("mysql:host=$host;dbname=$db;charset=utf8mb4", $user, $pass);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // Get and sanitize inputs
    $first_name = trim($_POST['first_name'] ?? '');
    $last_name = trim($_POST['last_name'] ?? '');
    $email = trim($_POST['email'] ?? '');
    $password = $_POST['password'] ?? '';

    // Validate inputs
    if (empty($first_name) || empty($last_name)) {
        $_SESSION['error'] = 'First and last name are required.';
        header('Location: admin_register.html'); // Redirect back to form
        exit;
    }

    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $_SESSION['error'] = 'Invalid email address.';
        header('Location: admin_register.html');
        exit;
    }

    if (strlen($password) < 6) {
        $_SESSION['error'] = 'Password must be at least 6 characters.';
        header('Location: admin_register.html');
        exit;
    }

    // Check if email already registered
    $stmt = $pdo->prepare("SELECT id FROM admins WHERE email = ?");
    $stmt->execute([$email]);
    if ($stmt->fetch()) {
        $_SESSION['error'] = 'Email already registered.';
        header('Location: admin_register.html');
        exit;
    }

    // Hash password
    $password_hash = password_hash($password, PASSWORD_DEFAULT);

    // Insert new admin
    $stmt = $pdo->prepare("INSERT INTO admins (first_name, last_name, email, password_hash) VALUES (?, ?, ?, ?)");
    $stmt->execute([$first_name, $last_name, $email, $password_hash]);

    // On success, redirect to login page (index.html)
    header('Location: index.html');
    exit;

} catch (PDOException $e) {
    $_SESSION['error'] = 'Database error: ' . $e->getMessage();
    header('Location: admin_register.html');
    exit;
}
?>