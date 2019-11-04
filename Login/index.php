<?php
include_once('config.php');


$username = $_POST['user'];
$password = $_POST['pass'];

 if(isset($_POST['create'])){

    $sql="SELECT * FROM 'UserAccounts' WHERE username='$username' and pass='$password'";
    $result=$db->query($sql);
    echo 'You are On'
    if($result->num_rows > 0){
        echo 'Good';
    }

 }

?>