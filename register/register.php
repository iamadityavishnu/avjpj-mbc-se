<?php 
    include '../dbConnect.php';

    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];

    $var_sql = "INSERT INTO student_details(name, email, phone) VALUES('$name', '$email', $phone)";
    $var_sql = mysql_query($var_sql);
    echo $var_sql;

    if($var_sql) 
        header("Location: register_complete.php");

    // Email ID is primary and needs to be checked when tey register
?>