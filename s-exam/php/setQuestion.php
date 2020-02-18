<?php 
    include '../../dbConnect.php';

    $n = $_GET['n'];
    $topic = $_GET['topic'];
    $user = $_GET['user'];
    $table = $topic."_questions";
    
    //  Fetch number of question in DB
    $count_row = "SELECT COUNT(*) FROM $table";
    $c = mysql_query($count_row);
    $c = (int)mysql_fetch_array($c)[0];
    
    //Random Question No generator
    $rand = range(1 , $c);
    shuffle($rand);    
    $rand = array_slice($rand, 0, $n);

    // for($i=0; $i<count($rand); $i++) {
    //     echo "*";
    //     echo $rand[$i]." ";
    // }
    // echo " $table $topic \n";

    for($i=0; $i<count($rand); $i++) {
        $fetch_question = "SELECT question, option1, option2, option3, option4, answer FROM $table WHERE sl_no = ".$rand[$i];
        $row = mysql_fetch_array(mysql_query($fetch_question));
        // echo $fetch_question. "\n";
        // echo "================\n";

        $insert_user = "INSERT INTO $user (sl_no, question, option1, option2, option3, option4, answer, topic) VALUES(".($i+1).", '".$row[0]."','".$row[1]."','".$row[2]."','".$row[3]."','".$row[4]."','".$row[5]."', '$topic')";
        // $con = mysql_query($insert_user);
        // echo $insert_user. "\n";
        // echo "================\n";
        // echo "================\n";
    }
?>