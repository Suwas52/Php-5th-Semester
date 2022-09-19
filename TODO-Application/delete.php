<?php
    include('./db_config.php');
    if(isset($_GET['delete'])){
        $id = $_GET['delete'];

        $sql = "DELETE FROM todo_list WHERE id = $id";
        $result = mysqli_query($conn,$sql);
        if($result){
          header('Location: index.php');
        }
    }
?>