<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href=".\bootstrap-5.3.3-dist\css\bootstrap.css">
    <title>Document</title>
    <style>
    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
        font-family: 'Poppins', sans-serif;
    }

    html,
    body {
        display: grid;
        height: 100%;
        width: 100%;
        place-items: center;
    }

    .container {
        width: 80%;
        max-width: 400px;
    }
    </style>
</head>

<body>
    <div class="container">
        <h1 class="text-center">Login</h1>
        <p class="text-center">Lorem ipsum dolor sit amet.</p>
        <form action="login.php" method="POST">
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Email address</label>
                <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="input_email">
                <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Password</label>
                <input type="password" class="form-control" id="exampleInputPassword1" name="input_password">
            </div>
            <p class="text-danger d-none" id="password_is_incorrect">password is incorrect</p>
            <p class="text-danger d-none" id="no_email_found">you dont have an account! sign up.</p>
            <button type="submit" class="btn btn-primary w-100">Login</button>
        </form>
        <p class="text-center mt-3">Dont have an account? <a href="signup_page.php">Sign up</a></p>
    </div>
</body>
<?php
        session_start();
        if(isset($_SESSION['error'])){
        if($_SESSION['error'] == "no email found"){
            echo "
                <script>
                document.getElementById('no_email_found').classList.remove('d-none');
                </script>
            ";
        } else if($_SESSION['error'] == "password is incorrect"){
            echo "
                <script>
                document.getElementById('password_is_incorrect').classList.remove('d-none');
                </script>
            ";
        }
        if(isset($_SESSION['email'])){
            $e = $_SESSION['email'];
            echo "
                <script>
                document.getElementById('exampleInputEmail1').setAttribute('value','$e');
                </script>
            ";
            unset($_SESSION["email"]);
            if(password_verify("Naser@1234", '$2y$10$F6l/pPNeNr1eGGyuDtEqLuy4XbrktyANOgK9vBoJF5y'))
                echo "true";
            else
                echo "false";
        } 
        unset($_SESSION["error"]);
    }
    ?>
</html>