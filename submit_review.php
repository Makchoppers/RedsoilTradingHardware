<?php

$host = 'localhost';
$dbname = 'u470834742_redsoil';
$user = 'u470834742_redsoiladmins';
$pass = 'Pabayalayco123';

// Connect to DB
$conn = new mysqli($host, $user, $pass, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Get POST data and sanitize
$name = $conn->real_escape_string($_POST['name'] ?? '');
$rating = (int)($_POST['rating'] ?? 0);
$review = $conn->real_escape_string($_POST['review'] ?? '');

// Validate input
if (empty($name) || empty($review) || $rating < 1 || $rating > 5) {
    echo "Invalid input. Please fill all fields correctly.";
    exit;
}

// Insert review as pending
$sql = "INSERT INTO reviews (name, rating, review) VALUES ('$name', $rating, '$review')";
if ($conn->query($sql) === TRUE) {
    echo "Thank you for your review! It will be published after approval.";
} else {
    echo "Error: " . $conn->error;
}

$conn->close();