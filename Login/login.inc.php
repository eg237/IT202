<?php

if (isset($_POST['login-submit'])){
    require 'config.php';

    $username = $_POST['user'];
    $password = $_POST['pass'];

    if(empty($username) || empty($password)){
        header("Location: index.php?error=emptyfields");
        exit();
    }else{
        $sql="SELECT * FROM UserAccounts WHERE username=? OR email=?;";
        $stmt=mysqli_smtm_init($db);
        if(!mysqli_stmt_prepare($stmt, $sql)){
            header("Location: index.php?error=sqlerror");
            exit();
        }else{

            mysqli_stmt_bind_param($stmt, "ss", $username, $username);
            mysqli_stmt_execute($stmt);
            $result = mysqli_stmt_get_result($stmt);
            if ($row = mysqli_fetch_assoc()) {
                $passCheck = password_verify($password, $row['pass']);
                if ($passCheck == false) {
                    header("Location: index.php?error=WrongPassword");
                    exit();
                }else if($passCheck == true){
                    session_start();
                    $_SESSION['user'] = $row['username']

                    header("Location: index.php?login=success");
                    exit();
                }else{
                    header("Location: index.php?error=WrongPassword");
                    exit();
                }
            }else{
                header("Location: index.php?error=nouser");
                exit();
            }
        }
    }

}else{
    header("Location: index.php");
    exit();
}