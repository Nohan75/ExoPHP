<?php
    session_start();
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Form</title>
</head>
<body>

    <?php
        if(isset($_SESSION['username'])){
            echo '<h1>Hello, ' . $_SESSION['username'] . '</h1>';
        } else {
            include('Login_Form.php');
        }
        
    ?>
    
</body>
</html>