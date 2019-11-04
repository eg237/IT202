<?php
include_once('config.php');

 if(isset($_POST['create'])){
     $username = $_POST['user'];
    // $password = $_POST['pass'];

    // if($username == $password)){
        echo $username;
    // }
    // else{
    //     $query = "select * from 'UserAccounts' where username='$username' ";
    //     $result = mysqli_query($db,$query);
    // }
 }

?>