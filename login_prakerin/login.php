<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="login.css">
    <link rel="shortcut icon" href="images/logo.jpg">
    <title>Login</title>
</head>

<body>
    <div class="login-page">
    <h1>.:: LOGIN ::.</h1>
    <div class="form">
    <form class="login-form" method="post" action="login_proses.php">
        <table border="0">
            <tr>
                <td>USER</td>
                <td><input type="text" name="username"></td>
            </tr>
            <tr>
                <td>PASSWORD</td>
                <td><input type="password" name="password"></td>
        </table>
        <button>LOGIN</button>
        <p class="message">Not registered? <a href="daftar.php">Create an account</a></p>
    </form>
    </div>
    </div>
</body>

</html>