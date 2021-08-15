<?php
    // database connect 
    require_once 'db_connect.php';
    // update query 
    $update_all_unmark_query="UPDATE informations SET status='unmark'";
    mysqli_query($db_connect,$update_all_unmark_query);
    header('location: todo_list.php');
    
    
?>