<?php
    // database connect 
    require_once 'db_connect.php';
    $delete_all=$_GET['delete_all'];
    $all_delete_query="DELETE FROM informations";
    mysqli_query($db_connect,$all_delete_query);
    header('location: todo_list.php');
     

?>