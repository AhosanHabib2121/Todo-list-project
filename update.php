<?php
    // database connect 
    require_once 'db_connect.php';
    // update query 
    $id=$_GET['id'];
    $update_query="UPDATE informations SET status='mark_done' WHERE id=$id";
    mysqli_query($db_connect,$update_query); 
    header('location: todo_list.php');
?>