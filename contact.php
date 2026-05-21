<?php
include 'db.php';

$name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];

$sql = "INSERT INTO contacts (name, email, message) VALUES ('$name', '$email', '$message')";

if (mysqli_query($conn, $sql)) {
    $phone = "919898121219";
    $whatsapp_message = "New Message from: $name\nEmail: $email\nMessage: $message";
    $whatsapp_message = urlencode($whatsapp_message);
    header("Location: https://wa.me/$phone?text=$whatsapp_message");
    exit();
} else {
    echo "Error: " . mysqli_error($conn);
}
?>