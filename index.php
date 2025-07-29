<?php include 'db.php'; ?> // Connect to DB
<!DOCTYPE html>
<html>
<head>
  <title>CRUD App</title>
  <style>
  body { font-family: Arial; margin: 20px; }
  table { border-collapse: collapse; width: 50%; }
  th, td { padding: 10px; border: 1px solid #ccc; }
  a { margin-right: 10px; }
</style>

</head>
<body>
  <h2>User List</h2>
  <a href="create.php">Add New User</a>
  <table border="1">
    <tr><th>ID</th><th>Name</th><th>Email</th><th>Actions</th></tr>
    <?php
    $result = $conn->query("SELECT * FROM users"); // Get all users
    while ($row = $result->fetch_assoc()) { // Loop through results
      echo "<tr>
              <td>{$row['id']}</td>
              <td>{$row['name']}</td>
              <td>{$row['email']}</td>
              <td>
                <a href='update.php?id={$row['id']}'>Edit</a>
                <a href='delete.php?id={$row['id']}'>Delete</a>
              </td>
            </tr>";
    }
    ?>
  </table>
</body>
</html>
