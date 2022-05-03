
<?php
    include './connect.php';

    if(!empty($_POST)){
        $img = $_FILES['img']['name']; 
        $icon = $_FILES['icon']['name'];
        $title = $_POST['title'];
        $location = $_POST['location'];
        $type = $_POST['type'];
        
        $description = $_POST['description'];
        $oldPrice = $_POST['oldPrice'];
        $newPrice = $_POST['newPrice'];
        $colorBtn = $_POST['colorBtn'];
        $colorIcon = $_POST['colorIcon'];


        $query = "update packages set img = '$img', icon = '$icon', title = '$title', location = '$location', 
        type = '$type', oldPrice = '$oldPrice' , newPrice = '$newPrice', description = '$description', 
        colorBtn = '$colorBtn', colorIcon = '$colorIcon'
        where id = $id";

        $result = $dbc ->query($query);

        if($result){
            header("Location: manage_package.php");
        }
    }
?>

<?php
    if(isset($_GET['id'])){
        $id = $_GET['id'];
        $query = "select * from packages where id = $id ";
        $result = $dbc ->query($query);

        if($result){
            $row = $result->fetch_assoc();
            
        }

    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Update</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>

<div class="container" >
<h1 class="title text-success" style="text-align: center; margin-top:50px;">Update</h1>

    <form action="" method="POST" enctype="multipart/form-data">
        <div class="input-group mb-3">
            <div class="input-group-prepend">
                <span class="input-group-text">Image</span>
            </div>
            <input type="file" class="form-control" name="img">
        </div>

        <div class="input-group mb-3">
            <div class="input-group-prepend">
                <span class="input-group-text">Image Icon</span>
            </div>
            <input type="file" class="form-control" name="icon">
        </div>

        <div class="input-group mb-3">
            <div class="input-group-prepend">
                <span class="input-group-text">Title</span>
            </div>
            <input type="text" class="form-control" name="title" value="<?=$row['title']?>">
        </div>

        <div class="input-group mb-3">
            <div class="input-group-prepend">
                <span class="input-group-text">Location</span>
            </div>
            <input type="text" class="form-control" name="location" value="<?=$row['location']?>">
        </div>

        <div class="input-group mb-3">
            <div class="input-group-prepend">
                <span class="input-group-text">Type</span>
            </div>
            <input type="text" class="form-control" name="type" value="<?=$row['type']?>">
        </div>

        <div class="input-group mb-3">
            <div class="input-group-prepend">
                <span class="input-group-text">Old Price</span>
            </div>
            <input type="text" class="form-control" name="oldPrice" value="<?=$row['oldPrice']?>">
        </div>

        <div class="input-group mb-3">
            <div class="input-group-prepend">
                <span class="input-group-text">New Price</span>
            </div>
            <input type="text" class="form-control" name="newPrice" value="<?=$row['newPrice']?>">
        </div>

        <div class="input-group mb-3">
            <div class="input-group-prepend">
                <span class="input-group-text">Description</span>
            </div>
            <input type="text" class="form-control" name="description" value="<?=$row['description']?>">
        </div>

        <div class="input-group mb-3">
            <div class="input-group-prepend">
                <span class="input-group-text">Color Button</span>
            </div>
            <input type="text" class="form-control" name="colorBtn" value="<?=$row['colorBtn']?>">
        </div>

        <div class="input-group mb-3">
            <div class="input-group-prepend">
                <span class="input-group-text">Color Icon</span>
            </div>
            <input type="text" class="form-control" name="colorIcon" value="<?=$row['colorIcon']?>">
        </div>
        <button type="submit" class="btn btn-primary">Commit</button>
  </form>
</div>

</body>
</html>
