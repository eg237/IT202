<?php
include_once('config.php');


$username = $_POST['user'];
$password = $_POST['pass'];

 if(isset($_POST['create'])){

    $sql="SELECT * FROM 'UserAccounts' WHERE username='$username' and pass='$password'";
    $result=mysqli_query($sql);
    $row = mysqli_fetch_array($result);
    if ($row['username'] == $username && $row['pass'] == $password){
        echo "You are logged in";
    }else{
        echo 'You Are Logged in';
    }

 }

?>