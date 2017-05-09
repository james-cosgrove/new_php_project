addTask()

function addTask() {
  $('.add-new-task').submit(function() {
    var newTask = $('.add-new-task input[name=new-task]').val();
    if (newTask != '') {
      $.post('includes/add_task.php', { task: newTask}, function( data ) {
        $('.add-new-task input[name=new-task]').val('');
        $(data).appendTo('.task-list ul').hide().fadeIn();
      });
    }
    return false: // Ensure form does not submit twice
  });
}
