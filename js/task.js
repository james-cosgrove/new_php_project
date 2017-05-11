
$('#add-new-task').submit(function() {
  var newTask = $('#add-new-task input[name=new-task]').val();
  if (newTask != '') {
    $.post('includes/add_task.php', { task: newTask }, function( data ) {
      $('#add-new-task input[name=new-task]').val('');
      $(data).appendTo('#task-list ul').hide().fadeIn();
    });
  }
  return false; // Ensure form does not submit twice
});

$('body').on('click', '.delete-button', function() {
  var currentElement = $(this);
  var id = $(this).attr('id');
  $.post('includes/delete_task.php', { task_id: id }, function() {
    currentElement.parent().fadeOut("fast", function() {
      $(this).remove();
    });
  });
});
