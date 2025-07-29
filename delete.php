<?php
include 'db.php'; // Connect to DB
$id = $_GET['id'];  // Get user ID from URL
$conn->query("DELETE FROM users WHERE id=$id"); // Run delete SQL
header("Location: index.php"); // Redirect to user list
?>
