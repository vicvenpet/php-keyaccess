<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title>View Submitted Data</title>
  </head>
  <body>
    <h1>Submitted Data</h1>
    <?php
      if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $email = $_POST["email"];
        $password = $_POST["password"];
        echo "<p>Email: " . $email . "</p>";
        echo "<p>Password: " . $password . "</p>";
      } else {
        echo "<p>No data submitted.</p>";
      }
    ?>
  </body>
</html>
