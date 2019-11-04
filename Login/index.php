<?php
include_once('config.php');


$username = $_POST['user'];
$password = $_POST['pass'];

 if(isset($_POST['create'])){
    //  $username = $_POST['user'];
    //  $password = $_POST['pass'];

     if(empty($username) || empty($password)){
        echo 'Fill in the Blank'
     }
     else{
    //     $query = "select * from 'UserAccounts' where username='$username' ";
    //     $result = mysqli_query($db,$query);
        echo 'Not the Same';
     }
 }

?>