<?php
// Database connection
$conn = new mysqli("localhost", "u470834742_redsoiladmins", "Pabayalayco123", "u470834742_redsoil");
if ($conn->connect_error) die("Connection failed: " . $conn->connect_error);

// Sanitize inputs
$id = (int)$_POST['id'];
$reply = trim($_POST['reply']);

// Fetch user email
$result = $conn->query("SELECT name, email FROM contact_messages WHERE id = $id");
if ($result && $row = $result->fetch_assoc()) {
    $to = $row['email'];
    $name = $row['name'];
    $subject = "Reply from Red Soil Trading";
    $headers = "From: Red Soil Trading <support.redsoil@redsoiltradinghardware.store>\r\n";
    $headers .= "Reply-To: support.redsoil@redsoiltradinghardware.store\r\n";
    $headers .= "Content-Type: text/plain; charset=UTF-8\r\n";

    $message = "Hi $name,\n\n";
    $message .= "Thank you for contacting us. Here's our reply:\n\n";
    $message .= "$reply\n\n";
    $message .= "Best regards,\nRed Soil Trading Hardware";

    // Send the email only (no saving to database)
    if (mail($to, $subject, $message, $headers)) {
        header("Location: dashboard.php?reply=success");
    } else {
        header("Location: dashboard.php?reply=fail");
    }
} else {
    header("Location: dashboard.php?reply=notfound");
}

$conn->close();
?>