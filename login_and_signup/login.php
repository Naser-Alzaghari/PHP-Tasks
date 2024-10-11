<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
    //start PHP session
    session_start();
  
    //check if login form is submitted
    if(true){
        //assign variables to post values
        $email = $_POST['email'];
        $password = $_POST['password'];
        
        //include our database connection
        include 'conn.php';
  
        //get the user with email
        $stmt = $conn->prepare("SELECT * FROM `users` WHERE user_email = '$email'");
        
        try{
            $stmt->execute();
            
            //check if email exist
            if($stmt->rowCount() > 0){
                //get the row

                $user = $stmt->fetch();
                
                //validate inputted password with $user password
                if($password == $user['user_password']){
                    //action after a successful login
                    $_SESSION['success'] = 'User verification successful';
                    print_r($user);
                }
                else{
                    //return the values to the user
                    $_SESSION['email'] = $email;
                    $_SESSION['password'] = $password;
  
                    $_SESSION['error'] = 'Incorrect password';
                echo "Incorrect password";

                }
  
            }
            else{
                //return the values to the user
                $_SESSION['email'] = $email;
                $_SESSION['password'] = $password;
  
                $_SESSION['error'] = 'No account associated with the email';
                echo "No account associated with the email";
            }
  
        }
        catch(PDOException $e){
            $_SESSION['error'] = $e->getMessage();
            echo $email;
        }
  
    }
    else{
        $_SESSION['error'] = 'Fill up login form first';
        echo "error";
    }
  
    // header('location: index.php');
?>
</body>
</html>