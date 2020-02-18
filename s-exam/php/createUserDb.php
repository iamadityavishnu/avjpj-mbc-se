<?php 
    include '../../dbConnect.php';

    $user = $_GET['user'];

    $var_sql = "CREATE TABLE $user(
        sl_no INT, 
        question varchar(300) NOT NULL, 
        option1 varchar(50) NOT NULL, 
        option2 varchar(50) NOT NULL, 
        option3 varchar(50) NOT NULL, 
        option4 varchar(50) NOT NULL, 
        answer varchar(50) NOT NULL, 
        result int, 
        topic varchar(10))";
    $conn = mysql_query($var_sql);
    // echo $conn;
?>