<?php 
    include 'dbConnect.php';

    session_start();

    $user_check = $_SESSION['user-id'];
    $ses_sql = mysql_query("SELECT user_id FROM student_list WHERE user_id='$user_check'");
    $row = mysql_fetch_array($ses_sql);

    if(!isset($row[0])) {
        header('Location: index.html');
    }
?>