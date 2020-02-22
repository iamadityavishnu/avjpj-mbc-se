<?php 
    include '../../dbConnect.php';

    $user = $_GET['user'];
    $phy_sql = "SELECT COUNT(*) from $user WHERE topic='physics' AND result = 1";
    $chem_sql = "SELECT COUNT(*) from $user WHERE topic='chemistry' AND result = 1";
    $math_sql = "SELECT COUNT(*) from $user WHERE topic='maths' AND result = 1";
    $gk_sql = "SELECT COUNT(*) from $user WHERE topic='gk' AND result = 1";

    $arr = array();
    $arr["physics"] = mysql_fetch_array(mysql_query($phy_sql))[0];
    $arr["chemistry"] = mysql_fetch_array(mysql_query($chem_sql))[0];
    $arr["maths"] = mysql_fetch_array(mysql_query($math_sql))[0];
    $arr["gk"] = mysql_fetch_array(mysql_query($gk_sql))[0];

    echo json_encode($arr);
?>