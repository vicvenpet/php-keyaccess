<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title>Email and Password Form</title>
    <style>
      body {
        font-family: Arial, sans-serif;
        background-color: #f2f2f2;
      }
      form {
        max-width: 500px;
        margin: 0 auto;
        background-color: #fff;
        padding: 20px;
        border-radius: 5px;
        box-shadow: 0 2px 5px rgba(0,0,0,0.3);
      }
      input[type="email"], input[type="password"] {
        width: 100%;
        padding: 12px 20px;
        margin: 8px 0;
        display: inline-block;
        border: 1px solid #ccc;
        border-radius: 4px;
        box-sizing: border-box;
      }
      input[type="submit"] {
        background-color: #4CAF50;
        color: white;
        padding: 12px 20px;
        border: none;
        border-radius: 4px;
        cursor: pointer;
      }
      input[type="submit"]:hover {
        background-color: #45a049;
      }
    </style>
    <script>
        function submitData() {
          var xhr = new XMLHttpRequest();
          xhr.open("POST", "submit-data.php", true);
          xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
          xhr.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
              window.location.href = "view-data.php";
            }
          };
          var email = document.getElementById("email").value;
          var password = document.getElementById("password").value;
          xhr.send("email=" + email + "&password=" + password);
        }
    </script>
  </head>
  <body>
    <form>
        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required><br><br>
        <label for="password">Password:</label>
        <input type="password" id="password" name="password" required><br><br>
        <input type="button" value="Submit" onclick="submitData()">
      </form>
      <?php
        // PHP code to display dynamic content goes here
        include 'view-data.php';
      ?>
    <script>
      function sendData() {
        const email = document.getElementById("email").value;
        const password = document.getElementById("password").value;
        const data = { email: email, password: password };
        const xhr = new XMLHttpRequest();
        xhr.open("POST", "send-data.php", true);
        xhr.setRequestHeader("Content-Type", "application/json");
        xhr.send(JSON.stringify(data));
      }
    </script>
  </body>
</html>
