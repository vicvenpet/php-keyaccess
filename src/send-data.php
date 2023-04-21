<?php
  $data = json_decode(file_get_contents('php://input'), true);
  $email = $data['email'];
  $password = $data['password'];
  echo "<h2>Submitted Data:</h2>";
  echo "<p>Email: " . $email . "</p>";
  echo "<p>Password: " . $password . "</p>";
?>
