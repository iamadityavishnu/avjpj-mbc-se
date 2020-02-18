<?php 
  include '../../dbConnect.php';
  
  $user = $_GET['user'];
  
  $var_sql = "DROP TABLE $user";
  $conn = mysql_query($var_sql);
  echo $conn;
?>
