<?php 
    include '../../dbConnect.php';

    $arr = $_GET['arr'];
    $arr = json_decode($arr);

    for($x=0; $x<count($arr); $x++) {
        $pass = randomPassword();

        $insert_student = mysql_query("INSERT INTO student_list(name, phone, user_id, password) VALUES('".$arr[$x][0]."','".$arr[$x][1]."','".$arr[$x][2]."','".randomPassword()."')");
        echo $insert_student."\n\n";
        
        $change_status = mysql_query("UPDATE student_details SET approval_status=1 WHERE email='".$arr[$x][2]."'");
        echo $change_status."\n\n";
    }

    function randomPassword() {
        $alpha = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789";
        $pass = substr(str_shuffle($alpha), 0, 8);
        return $pass;
    }
?>