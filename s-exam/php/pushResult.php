<?php 
    include '../../dbConnect.php';

    $user = $_GET['user'];
    
    $phytime = $_GET['phytime'];
    $chemtime = $_GET['chemtime'];
    $mathtime = $_GET['mathtime'];
    $gktime = $_GET['gktime'];

    $phymark = $_GET['phymark'];
    $chemmark = $_GET['chemmark'];
    $mathmark = $_GET['mathmark'];
    $gkmark = $_GET['gkmark'];

    $var_sql = "UPDATE student_list SET time_physics = $phytime,
                        time_chemistry = $chemtime,
                        time_maths = $mathtime,
                        time_gk = $gktime,
                        physics_marks = $phymark,
                        chemistry_marks = $chemmark,
                        maths_marks = $mathmark,
                        gk_marks = $gkmark 
                        WHERE user_id = '$user'";

    $conn = mysql_query($var_sql);
    echo $conn;
?>