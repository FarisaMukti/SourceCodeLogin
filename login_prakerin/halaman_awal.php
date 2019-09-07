<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="login.css">
    <link rel="shortcut icon" href="images/logo.jpg">
    <title>Dashboard</title>

    <?php
        session_start();
        if(!isset ($_SESSION["username"])){
            echo "Sesi Sudah Habis! <br>
            <a href='login.php'> Login Lagi </a>";;
            exit;
            }

        echo "Selamat Datang <br>";
        echo "User : ".$_SESSION["username"]."<br>";
        echo "Nama : ".$_SESSION["nama"]."<br>";
    ?>

<style>
    * {
        margin:0; 
        padding:0;
    }

    #menu {
        text-align: center;
    }

    nav {
        margin:auto;
        text-align: center;
        width: 100%;
        font-family: arial;
    } 

    nav ul {
        background:#37988e;
        padding: 0 20px;
        list-style: none;
        position: relative;
        display: inline-table;
        width: 100%;
     }

    nav ul li{
        float:left;
    }

    nav ul li:hover{
        background:#d68d9a;
    }

    nav ul li:hover a{
        color:#000;
    }

    nav ul li a{
        display: block;
        padding: 25px;
        color: #fff;
        text-decoration: none;
    }
</style>

</head>

<body>
  <hr>
  <nav>
    <ul>
        <li><a href="halaman_awal.php">Dashboard</a></li>
        <li><a href="halaman_1.php"> Halaman 1 </a></li>
        <li><a href="halaman_2.php"> Halaman 2 </a></li>      
        <li><a href="logout.php"> Logout </a></li>
    </ul>
  </nav>

  <div id="menu">
    <br/><br/>
        <h2> Menu Halaman Lain </h2> <br>
        <p>Ini adalah halaman dashoard ! </p>
    </div>
</body>

</html>
