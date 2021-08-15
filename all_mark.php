<?php
    // database connect 
    require_once 'db_connect.php';
    // update query 
    $update_all_mark_query="UPDATE informations SET status='mark_done'";
    mysqli_query($db_connect,$update_all_mark_query);
    header('location: todo_list.php');
    
    
?>