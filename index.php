<?php
  require_once('class/student.php');
  require_once('class/teacher.php');

  call_user_func(array($_GET['class'], $_GET['action']));
?>
