<?php
    include_once('config.php')
    $username = $_POST['username']
    $password = $_POST['password']

    // $username = stripcslashes($username);
    // $password = stripcslashes($password);
$result = mysql_query("SELECT * FROM `UserAccounts` WHERE username = '$username' and pass = '$password'") 
    or die("Failed to query Database " . mysql_error());
$row = mysql_fetch_array($result);
if ($row['username'] == $username && $row['password'] == $password) {
    echo "Login Successful Welcome " .$row['username'];
}else{
    echo "Failed to Login";
}

?>