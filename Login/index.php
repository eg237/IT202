<?php
include_once('config.php');


$username = $_POST['user'];
$password = $_POST['pass'];

 if(isset($_POST['create'])){

    $sql="SELECT * FROM 'UserAccounts' WHERE username='$username' and pass='$password'";
    $result=mysqli_query($sql);
    echo $sql;
    // if($row = mysqli_fetch_assoc($result)){
    //     $db_password = $row['pass']

    //     if(md5($password)== $db_password){
    //         echo 'You are In';
    //     }
    // }
    // else{
    //     echo 'Please check your Query';
    // }

 }

?>