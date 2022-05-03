
<?php
    include './connect.php';


    if(isset($_POST['password'])){
      $pwd = $_POST['password'];

      if($pwd == 'admin'){
        header('Location: manage_info.php');
      }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Login</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>

<div class="container" >
<h1 class="title text-success" style="text-align: center; margin-top:50px;">Login</h1>

  <form action="" method="POST">
    <div class="form-group">
      <label for="usr">Name:</label>
      <input type="text" class="form-control" id="usr" name="username" value="admin">
    </div>
    <div class="form-group">
      <label for="pwd">Password:</label>
      <input type="password" class="form-control" id="pwd" name="password">
    </div>
    <button type="submit" class="btn btn-primary">Login</button>
  </form>
</div>

</body>
</html>
