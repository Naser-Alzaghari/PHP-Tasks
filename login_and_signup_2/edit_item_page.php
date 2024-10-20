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
        <form class="row g-3 needs-validation" action="edit_item.php" enctype="multipart/form-data" method="POST" novalidate>
        <input type="hidden" class="form-control" id="item_id" name="item_id" value="">
            <div class="col-md-4">
                <label for="item_description" class="form-label">item_description</label>
                <input type="text" class="form-control" id="item_description" name="item_description" value="" required>
                <div class="valid-feedback">
                    Looks good!
                </div>
            </div>
            <div class="col-md-4">
                <label for="item_image" class="form-label">item_image</label>
                <input type="file" class="form-control" name="item_image" id="item_image" required>
                <div class="valid-feedback">
                    Looks good!
                </div>
            </div>
            <div class="col-md-4">
                <label for="item_total_number" class="form-label">item_total_number</label>
                <input type="text" class="form-control" name="item_total_number" id="item_total_number" value="" required>
                <div class="valid-feedback">
                    Looks good!
                </div>
            </div>
            <div class="col-12">
                <button class="btn btn-primary" type="submit">Submit form</button>
            </div>
        </form>
    </div>
</body>
    <?php
        include "conn.php";
        $id=$_GET['id'];;

        $query="SELECT * FROM `items` WHERE `item_id`=:id";
        $statment=$conn->prepare($query);
        $statment->bindParam(':id',$id,PDO::PARAM_INT);
        $statment->execute();
        $item=$statment->fetch(PDO::FETCH_ASSOC);
        echo "<script>  
        document.getElementById('item_id').setAttribute('value','{$item['item_id']}');
        document.getElementById('item_description').setAttribute('value','{$item['item_description']}');
        document.getElementById('item_total_number').setAttribute('value','{$item['item_total_number']}');
        </script>";
        
    ?>
</html>