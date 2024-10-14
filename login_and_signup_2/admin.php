<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        table {
            width: 100%;
        }
        table  th , table td {
            border: 2px solid black;
            padding: 4px;
        }
        td input {
            border: none;
            width: fit-content;
            max-width: 100px;
        }
    </style>
</head>
<body>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/MaterialDesign-Webfont/7.2.96/css/materialdesignicons.min.css" integrity="sha512-LX0YV/MWBEn2dwXCYgQHrpa9HJkwB+S+bnBpifSOTO1No27TqNMKYoAn6ff2FBh03THAzAiiCwQ+aPX+/Qt/Ow==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

<div class="container">
<div class="row">
    <div class="col-12">
<div class="card">
            <div class="card-body pb-0">
                <div class="row align-items-center">
                    <div class="col-md-3">
                        <div class="text-center border-end">
                            <img src="https://bootdey.com/img/Content/avatar/avatar1.png" class="img-fluid avatar-xxl rounded-circle" alt="">
                            
                        </div>
                    </div><!-- end col -->
                    <div class="col-md-9">
                        <div class="ms-3">
                            <div>
                                <h4 class="card-title mb-2"><?php echo $_SESSION["user"]["user_name"]; ?></h4>
                                
                            </div>
                            <div class="row my-4">
                                <div class="col-md-12">
                                    <div>
                                        <p class="text-muted mb-2 fw-medium"><i class="mdi mdi-email-outline me-2"></i><?php echo $_SESSION["user"]["user_email"]; ?>
                                        <p class="text-muted mb-2 fw-medium"><i class="mdi mdi-email-outline me-2"></i><?php echo $_SESSION["user"]["user_Mobile"]; ?>
                                        <p class="text-muted mb-2 fw-medium"><i class="mdi mdi-email-outline me-2"></i><?php echo $_SESSION["user"]["user_birth_date"]; ?>
                                        <p class="text-muted mb-2 fw-medium"><i class="mdi mdi-email-outline me-2"></i><?php echo $_SESSION["user"]["date_created"]; ?>
                                        <p class="text-muted mb-2 fw-medium"><i class="mdi mdi-email-outline me-2"></i><?php echo $_SESSION["user"]["date_last_login"]; ?>
                                        </p>
                                        <a href="editpage.php" class="btn btn-primary">edit</a>
                                        <a href="logout.php" class="btn btn-danger">logout</a>
                                    </div>
                                </div><!-- end col -->
                            </div><!-- end row -->
                         
                            
                        </div>
                    </div><!-- end col -->
                </div><!-- end row -->
            </div><!-- end card body -->
        </div><!-- end card -->
        
                <?php
                    include "conn.php";
                    $sql = "SELECT * FROM `users`";
                    $stmt = $conn->prepare("SELECT * FROM `users`");
                    try {
                        $s = "SELECT * FROM `users`";
                        $sth = $conn->prepare($s, array(PDO::ATTR_CURSOR => PDO::CURSOR_FWDONLY));
                        $sth->execute();

                        echo "<div><table>";
                        echo "<thead><tr>" .
                            "<th>Fullname</th>" .
                            "<th>Email</th>" .
                            "<th>Mobile</th>" .
                            "<th>birth_date</th>" .
                            "<th>date created</th>" .
                            "<th>date last login</th>" .
                            "<th>Edit</th>" .
                            "<th>delete</th>" .
                            "</tr></thead>";
                        echo "<tbody>";
                        $Row = $sth->fetchAll(PDO::FETCH_ASSOC);
                        for($i=0;$i<Count($Row);$i++){
                            echo "<tr><td>".$Row[$i]['user_name']."</td>";
                            echo "<td>".$Row[$i]['user_email']."</td>";
                            echo "<td>".$Row[$i]['user_Mobile']."</td>";
                            echo "<td>".$Row[$i]['user_birth_date']."</td>";
                            echo "<td>".$Row[$i]['date_created']."</td>";
                            echo "<td>".$Row[$i]['date_last_login']."</td>";
                            echo "<td name='user_email'><a href='editpage.php?id=".$Row[$i]['user_id']."' class='edit_button btn btn-primary'  button_Id='".$Row[$i]['user_id']."'>Edit</a></td>";
                            
                            echo "<td><a href='deleteuser.php?id=".$Row[$i]['user_id']."' class='delete_button' id='delete_button_".$Row[$i]['user_id']."'>delete</a></td>";
                            echo "</tr>";
                        }
                        echo "</tbody></table></div>";
                    } catch(e){

                    }
                ?>
           
    </div>
</div>
</div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script>
        function edituser(id){
            console.log(id);
            
        }
        function deleteuser(id){
            <?php
            
                ?>
        }
    </script>
</body>
</html>