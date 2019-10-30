<?php
include_once('config.php');
ini_set('display_errors',1);
ini_set('display_startup_errors',1);
error_reporting(E_ALL);

$error = '';
if(isset([$_POST['create'])){
    if(empty($_POST['username'] || $_POST['password'])){
        $error = "Username or Password is invalid";
    }else{
        $username = $_POST['username'];
        $password = $_POST['password'];
    }
    
    $query="SELECT username, pass FROM `UserAccounts` WHERE username=? AND pass=? LIMIT 1";
    $stmt = $db->prepare($query);
    $stmt->bind_param("ss",$username,$password);
    $stmt->execute();
    $stmt->bind_result($username, $password);
    $stmt->store_result();

    if($stmt->fetch()){
        $_SESSION['UserAccount_username'] = $username;
    }else{
        $error = "Username or PAssword is invalid";
        echo $error;
    }
//     $result = mysqli_query($db,$sql);

//     if(mysql_num_rows($result)==1){
//          echo "You have Successfully Logged in";
//         exit();
//     }else{
//         echo "You have entered incorrect credentials";
        // }
    }
} 
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