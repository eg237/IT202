<?php 
session_start();
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset = "utf-8">
        <meta name = "description" content="This is an example of a meta description.">
        <meta name=viewport content="width=device-width, initial-scale=1">
        <title></title>
    </head>
    <body>

        <header>
            <nav>
                <a href="#"></a>
                <ul>
                    <li><a href="index.php">Home</li>
                    <li><a href="#">Portfolio</li>
                    <li><a href="#">About me</li>
                    <li><a href="#">Contact</li>
                </ul>
                <div>
                    <form action="Login.php" method="post">
                        <button type="submit" name="login-submit">Login</button>
                    </from>
                    <form action="Registration.php" method="post">
                        <button type="submit">Signup</button>
                    </form>
                    <form action="logout.inc.php" method="post">
                        <button type="submit" name="logout-submit">Logout</button>
                    </form>
                </div> 
            </nav>
        </header>

    </body>
</html>