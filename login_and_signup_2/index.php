<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href=".\bootstrap-5.3.3-dist\css\bootstrap.css">
    <title>Document</title>
    <style>
        *{
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Poppins', sans-serif;
            }
            html,body{
            display: grid;
            height: 100%;
            width: 100%;
            place-items: center;
            }
        .container {
            text-align: center;
            width: 80%;
            max-width: 400px;
        }
        .container *{
            display: block;
            margin: 10px;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Hello There!</h1>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nihil maiores debitis voluptatibus perspiciatis qui doloribus.</p>
            <img src="./login.png" alt="pic" style="margin: auto;">
        <a href="login_page.php" class="btn btn-primary">Login</a>
        <a href="signup_page.php" class="btn btn-danger">Sign Up</a>
    </div>
</body>
</html>