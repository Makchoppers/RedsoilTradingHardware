<?php
// Database connection
$conn = new mysqli("localhost", "u470834742_redsoiladmins", "Pabayalayco123", "u470834742_redsoil");
if ($conn->connect_error) die("Connection failed: " . $conn->connect_error);

// Sanitize inputs
$name = $conn->real_escape_string($_POST['name']);
$email = $conn->real_escape_string($_POST['email']);
$phone = $conn->real_escape_string($_POST['phone']);
$message = $conn->real_escape_string($_POST['message']);

// Save to database
$conn->query("INSERT INTO contact_messages (name, email, phone, message) VALUES ('$name', '$email', '$phone', '$message')");

// Send confirmation email (optional)
mail($email, "Thank you for contacting Red Soil Trading", "We received your message:\n\n$message", "From: support.redsoil@redsoiltradinghardware.store");

// Redirect or respond
header("Location: Contact.html?status=sent");
exit;
?>