
<?php
    include './connect.php';

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Manage Information</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>

<div class="container">
  <h1 class="title text-success" style="text-align: center; margin-top:50px">Manage information of guests</h1>

  <table class="table table-hover" style="margin-top: 30px">
    <thead>
      <tr>
        <th>ID</th>
        <th>Surname</th>
        <th>Name</th>
        <th>Email</th>
        <th>Phone</th>
        <th>Message</th>
        <th>ID Package</th>
        <th>Date</th>
      </tr>
    </thead>
    <tbody>
    <?php
        $query_stmt = "select * from guests";
        $stmt = $dbc ->query($query_stmt);
        if($stmt){
            while($row = $stmt->fetch_assoc()){
    ?>
    <tr>
        <td><?= $row['id'] ?></td>
        <td><?= $row['surname'] ?></td>
        <td><?= $row['name'] ?></td>
        <td><?= $row['email'] ?></td>
        <td><?= $row['phone_number'] ?></td>
        <td><?= $row['message'] ?></td>
        <td><?= $row['package_id'] ?></td>
        <td><?= $row['date_time'] ?></td>
    </tr>
    <?php
            }
        }
    ?>
    
    </tbody>
  </table>
</div>

</body>
</html>
