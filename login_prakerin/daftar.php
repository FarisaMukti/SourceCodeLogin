<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="login.css">
    <link rel="shortcut icon" href="images/logo.jpg">
    <title>Registration</title>
</head>

<body>
    <div class="login-page">
    <h1>.:: REGISTRATION ::.</h1>
    <div class="form">
    <a href="login.php"> Back to Home </a>
    <br/><br/>
    <form class="login-form" action="daftar.php" method="post" name="form1" enctype="multipart/form-data">
        <table>
            <tr>
                <td>Nama Lengkap</td>
                <td><input type="text" name="nama"></td>
            </tr>
            <tr>
                <td>Username</td>
                <td><input type="text" name="username"></td>
            </tr>
            <tr>
                <td>Password</td>
                <td><input type="password" name="password"></td>
            </tr>
        </table>
        <button>DAFTAR</button>
    </form>
    </div>
    </div>

    <?php
        if(isset($_POST['daftar'])){
            $nama = $_POST['nama'];
            $username = $_POST['username'];
            $password = $_POST['password'];

            include_once("koneksi.php");

            $result = mysqli_query($mysqli,"INSERT INTO pengguna
                                                (nama,username,password)
                                            VALUES
                                                ('$nama','$username',md5('$password'))");
            
            echo "Biodata user telah ditambahkan, Terimakasih. <a href='login.php'> Login </a>";
        }
    ?>

    </body>
</html>