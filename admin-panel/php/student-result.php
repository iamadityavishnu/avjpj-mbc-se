<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Results</title>
    <link rel="stylesheet" href="../style.css?v=4">
    <script src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>
</head>
<body>
    <script>
        var studentList = [], student;
        studentList.length = 0;
    </script>
    <?php 
        include '../../dbConnect.php';

        $res = mysql_query("SELECT * FROM student_list WHERE exam_status>0");

        $noRows = mysql_num_rows($res);
        // echo $noRows;
        while($row = mysql_fetch_array($res)) {
    ?>
        <script>
            var noStudents = <?php echo $noRows; ?>;
            student = {
                name : "<?php echo $row[1]; ?>",
                userID : "<?php echo $row[2]; ?>",
                time : {
                    physics : <?php echo $row[4]; ?>,
                    chemistry : <?php echo $row[5]; ?>,
                    maths : <?php echo $row[6]; ?>,
                    gk : <?php echo $row[7]; ?>
                },
                totalTime : <?php echo ($row[4]+$row[5]+$row[6]+$row[7]) ?>,
                marks : {
                    physics : <?php echo $row[8]; ?>,
                    chemistry : <?php echo $row[9]; ?>,
                    maths : <?php echo $row[10]; ?>,
                    gk : <?php echo $row[11]; ?>
                },
                totalMarks : <?php echo ($row[8]+$row[9]+$row[10]+$row[11]) ?>,
                examStatus : <?php echo $row[12]; ?>
            };
            studentList.push(student);
        </script>
    <?php } ?>

    <div class="result-container">
        <div class="result-header"></div>
        <div class="result-body-container" id="result-list-target">
        </div>

        <div class="page-buttons">
            <button class="fd-button" onclick="pageChange('-')">&lt;&lt;&nbsp;Prev</button>
            <button class="fd-button" onclick="pageChange('+')">Next&nbsp;&gt;&gt;</button>
        </div>
    </div>
</body>
</html>

<script src="../script.js?v=4"></script>