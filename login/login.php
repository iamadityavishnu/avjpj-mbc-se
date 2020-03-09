<?php 
    include '../dbConnect.php';
    $user = $_POST['username'];
    $pass = $_POST['password'];

    $var_sql = "SELECT name, user_id, password, exam_status FROM student_list WHERE user_id='$user'";

    $res = mysql_query($var_sql);
    $row = mysql_fetch_array($res);
    if(empty($row) == 0 && $pass == $row[2]) {
        // echo "Login Successfull<br><br>";
        // echo "Checking for exam status <br><br>";
        
        if($row[3] == 0) {
?>
    <!-- Write an html saying
            - You have completed the exam 
            - Please contact administrator if it wasn't you 
            - Contact email or phone

            Return to login Button
        -->
        - You have completed the exam <br>
            - Please contact administrator if it wasn't you <br>
            - Contact email or phone <br>

            <button onclick="window.location='../index.html'">return to login</button>
<?php
        }
        else {
            // create session 
            session_start();
            $_SESSION['user-name'] = $row[0];
            $_SESSION['user-id'] = $row[1];
            
            // redirect to exam            
            header("Location: ../s-exam/");
        }
    }
    else {    
?>      
    <script>
        alert("Login Failed! Invalid username or password");
        window.location = "../index.html";
    </script>
<?php   
    }
?>