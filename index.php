<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Simple To-Do List</title>
    <link rel="stylesheet" href="style.css">
  </head>
  <body>
    <div class="wrap">
      <div class="task-list">
        <ul>
            <?php require("includes/connect.php"); ?>
        </ul>
      </div>
      <form class="add-new-task" autocomplete="off">
        <input type="text" name="new-task" placeholder="Add new item...">
      </form>
    </div>
  </body>
</html>
