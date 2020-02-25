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

        $var_sql = "SELECT * FROM student_list";
        $res = mysql_query($var_sql);
    ?>
    <div class="result-container">
        <div class="result-header"></div>
        <div class="result-body-container">
            <table class="result-list">
                <tr>
                    <th>Sl No.</th>
                    <th>Name/User ID</th>
                    <th>Physics</th>
                    <th>Chemistry</th>
                    <th>Maths</th>
                    <th>GK</th>
                    <th>Total Marks</th>
                    <th>Remark</th>
                </tr>
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
                echo "<tr>";
                    echo "<td>".$i."</td>";  
                    
                    echo "<td>";
                        echo $row[1]."<hr>".$row[2];
                    echo "</td>";
                    
                    echo "<td>";
                        echo $row[8]."<hr>".$row[4];
                    echo "</td>";

                    echo "<td>";
                        echo $row[9]."<hr>".$row[5];
                    echo "</td>";

                    echo "<td>";
                        echo $row[10]."<hr>".$row[6];
                    echo "</td>";

                    echo "<td>";
                        echo $row[11]."<hr>".$row[7];
                    echo "</td>";

                    echo "<td>";
                        echo ($row[8]+$row[9]+$row[10]+$row[11]);
                    echo "</td>";

                    echo "<td>";
                    echo "</td>";
                echo "</tr>";
                $i++;
            }
        ?>
            </table>
        </div>
    </div>
</body>
</html>