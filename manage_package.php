
<?php
    include './connect.php';

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Manage Packages</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>

<div style="margin: 0 20px">
    <h1 class="title text-success" style="text-align: center; margin-top:50px">Manage Packages</h1>

    <a href="./add_package.php" type="button" class="btn btn-outline-primary" 
        style="margin-left: 50px; min-width: 100px">
        Add
    </a>

  <table class="table table-hover" style="margin-top: 30px">
    <thead>
      <tr>
        <th>ID</th>
        <th>Images</th>
        <th>Icons</th>
        <th>Titles</th>
        <th>Locations</th>
        <th>Types</th>
        <th>Old Price</th>
        <th>New Price</th>
        <th>Descriptions</th>
        <th>Color Buttons</th>
        <th>Color Icons</th>
        <th></th>

      </tr>
    </thead>
    <tbody>
    <?php
        $query_stmt = "select * from packages";
        $stmt = $dbc ->query($query_stmt);
        if($stmt){
            while($row = $stmt->fetch_assoc()){
    ?>
    <tr>
        <td><?= $row['id'] ?></td>
        <td><img src="<?= $row['img'] ?>" alt="" style="width: 100px"></td>
        <td><img src="<?= $row['icon'] ?>" alt="" style="width: 100px"></td>
        <td><?= $row['title'] ?></td>
        <td><?= $row['location'] ?></td>
        <td><?= $row['type'] ?></td>
        <td><?= $row['oldPrice'] ?></td>
        <td><?= $row['newPrice'] ?></td>
        <td><?= $row['description'] ?></td>
        <td><?= $row['colorBtn'] ?></td>
        <td><?= $row['colorIcon'] ?></td>
        <td>
            <a href="./delete_package.php?id=<?= $row['id'] ?>" type="button" class="btn btn-outline-danger" style="margin-bottom: 10px">
                Delete
            </a>
            <a href="./edit_package.php?id=<?= $row['id'] ?>" type="button" class="btn btn-outline-warning">Edit</a>
        </td>
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
