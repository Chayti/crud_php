<?php include 'db.php'; // Reuse database connection

if ($_SERVER["REQUEST_METHOD"] == "POST") { // Check if form is submitted
  $name = $_POST['name']; // Get name from form
  $email = $_POST['email']; // Get email from form
  $conn->query("INSERT INTO users (name, email) VALUES ('$name', '$email')"); // SQL insert command
  header("Location: index.php"); // Redirect to user list after insert
}
?>

<!DOCTYPE html>
<html>
<head><title>Add User</title></head>
<body>
  <h2>Add User</h2>
  <form method="POST">
    Name: <input type="text" name="name" required><br>
    Email: <input type="email" name="email" required><br>
    <button type="submit">Add</button>
  </form>
</body>
</html>
