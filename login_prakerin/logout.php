<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="login.css">
    <link rel="shortcut icon" href="images/logo.jpg">
    <title>Logout</title>
</head>

<body>
    <div class="login-page">
    <div class="form">
    
<?php
    session_start();
    session_destroy();

    echo "Anda Sudah Logout <br>";
    echo "<a href='login.php'> Login </a>";
    
?>

    </div>
    </div>
</body>

</html>