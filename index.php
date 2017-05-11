<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Simple To-Do List</title>
    <link rel="stylesheet" href="./css/style.css" />
  </head>
  <body>
    <div class="wrap">
      <div id="task-list">
        <ul>

          <?php
            require("includes/connect.php");

            $result = mysqli_query($conn, "SELECT * FROM tasks ORDER BY date ASC, time ASC");

            if($result->num_rows>0) {
              while($row = mysqli_fetch_assoc($result)) {
                $task_id = $row['id'];
                $task_name = $row['task'];
                echo '<li>
                        <span>'.$task_name.'</span>
                        <img id="'.$task_id.'" class="delete-button" width="10px" src="images/close.svg" />
                      </li>';
              }
            }
          ?>

        </ul>
      </div>
      <form id="add-new-task" autocomplete="off">
        <input type="text" name="new-task" placeholder="Add new item...">
      </form>
    </div>
  </body>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script type="text/javascript" src="./js/task.js"></script>
</html>
