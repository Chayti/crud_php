<?php include 'db.php'; // DB connection

$id = $_GET['id']; // Get user ID from URL
$user = $conn->query("SELECT * FROM users WHERE id=$id")->fetch_assoc(); // Fetch that user's existing data

if ($_SERVER["REQUEST_METHOD"] == "POST") { 
  //Prevents code from running accidentally when the page is loaded.
  //Without a POST form submission, this block won’t run.
  $name = $_POST['name']; // Get form name
  $email = $_POST['email']; // Get form email
  $conn->query("UPDATE users SET name='$name', email='$email' WHERE id=$id");   // Update user info

  header("Location: index.php");
}
?>

<!DOCTYPE html>
<html>
<head><title>Edit User</title></head>
<body>
  <h2>Edit User</h2>
  <form method="POST">
    Name: <input type="text" name="name" value="<?= $user['name'] ?>" required><br>
    Email: <input type="email" name="email" value="<?= $user['email'] ?>" required><br>
    <button type="submit">Update</button>
  </form>
</body>
</html>
