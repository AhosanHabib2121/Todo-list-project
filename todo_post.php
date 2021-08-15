<?php
    // database connect 
    require_once 'db_connect.php';
    $task_names=($_POST["task_names"]);
    if($task_names){
        if(strlen($task_names)>=3 && strlen($task_names)<=50){
            $db_insert_query="INSERT INTO
            informations (task_names) VALUES ('$task_names')";
            mysqli_query($db_connect,$db_insert_query);
            header('location: todo_list.php');
        }
        else{
            echo "Minimum three characters have to pay!";
        }
    }
    else{
        echo "please something written then try!";
    }
    

    
?>