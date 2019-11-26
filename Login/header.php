<?php 
session_start();
require 'config.php'
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="description" content="This is an example of a meta description. This will often show up in search results.">
    <meta name=viewport content="width=device-width, initial-scale=1">
    <title></title>
    <link rel="stylesheet" href="style.css">
  </head>
  <body>

    <header>
      <nav class="nav-header-main">
        <a class="header-logo" href="index.php">
          <img src="foxity.jpg" alt="mmtuts logo">
        </a>
        <ul>
          <li><a href="index.php">Home</a></li>
          <li><a href="#">Portfolio</a></li>
          <li><a href="#">About me</a></li>
          <li><a href="#">Contact</a></li>
        </ul>
      </nav>
      <div class="header-login">
            <form action="Login.php" method="post">
                <button type="submit" name="login-submit">Login</button>
            </from>
        </div>
        
        <div class="header-login">
            <form action="Registration.php" method="post">
                <button type="submit" name="logout-submit">Signup</button>
            </form>
        </div> 
        
        <div class="header-login">
            <form action="Registration.php" method="post">
                <button type="submit" name="logout-submit">Logout</button>
            </form>
        </div>
        </nav>
    </header>

    </body>
</html>