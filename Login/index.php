<?php
include_once('config.php');


$username = $_POST['user'];
$password = $_POST['pass'];

 if(isset($_POST['create'])){

    $sql="SELECT * FROM 'UserAccounts' WHERE username='$username' and pass='$password'";
    $result=mysql_query($sql);
    echo 'All';
    if(empty($_POST['username'] || empty($_POST['pass']))
{
    echo "UserName/Password is empty!";
    return false;
}

 }

?>