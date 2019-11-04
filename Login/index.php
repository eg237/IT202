<?php 
    $username = $_POST['username']
    $password = $_POST['password']

    // $username = stripcslashes($username);
    // $password = stripcslashes($password);
$servername="sql2.njit.edu";
$db_user = "eg237";
$db_pass = "LL9acXZx";
$db_name = "eg237";

$db=mysqli_connect($servername, $db_user, $db_pass, $db_name);

if($db){
    echo "Connected";
}else{
    echo "Not Connected";
}

$result = mysqli_query("SELECT * FROM")

?>