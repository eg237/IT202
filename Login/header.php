<?php 
session_start();
require 'config.php'
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset = "utf-8">
        <meta name = "description" content="This is an example of a meta description.">
        <meta name=viewport content="width=device-width, initial-scale=1">
        <title></title>
        <link rel="stylesheet" href="style.css">
    </head>
    <body>

        <header>
            <nav class = "nav-header-main">
                <a href="#"></a>
                <ul>
                    <li><a href="index.php">Home</li>
                    <li><a href="#">Portfolio</li>
                    <li><a href="#">About me</li>
                    <li><a href="#">Contact</li>
                </ul>
                <div class="header-login">
                    <form action="Login.php" method="post">
                        <button type="submit" name="login-submit">Login</button>
                    </from>
                    </form>
                </div> 
                <div class="header-login">
                <form action="logout.inc.php" method="post">
                        <button type="submit" name="logout-submit">Logout</button>
                </div>
            </nav>
        </header>

    </body>
</html>