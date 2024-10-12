<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href=".\bootstrap-5.3.3-dist\css\bootstrap.css">


</head>
<body>
    
<div class="container">
    <form class="row g-3 needs-validation" action="edit.php" method="POST">
      <div class="col-md-4">
        <label for="user_name" class="form-label">Full Name</label>
        <input type="text" class="form-control" name="user_name" value="<?php echo $_SESSION["user"]["user_name"]; ?>" required>
        <div class="valid-feedback">
          Looks good!
        </div>
      </div>
      <div class="col-md-4">
        <label for="user_email" class="form-label">Email</label>
        <input type="email" class="form-control" name="user_email" value="<?php echo $_SESSION["user"]["user_email"]; ?>" required>
        <div class="valid-feedback">
          Looks good!
        </div>
      </div>
      <div class="col-md-4">
        <label for="user_password" class="form-label">Password</label>
        <div class="input-group has-validation">
          <input type="text" class="form-control" name="user_password" aria-describedby="inputGroupPrepend" value="<?php echo $_SESSION["user"]["user_password"]; ?>" required>
          <div class="invalid-feedback">
            Please choose a username.
          </div>
        </div>
      </div>
      <div class="col-md-4">
        <label for="user_Mobile" class="form-label">user_Mobile</label>
        <div class="input-group has-validation">
          <input type="text" class="form-control" name="user_Mobile" aria-describedby="inputGroupPrepend" value="<?php echo $_SESSION["user"]["user_Mobile"]; ?>" required>
          <div class="invalid-feedback">
            Please choose a username.
          </div>
        </div>
      </div>
      <div class="col-md-4">
        <label for="user_birth_date" class="form-label">user_birth_date</label>
        <div class="input-group has-validation">
          <input type="date" class="form-control" name="user_birth_date" aria-describedby="inputGroupPrepend" value="<?php echo $_SESSION["user"]["user_birth_date"]; ?>" required>
          <div class="invalid-feedback">
            Please choose a username.
          </div>
        </div>
      </div>
      

      <div class="col-12">
        <button class="btn btn-primary" type="submit">Submit form</button>
      </div>
    </form>
</div>

</body>
</html>