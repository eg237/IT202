<?php
include_once('config.php');
?>
 <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>User Login | PHP</title>
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-sm-3">
                <h1>Login</h1>
                <form action="Login.php" method="post">
                    Username:<br/>
                    <input type="text" name="username" require><br/>
                    Password:<br/>
                    <input type="password" name="password" require><br/>
                    <br>
                    <input class="btn btn-primary" type="submit" name ="create" value="Login!">
                </form>
                <form action="Registration.php" method="post">
                    <br>
                    <input href="Registration.php" class="btn btn-primary" type="submit" value="Sign Up" >
                </form>
            </div>
        </div>
    </div>
</body>
</html> 