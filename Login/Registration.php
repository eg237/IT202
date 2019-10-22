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
        if(isset($_POST['create'])){

        }
        ?>
    </div>

    <div>
        <form action="registration.php" method="post">
            <div class="container">
                <div class="row">
                    <div class="col-sm-3">
                        <h1>Registration</h1>
                        <p>Fill up the form with correct Values.</p>
                        <label for="firstname"><b>First Name</b></label>
                        <input type="text" name="firstname" required>
                        <br>
                        <label for="lastName"><b>Last Name</b></label>
                        <input type="text" name="lastName" required>
                        <br>
                        <label for="email"><b>Email Address</b></label>
                        <input type="email" name="email" required>
                        <br>
                        <label for="password"><b>Password</b></label>
                        <input type="password" name="password" required>
                        <br>
                        <input type="submit" name="create" value="Sign Up" required>
                    </div>
                </div>
            </div>
    </div>
</body>
</html>