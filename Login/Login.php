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
                <form action="index2.php" method="post">
                    <label>Username:</label><br/>
                    <input type="text" name="user" id = "user" require><br/>
                    <label>Password:</label><br/>
                    <input type="password" name="pass" id = "pass" require><br/>
                    <br>
                    <input class="btn btn-primary" type="submit" name ="create" id ="create" value="Login!">
                </form>
            </div>
        </div>
    </div>
</body>
</html> 