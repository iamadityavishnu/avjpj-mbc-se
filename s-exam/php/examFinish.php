<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Congrats</title>
</head>
<body>
    <?php 
        include '../../session.php';

        session_destroy();
    ?>
    <h1> Congrats, You submission have been Registered </h1>
    <h3> We will contact you soon </h3>
</body>
</html>