<?php
    require_once 'header.php';
?>

    <div class="todo_input">
            <div class="container">
                <div class="search-area">
                        <h2>Todo Input :</h2>
                    <form method="POST" action="todo_post.php" class="form-inline">
                        <div class="form-group">
                            <input type="text" class="form-control" name="task_names" placeholder="Enter new todo..">
                        </div>
                        
                        <button type="submit" class="btn">Add</button>
                    </form>
                </div>
            </div>
    </div>

<?php
    require_once 'footer.php';
?>
