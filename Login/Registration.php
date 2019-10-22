<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>User Registration | PHP</title>
</head>
<body>
    <div>
        <?php
        if(isset($_POST['Create'])){

        }
        ?>
    </div>

    <div>
        <form action="registration.php" method="post">
            <div class="container">
                <h1>Registration</h1>
                <p>Fill up the form with correct Values.</p>
                <label for="firstname"><b>First Name</b></label>
                <input type="text" name="firstname">

                <label for="lastName"><b>Last Name</b></label>
                <input type="text" name="lastName">

                <label for="email"><b>Email Address</b></label>
                <input type="email" name="email">

                <label for="password"><b>Password</b></label>
                <input type="password" name="password">

                <input type="submit" name="Create" value="Sign Up">
            </div>
    </div>
</body>
</html>