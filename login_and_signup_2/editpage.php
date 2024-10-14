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
    <div class="col-md-4 d-none">
        <label for="user_name" class="form-label">id</label>
        <input type="text" class="form-control" name="user_id" id="user_id" value="<?php echo $_SESSION["user"]["user_id"]; ?>" required>
        <div class="valid-feedback">
          Looks good!
        </div>
      </div>
      <div class="col-md-4">
        <label for="user_name" class="form-label">Full Name</label>
        <input type="text" class="form-control" name="user_name" id="user_name" value="<?php echo $_SESSION["user"]["user_name"]; ?>" required>
        <div class="valid-feedback">
          Looks good!
        </div>
      </div>
      <div class="col-md-4">
        <label for="user_email" class="form-label">Email</label>
        <input type="email" class="form-control" name="user_email" id="user_email" value="<?php echo $_SESSION["user"]["user_email"];?>" required>
        <div class="valid-feedback">
          Looks good!
        </div>
      </div>
      <div class="col-md-4">
        <label for="user_password" class="form-label">Password</label>
        <div class="input-group has-validation">
          <input type="text" class="form-control" name="user_password" id="user_password" aria-describedby="inputGroupPrepend" value="<?php echo $_SESSION["user"]["user_password"]; ?>" required>
          <div class="invalid-feedback">
            Please choose a username.
          </div>
        </div>
      </div>
      <div class="col-md-4">
        <label for="user_Mobile" class="form-label">user_Mobile</label>
        <div class="input-group has-validation">
          <input type="text" class="form-control" name="user_Mobile" id="user_Mobile" aria-describedby="inputGroupPrepend" value="<?php echo $_SESSION["user"]["user_Mobile"]; ?>" required>
          <div class="invalid-feedback">
            Please choose a username.
          </div>
        </div>
      </div>
      <div class="col-md-4">
        <label for="user_birth_date" class="form-label">user_birth_date</label>
        <div class="input-group has-validation">
          <input type="date" class="form-control" name="user_birth_date" id="user_birth_date" aria-describedby="inputGroupPrepend" value="<?php echo $_SESSION["user"]["user_birth_date"]; ?>" required>
          <div class="invalid-feedback">
            Please choose a username.
          </div>
        </div>
      </div>
      <div class="col-md-4">
        <label for="image" class="form-label">image</label>
        <div class="input-group has-validation">
          <input type="file" class="form-control" id="image" name="image" aria-describedby="inputGroupPrepend">
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
  <?php
    if(isset($_GET['id'])){
      $id = $_GET['id'];
      include "conn.php";
      $stmt = $conn->prepare("SELECT * FROM `users` WHERE user_id = '$id'");
      $stmt->execute();
      $user = $stmt->fetch();
      // print_r($stmt);
      // print_r($user);
      $name = $user['user_name'];
      echo "<script>
        document.getElementById('user_id').setAttribute('value','".$user['user_id']."');
        document.getElementById('user_name').setAttribute('value','".$user['user_name']."');
        document.getElementById('user_email').setAttribute('value','".$user['user_email']."');
        document.getElementById('user_password').setAttribute('value','');
        document.getElementById('user_Mobile').setAttribute('value','".$user['user_Mobile']."');
        document.getElementById('user_birth_date').setAttribute('value','".$user['user_birth_date']."');
      </script>";

    }
  ?>
</body>
</html>