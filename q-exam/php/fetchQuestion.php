<?php 
    include '../../dbConnect.php';

    $subject = $_GET['subject'];
    $var_sql = "SELECT question, option1, option2, option3, option4 FROM question_set WHERE category = '".$subject."'";
    $result = mysql_query($var_sql);
    $row = mysql_fetch_array($result);
    $fun = "console.log('here')";
    echo json_encode($fun);
?>