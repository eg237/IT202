<?php
// require once not working
include_once('config.php');
ini_set('display_errors',1);
ini_set('display_startup_errors',1);
error_reporting(E_ALL);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>User Registration | PHP</title>
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
</head>
<body>
    <div>
        <?php
        //require('config.php');
        if(isset($_POST['create'])){
            $firstname   = $_POST['firstname'];
            $lastname    = $_POST['lastname'];
            $email       = $_POST['email'];
            $password    = $_POST['password'];
            
            $sql = "INSERT INTO `UserAccounts`(`id`, `firstname`, `lastname`, `email`, `pass`) VALUES ([value-1],[value-2],[value-3],[value-4],[value-5])";
            $stmtinsert = $db->prepare($sql);
            $result = $stmtinsert->execute();
            $error = $db->error;
            // if($error && $error[0] !== '0000'){}
            if($result){
                echo 'Successfully saved.';
            }else{
                echo 'There were errors while saving the data ';
            }

             echo $firstname, " ", $lastname , " ", $email, " " , $password;
        }
        ?>
    </div>

    <div>
        <form action="Registration.php" method="post">
            <div class="container">
                
                <div class="row">
                    <div class="col-sm-3">
                        <h1>Registration</h1>
                        <p>Fill up the form with correct Values.</p>
                        <hr class="mb-3">

                        <label for="firstname"><b>First Name</b></label>
                        <input type="text" name="firstname" required>

                        <label for="lastname"><b>Last Name</b></label>
                        <input type="text" name="lastname" required>

                        <label for="email"><b>Email Address</b></label>
                        <input type="email" name="email" required>

                        <br>
                        <label for="password"><b>Password</b></label>
                        <br>
                        <input type="password" name="password" required>

                        <hr class="mb-3">
                        <input class="btn btn-primary" type="submit" name="create" value="Sign Up" required>
                    </div>
                </div>
            </div>
    </div>
</body>
</html>
