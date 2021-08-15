<?php
    require_once 'header.php';
    // database connect 
    require_once 'db_connect.php';
    // select query 
    $info_select_query="SELECT * FROM informations";
    $select_query_run=mysqli_query($db_connect,$info_select_query);
    // count_query 
    $count_query_mark_done="SELECT COUNT(*) as table_mark_done FROM informations WHERE status='mark_done'";
    $count_query_unmark="SELECT COUNT(*) as table_unmark FROM informations WHERE status='unmark'";

?>
        <div class="project-title">
            <h2 class="text-center">TODO LIST</h2>
        </div>
        <div class="butt">
            <a href="todo_input.php" class="btn btn-info">Add new todo</a>
        </div>
        <div class="todo-list-area">
            <div class="card card-area">
                <div class="card-header" style="background:90a07f;">
                    <h5 class="card-title"> todo-remaining:<?= mysqli_fetch_assoc(mysqli_query($db_connect,$count_query_unmark))['table_unmark']?>, todo-complate:<?= mysqli_fetch_assoc(mysqli_query($db_connect,$count_query_mark_done))['table_mark_done']?></h5>
                    <div class="text-center">
                        <a href="all_unmark.php" class="btn btn-success">Unmark</a>
                        <a href="all_mark.php" class="btn btn-success">All Mark</a>
                        <a href="all_delete.php" class="btn btn-danger">All Delete</a>
                    </div>
                </div>
                <div class="card-body">
                    <table class="table" >
                        <thead>
                            <tr>
                                <th>task_names</th>
                                <th>status</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                                foreach($select_query_run as $info):
                            ?>
                                <tr class="" style="<?= ($info["status"] != "unmark")? 'background:#b7b993ad;' :''?> 
                                    <?= ($info["status"] == "mark_done")? 'background:#b7b993ad;' :''?>
                                ">
                                    <td><?= $info["task_names"]?></td>
                                    <td>
                                        <?php if($info["status"] == "unmark"):?>
                                        <a href="update.php?id=<?= $info['id']?>" class="btn" style="color:#0da0af"><i class="fas fa-marker"></i></a>
                                        <?php endif;?>
                                        <a href="delete.php?id=<?= $info['id']?>" class="btn text-danger"><i class="fas fa-trash-alt"></i></a>
                                    </td>
                                </tr>
                            <?php        
                                endforeach;
                            
                            ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

<?php
    require_once 'footer.php';
?>
