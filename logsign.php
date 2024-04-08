<?php
session_start();
if (!isset($_SESSION['email'])) {
    header("Location: register.html", true, 301);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login and Signup</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      background-color: #f4f4f4;
      margin: 0;
      padding: 0;
      display: flex;
      justify-content: center;
      align-items: center;
      height: 100vh;
    }

    .container {
      background-color: #fff;
      padding: 20px;
      border-radius: 8px;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }

    .form-group {
      margin-bottom: 15px;
    }

    label {
      display: block;
      margin-bottom: 5px;
      color: #333;
    }

    input {
      width: 100%;
      padding: 8px;
      box-sizing: border-box;
      border: 1px solid #ccc;
      border-radius: 4px;
    }

    button {
      background-color: #4caf50;
      color: #fff;
      padding: 10px 15px;
      border: none;
      border-radius: 4px;
      cursor: pointer;
    }

    button:hover {
      background-color: #45a049;
    }

    .signup-link {
      margin-top: 10px;
      text-align: center;
    }

    .signup-link a {
      color: #4caf50;
      text-decoration: none;
    }
  </style>
</head>
<body>

  <div class="container">
    <h2>Login</h2>
    <form>
      <div class="form-group">
        <label for="username">Username:</label>
        <input type="text" id="username" name="username" required>
      </div>
      <div class="form-group">
        <label for="email">E-mail:</label>
        <input type="text" id="email" name="email" required>
      </div>

      <div class="form-group">
        <label for="password">Password:</label>
        <input type="password" id="password" name="password" required>
      </div>

      <div class="form-group">
  	  <label for="confirmP">Confirm password:</label>
  	  <input type="password" id="password2" name="password2" required>
  	</div>

      <div class="form-group">
        <button type="submit">Register!</button>
      </div>
</form>


    <div class="signup-link">
    <p>
  		Already a member? <a href="connect.php">Sign in</a>
  	</p>
    </div>
  </div>

</body>
</html>