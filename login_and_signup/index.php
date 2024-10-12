<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
<div class="wrapper">
      <div class="title-text">
        <div class="title login">Login Form</div>
        <div class="title signup">Signup Form</div>
      </div>
      <div class="form-container">
        <div class="slide-controls">
          <input type="radio" name="slide" id="login" checked>
          <input type="radio" name="slide" id="signup">
          <label for="login" class="slide login">Login</label>
          <label for="signup" class="slide signup">Signup</label>
          <div class="slider-tab"></div>
        </div>
        <div class="form-inner">
          <form action="login.php" class="login" method="POST">
            <div class="field">
              <input type="text" placeholder="Email Address" name="email" required>
            </div>
            <div class="field">
              <input type="password" placeholder="Password" name="password" required>
            </div>
            <p class="text-danger d-none" id="incorrect_password">Incorrect Password</p>
            <p class="text-danger d-none" id="no_email">No account associated with the email</p>
            <div class="pass-link"><a href="#">Forgot password?</a></div>
            <div class="field btn">
              <div class="btn-layer"></div>
              <input type="submit" value="Login">
            </div>
            <div class="signup-link">Not a member? <a href="">Signup now</a></div>
          </form>
          <form action="signup.php" class="signup" method="POST">
            <div class="field">
              <input type="text" placeholder="Full Name" name="name" required>
            </div>
            <div class="field">
              <input type="email" placeholder="Email Address" name="signup_email" required>
            </div>
            <p class="text-danger  d-none" id="email_requirment">Enter a valid email</p>
            <div class="field">
              <input type="password" placeholder="Password" id="password" name="signup_password" required>
            </div>
            <div class="field">
              <input type="password" placeholder="Confirm password" id="confirm_password" required>
            </div>
            <p class="text-danger mt-2 d-none" id="password_requirment">Minimum eight characters, at least one uppercase letter, one lowercase letter, one number and one special character</p>
            <p class="text-danger mt-2 d-none" id="password_doesnot_match">password doesnot match</p>
            <p class="text-danger mt-2 d-none" id="email_is_taken">email is taken already</p>
            <p class="text-success mt-2 fs-6 d-none" id="registerd_successfully">you have registerd successfully</p>
            <div class="field btn">
              <div class="btn-layer"></div>
              <input type="submit" value="Signup">
            </div>
          </form>
        </div>
      </div>
    </div>
  <?php
    print_r($_SESSION);
    if(isset($_SESSION['success'])){
      echo "
            <script>
            document.getElementById('registerd_successfully').classList.remove('d-none');
            document.querySelector('form.login').style.marginLeft = '-50%';
            document.querySelector('.title-text .login').style.marginLeft = '-50%';
            document.querySelector('input[type=radio]#signup').setAttribute('checked','');
            document.querySelector('input[type=radio]#login').removeAttribute('checked','');
            </script>
        ";
        unset($_SESSION['success']);
    } else {
      if(isset($_SESSION['error'])){
      if($_SESSION['error'] == 'Email already taken'){
        echo "
            <script>
            document.getElementById('email_is_taken').classList.remove('d-none');
            document.querySelector('form.login').style.marginLeft = '-50%';
            document.querySelector('.title-text .login').style.marginLeft = '-50%';
            document.querySelector('input[type=radio]#signup').setAttribute('checked','');
            document.querySelector('input[type=radio]#login').removeAttribute('checked','');
            </script>
        ";
        unset($_SESSION['error']);
      } else {
        if($_SESSION['error'] == 'Incorrect password'){
          echo "
              <script>
              document.getElementById('incorrect_password').classList.remove('d-none');
              </script>
          ";
          unset($_SESSION['error']);
      } else {
        if($_SESSION['error'] == 'No account associated with the email'){
          echo "
              <script>
              document.getElementById('no_email').classList.remove('d-none');
              </script>
          ";
          unset($_SESSION['error']);
      } 
    }
  }}
  }
  ?>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script src="./script.js"></script>
</body>

</html>

