<?php 
    include '../../dbConnect.php';

    $n = $_GET['n'];
    $topic = $_GET['topic'];
    $user = $_GET['user'];

    $topic = $topic."_questions";
    
    //  Fetch number of question in DB
    $count_row = "SELECT COUNT(*) FROM $topic";
    $c = mysql_query($count_row);
    $c = (int)mysql_fetch_array($c)[0];
    
    //Random Question No generator
    $rand = range(1 , $c);
    shuffle($rand);
    $rand = array_slice($rand, 0, $n);
    echo count($rand);

    for($i=0; $i<count($rand); $i++) {
        $var_sql = "INSERT INTO $user (question, option1, option2, option3, option4, answer) SELECT question, option1, option2, option3, option4, answer FROM $topic WHERE sl_no = ".$rand1[i];
        echo $var_sql;
        $conn = mysql_query($var_sql);
        echo $conn;
    }
   
        // $row = mysql_fetch_array($res);
        // $new_query = "INSERT INTO $user(id, question, option1, option2, option3, option4, answer) VALUES (";

        // $new_query .= $row[0].",";
        // $new_query .= "'".$row[1]."',";
        // $new_query .= "'".$row[2]."',";
        // $new_query .= "'".$row[3]."',";
        // $new_query .= "'".$row[4]."',";
        // $new_query .= "'".$row[5]."',";
        // $new_query .= "'".$row[6]."')";

        // $conn = mysql_query($new_query);
        // echo $conn;
?>