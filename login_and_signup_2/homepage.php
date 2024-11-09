<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
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
                                        <p class="text-muted mb-2 fw-medium"><i class="mdi mdi-email-outline me-2"></i>Email: <?php echo $_SESSION["user"]["user_email"]; ?>
                                        <p class="text-muted mb-2 fw-medium"><i class="mdi mdi-email-outline me-2"></i>Phone: <?php echo $_SESSION["user"]["user_Mobile"]; ?>
                                        <p class="text-muted mb-2 fw-medium"><i class="mdi mdi-email-outline me-2"></i>Birthdate: <?php echo $_SESSION["user"]["user_birth_date"]; ?>
                                        <p class="text-muted mb-2 fw-medium"><i class="mdi mdi-email-outline me-2"></i>Date Created: <?php echo $_SESSION["user"]["date_created"]; ?>
                                        <p class="text-muted mb-2 fw-medium"><i class="mdi mdi-email-outline me-2"></i>Last Login: <?php echo $_SESSION["user"]["date_last_login"]; ?>
                                        </p>
                                        <a href="editpage.php" class="btn btn-primary">edit</a>
                                        <a href="logout.php" class="btn btn-danger">logout</a>
                                        <a href="deleteuser.php" class="btn btn-danger">delete user</a>
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
    $sql = "SELECT * FROM `items`";
    $stmt = $conn->prepare($sql);
    $stmt->execute();
    $Row = $stmt->fetchAll(PDO::FETCH_ASSOC);
    if($stmt->rowCount()>0){
    echo "<form class='row gap-3 m-2' action='add_order.php' method='POST'>";
    for($i=0;$i<Count($Row);$i++){
        if($Row[$i]['is_deleted'] != "1"){
        $id=$Row[$i]['item_id'];
        $image=$Row[$i]['item_image'];
        $title=$Row[$i]['item_description'];
        $total_number=0;
        echo "<div class='card col-3' style='width: 18rem;' id=$id>
      <img src='$image' class='card-img-top' alt='...'>
      <div class='card-body'>
        <h5 class='card-title'>$title</h5>
        <p class='card-text'>Some quick example text to build on the card title and make up the bulk of the card's content.</p>
        <div class='d-flex'>
            <button type='button' class='btn btn-primary me-3' id='add_item_$id'>+</button>
            <button type='button' class='btn btn-danger' id='remove_item_$id'>-</button>
            <input class='border bg-primary p-2 ms-auto text-light text-center' style='border-radius: 10px; width:50px; display: inline-block;' name='total_number_$id' id='total_number_$id' value='$total_number' disabled>
        </div>
      </div>
      <script>
            document.getElementById('add_item_$id').addEventListener('click',()=>{
            document.getElementById('total_number_$id').value++;
            });
            document.getElementById('remove_item_$id').addEventListener('click',()=>{
            if(document.getElementById('total_number_$id').value > 0)
                document.getElementById('total_number_$id').value--;
            });
      </script>
    </div>";
        }
    }
    $_SESSION['order_id']=$id;
    echo "<input type='submit' class='btn btn-primary' value='submit order'>";
    echo "</form>";
    
}
    ?>
    
    

    </div>
</div>
</div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

    <script>
    //     form = document.querySelector('form');
    //     const buttons = form.querySelectorAll('button');
    //     buttons.forEach(function(button) {
    //     // If the button is not of type 'submit', prevent its default behavior
    //     if (button.type !== 'submit') {
    //         button.addEventListener('click', function(event) {
    //             event.preventDefault();
    //             console.log(button.textContent + " clicked, but default prevented.");
    //         });
    //     }
    // });
    </script>

</body>
</html>