<?php 
    include '../dbConnect.php';

    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];

    $var_sql = "INSERT INTO student_details(name, email, phone) VALUES('$name', '$email', $phone)";
    $var_sql = mysql_query($var_sql);
    echo $var_sql;

    if($var_sql) 
        header("Location: register_complete.php");
    else {
?>
    <script>
        alert("Email already Exists. Please contact college Administrator");
        window.location = "index.html";
    </script>
<?php
    }
?>