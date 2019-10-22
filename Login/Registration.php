<?php
require_once('config.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <!-- <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge"> -->
    <title>User Registration | PHP</title>
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
</head>
<body>
    <div>
        <?php
        if(isset($_POST['create'])){
            $firstname   = $_POST['firstname'];
            $lastname    = $_POST['lastname'];
            $email       = $_POST['email'];
            $password    = $_POST['password'];
            
            $sql = "INSERT INTO users (firstname, lastname, email, password ) VALUES(?,?,?,?)";
            $stmtinsert = $db->prepare($sql);
            $result = $stmtinsert->execute([$firstname, $lastname, $email, $password]);
            if($result){
                echo 'Successfully saved.';
            }else{
                echo 'There were errors while saving teh data';
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

                        <label for="lastName"><b>Last Name</b></label>
                        <input type="text" name="lastName" required>

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