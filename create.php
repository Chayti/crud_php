<?php include 'db.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $name = $_POST['name'];
  $email = $_POST['email'];
  $conn->query("INSERT INTO users (name, email) VALUES ('$name', '$email')");
  header("Location: index.php");
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
