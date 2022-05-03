<?php
    include './connect.php';
?>
<?php
    if(isset($_GET['id'])){
        $id = $_GET['id'];
        $query = "delete from packages where id = $id ";
        $result = $dbc ->query($query);
    }
        
    header('Location: manage_package.php');

?>
