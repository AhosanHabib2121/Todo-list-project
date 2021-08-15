<?php
    // database connect 
    require_once 'db_connect.php';
    $id=$_GET['id'];
    $delete_query="DELETE FROM informations WHERE id=$id";
    mysqli_query($db_connect,$delete_query);
    header('location: todo_list.php');
    

?>