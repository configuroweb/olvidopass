<?php
  session_start();
  
  session_destroy();
  header("Location: loginUser.php");
?>