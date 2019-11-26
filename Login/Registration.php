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
    <script>
        function checkPasswords(form){
	        let isOk = form.password.value == form.confirm.value;
	        if(!isOk){ alert("Passwords don't match");}
	        return isOk;
}
    </script>
</head>
<body>
    <div>
        <?php
        if(isset($_POST['create'])){
            $username   = $_POST['username'];
            $email       = $_POST['email'];
            $password    = $_POST['password'];
            $confirm     = $_POST['confirm'];

            if($password != $confirm){
				echo "Passwords don't match";
				exit();
		}else{
            $hash = password_hash($password, PASSWORD_BCRYPT);
            $sql = "INSERT INTO `UserAccounts`(`username`, `email`, `pass`) VALUES ('$username','$email','$password')";
            $stmtinsert = $db->prepare($sql);
            $result = $stmtinsert->execute();
            if($result){
                echo 'Successfully saved.';
            }else{
                echo 'There were errors while saving the data ';
            }
        }
        }
        //     $sql = "INSERT INTO `UserAccounts`(`username`, `email`, `pass`) VALUES ('$username','$email','$password')";
        //     $stmtinsert = $db->prepare($sql);
        //     $result = $stmtinsert->execute();
        //     if($result){
        //         echo 'Successfully saved.';
        //     }else{
        //         echo 'There were errors while saving the data ';
        //     }
        // }
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

                        <label for="username"><b>Username</b></label>
                        <input type="text" name="username" required>

                        <label for="email"><b>Email Address</b></label>
                        <input type="email" name="email" required>

                        <br>
                        <label for="password"><b>Password</b></label>
                        <br>
                        <input type="password" name="password" required>

                        <label for="confirm"><b>Confirm Password</b></label>
                        <br>
                        <input type="password" name="confirm" required>

                        <hr class="mb-3">
                        <input class="btn btn-primary" type="submit" name="create" value="Sign Up" required>
                    </div>
                </div>
            </div>
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@8"></script>
    <script type="text/javascript">
        $(function(){
            // alert("Hello");
            Swal.fire({
                'title':'Register',
                'text':'Only use Credentials you will Remember',
                'type': 'success',
            })
        })
    </script>
</body>
</html>
