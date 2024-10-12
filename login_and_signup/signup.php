    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
    </head>
    <body>
    <?php
        include 'conn.php';
        session_start();
        
        $name = $_POST["name"];
        $email = $_POST["signup_email"];
        $password = $_POST["signup_password"];
        $stmt = $conn->prepare("SELECT * FROM `users` WHERE user_email = '$email'");
        try{
            $stmt->execute();
            if($stmt->rowCount() == 0){
                $sql = "INSERT INTO users (user_name, user_email, user_password) VALUES ($name, $email, $password)";
                $sql = "INSERT INTO `users`(`user_name`, `user_email`, `user_password`) VALUES ('$name','$email','$password')";
                $conn->exec($sql);
                echo "New record created successfully";
                $_SESSION['success']=true;
                echo $_SESSION['success'];
            } else {
                $_SESSION['error'] = 'Email already taken';
            }
        } catch(PDOException $e){
            $_SESSION['error'] = $e->getMessage();
        }
        
        // $sql = "INSERT INTO users (username, email, password) VALUES (?, ?, ?)";
        // $stmt = $conn->prepare($sql);
        // $stmt->bind_param("sss", $username, $email, $password);
    ?>

    <script>
        window.location.replace("index.php");
    </script>
    </body>
    </html>
    
    