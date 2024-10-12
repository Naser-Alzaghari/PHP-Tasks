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
        <h1 class="text-center">Sign Up</h1>
        <p class="text-center">Lorem ipsum dolor sit amet.</p>
        <form action="signup.php" method="POST">
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Email address</label>
                <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="input_email">
                <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
            </div>
            <div class="mb-3">
                <label for="input_mobile" class="form-label">Mobile</label>
                <input type="text" class="form-control" id="input_mobile" name="input_mobile">
            </div>
            <div class="mb-3">
                <label for="input_full_name" class="form-label">Full Name</label>
                <input type="text" class="form-control" id="input_full_name" name="input_full_name">
            </div>
            <div class="mb-3">
                <label for="input_password" class="form-label">Password</label>
                <input type="password" class="form-control" id="input_password" name="input_password">
            </div>
            <div class="mb-3">
                <label for="input_password_confirmation" class="form-label">Password Confirmation</label>
                <input type="password" class="form-control" id="input_password_confirmation"
                    name="input_password_confirmation">
            </div>
            <div class="mb-3">
                <label for="input_date_of_birth" class="form-label">Date of Birth</label>
                <input type="date" class="form-control" id="input_date_of_birth" name="input_date_of_birth">
            </div>
            <button type="submit" class="btn btn-danger w-100">Sign Up</button>
        </form>
        <p class="text-success d-none" id="account_created_successfully">account created successfully</p>
        <p class="text-danger d-none" id="account_already_exist">account already exist</p>
        <p class="text-danger d-none" id="password_doesnot_match">password does not match</p>
        <p class="text-danger d-none" id="password_requirement">password does not meet requirement</p>
        <p class="text-center mt-3">Already have an account?<a href="login_page.php">Login</a></p>
    </div>

    <?php
        session_start();
        if(isset($_SESSION["success"])){
            if($_SESSION["success"] == "New record created successfully"){
                echo "
                    <script>
                    document.getElementById('account_created_successfully').classList.remove('d-none');
                    </script>
                ";
            }
            unset($_SESSION["success"]);
        } else if(isset($_SESSION['error'])){
            if($_SESSION["error"] == "account already exist"){
                echo "
                    <script>
                    document.getElementById('account_already_exist').classList.remove('d-none');
                    </script>
                ";
            }
            unset($_SESSION["error"]);
        }
    ?>
    <script>
    const p1 = document.getElementById("input_password");
    const p2 = document.getElementById("input_password_confirmation");
    const password_doesnot_match_msg = document.getElementById("password_doesnot_match");
    const password_requirement_msg = document.getElementById("password_requirement");
    document.querySelector("form[action='signup.php']").addEventListener("submit", (e)=>{
        if(!p1.value.match("^(?=.*[a-z])(?=.*[A-Z])(?=.*[0-9])(?=.*[!@#\$%\^&\*]).{8,}$")){
            password_requirement_msg.classList.remove('d-none');
            password_doesnot_match_msg.classList.add('d-none');
            e.preventDefault();
        } else {
            if(p1.value != p2.value){
                password_requirement_msg.classList.add('d-none');
                password_doesnot_match_msg.classList.remove('d-none');
                e.preventDefault();
            }
        }
    });
    </script>
</body>

</html>