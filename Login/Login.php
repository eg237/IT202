<?php
include_once('config.php');
// ini_set('display_errors',1);
// ini_set('display_startup_errors',1);
// error_reporting(E_ALL);

//mysql_select_db($db_name);

// if(isset([$_POST['create'])){
//     $username = $_POST['username'];
//     $password = $_POST['password'];
    
//     $sql="SELECT * FROM `UserAccounts` WHERE username='$username' AND pass='$password' LIMIT 1 ";
//     // if(mysql_num_rows($result)==1){
//     //     echo "You have Successfully Logged in";
//     //     exit();
//     // }else{
//     //     echo "You have entered incorrect credentials";
//     //}
// }

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
                <form action="Login.php" method="post">
                    Username:<br/>
                    <input type="text" name="username" require><br/>
                    Password:<br/>
                    <input type="password" name="password" require><br/>
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

<!-- <header>
    <nav>
        <a href="#"></a>
        <ul>
            <li><a href="index.php">Test</a></li>
            <li><a href="#">Ports</a></li>
            <li><a href="#">Spagetti</a></li>
            <li><a href="#">Rigattoni</a></li>
        </ul>
    </nav>
    <div>
        <form action="login.inc.php" method="post">  
            <input type="text" name="mailuid" placeholder="Username/Email">
            <input type="password" name="pwd" placeholder="Password">
            <button type="submit" name="login-submit">Login</button>
        </form>
        <a href="Registration.php">SignUp</a>
        <form action="#" method="post">
            
        </form>
    </div>
</header> -->