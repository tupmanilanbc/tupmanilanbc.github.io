<?php include('server.php'); ?>
<!DOCTYPE html>
<html>
<head>
    <title>User Registration System </title>
    <link rel="stylesheet" type="text/css" href="style1.css">
</head>
<body>
      <div class="header">
          <h2>Login</h2>
      </div>

      <form method="post" action="login.php">
        <!--- display validation errors here-->
        <?php include('errors.php'); ?>
          <div class="input-group">
              <label>Username</label>
              <input type="text" name="username">
          </div>
          <div class="input-group">
              <label>Password</label>
              <input type="password" name="password">
          </div
          <div class="input-group">
              <button type="submit" name="login" class="btn">Login</button>

          </div>
          <p>
              Not yet a member? <a href="register.php">Sign up</a>
          </p>
          <p>
              Back to Main page <a href="../index.php">Main Page</a>
          </p>
      </form>

</body>
</html>
