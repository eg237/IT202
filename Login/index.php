<?php
require_once('config.php');
if(isset($_POST['create'])){
    $username = $_POST['username'];
    $password = $_POST['password'];

    if(empty($username)|| empty($password)){
        echo 'Please Fill in the blanks'
    }
    // else{
    //     $query = "select * from 'UserAccounts' where username='$username' ";
    //     $result = mysqli_query($db,$query);
    // }
}

?>