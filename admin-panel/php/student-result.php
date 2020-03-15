<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Results</title>
    <link rel="stylesheet" href="../style.css">
</head>
<body>
    <?php 
        include '../../dbConnect.php';

        $res = mysql_query("SELECT * FROM student_list");
    ?>
    <div class="result-container">
        <div class="result-header"></div>
        <div class="result-body-container">
        <?php 

        // $row[0]      SL no
        // $row[1]      Name   
        // $row[2]      User ID
        // $row[3]      pass
        // $row[4]      time_phy
        // $row[5]      time_chem
        // $row[6]      time_math   
        // $row[7]      time_gk
        // $row[8]      phy_mark
        // $row[9]      chem_mark
        // $row[10]     math_mark
        // $row[11]     gk_mark
        // $row[12]     exam status
            $i = 1;
            while($row = mysql_fetch_array($res)) {
                echo $row[1]."<br>";
            }
        ?>
        </div>
    </div>
</body>
</html>