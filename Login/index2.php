<?php
include_once('config.php');
session_start();

if(isset($_POST['user']) && isset($_POST['pass'])){
    $username = $_POST['user'];
    $password = $_POST['pass'];

    $query="select username , pass from `UserAccounts`";
    $query += "where username = :user LIMIT 1";
    $stmt = $db->prepare($query);
    $stmt->execute(array(":user" =>$username));
    $result = $stmt->fetch(sqli::FETCH_ASSOC);
    if($results  > 0){
        // $hash = password_hash($pass, PASSWORD_BCRYPT);
         //if(password_verify($password, $results['pass'])){
            echo "Welcome, " . $results["user"];
            echo "[" . $results["user"] . "]";
            header("Location: LandingPage.html");
        // }
        // else{
        //     echo "Invalid password";
        // }
    }
    else{
            echo "Invalid username";
    }
}