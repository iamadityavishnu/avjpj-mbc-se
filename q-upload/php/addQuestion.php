<?php 
    include 'dbConnect.php';

    $category = $_GET['category'];
    $question = $_GET['question'];
    $op1 = $_GET['op1'];
    $op2 = $_GET['op2'];
    $op3 = $_GET['op3'];
    $op4 = $_GET['op4'];
    $answer= $_GET['answer'];
    $difficulty = $_GET['diff'];

    $var_sql = "INSERT INTO question_set(category, question, option1, option2, option3, option4, answer, difficulty) VALUES (";

    $var_sql .= "'".$category."', ";
    $var_sql .= "'".$question."', ";
    $var_sql .= "'".$op1."', ";
    $var_sql .= "'".$op2."', ";
    $var_sql .= "'".$op3."', ";
    $var_sql .= "'".$op4."', ";
    $var_sql .= "'".$answer."', ";
    $var_sql .= "'".$difficulty."')";
    
    $conn = mysql_query($var_sql);

    echo $conn;
?>