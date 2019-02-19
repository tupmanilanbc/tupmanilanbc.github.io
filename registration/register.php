<?php include('server.php'); ?>
<!DOCTYPE html>
<html>
<head>
    <title>User Registration System </title>
    <link rel="stylesheet" type="text/css" href="style1.css">
</head>
<body>
      <div class="header">
          <h2>Register</h2>
      </div>

      <form method="post" action="register.php" >
        <div class="input-group">
            <!--- display validation errors here-->

            <?php include('errors.php'); ?>
          <div   <?php  if (isset($name_error)): ?>
          class ="form_error"
        <?php endif ?> >


              <label>Username</label>
              <input type="text" name="username" placeholder="Username" value="<?php echo $username; ?>">
              <?php  if (isset($name_error)): ?>
                <span> <?php echo $name_error;?> <span/>
                <?php endif ?>

          </div>
          <div
          <?php  if (isset($email_error)): ?>
        class ="input-group"
      <?php endif ?>
      >
              <label>Email</label>
              <input type="text" name="email" placeholder="Email Address" value="<?php echo $email; ?>">
              <?php  if (isset($email_error)): ?>
                <span> <?php echo $email_error;?> <span/>
                <?php endif ?>

          </div>
          <div class ="input-group" >
              <label>Password</label>
              <input type="password" name="password_1" placeholder=" Input Password">
          </div>
          <div class ="input-group">
              <label>Confirm Password</label>
              <input type="password" name="password_2" placeholder="Confirm Password">
          </div>
          <div class ="input-group">
              <label>Department</label>
              <input type="department" name="department" placeholder="Department">
          </div>
          <div class="input-group">
              <button type="submit" name="register" class="btn">Register</button>

          </div>
          <p>
              Already a member? <a href="login.php">Sign in</a>
          </p>
          <p>
              Back to Main page <a href="../index.php">Main Page</a>
          </p>
      </form>

</body>
</html>
