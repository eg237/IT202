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
                    <form action="login.inc.php" method="post">
                        <input type="text" name="user" placeholder="Username">
                        <input type="password" name="pass" placeholder="Password">
                        <button type="submit" name="login-submit">Login</button>
                    </from>
                    <a href="Registration.php"></a>
                    <form action="logout.inc.php" method="post">
                        <button type="submit" name="logout-submit">Logout</button>
                    </form>
                </div>
            </nav>
        </header>

    </body>
</html>