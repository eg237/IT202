<?php
    include_once('config.php')
    $username = $_POST['username']
    $password = $_POST['password']

    // $username = stripcslashes($username);
    // $password = stripcslashes($password);
$result = mysqli_query("SELECT * FROM `UserAccounts` WHERE username = '$username' and pass = '$password'") 
    or die("Failed to query Database " . mysqli_error());
$row = mysqli_fetch_array($result);
if ($row['username'] == $username && $row['password'] == $password) {
    echo "Login Successful Welcome " .$row['username'];
}else{
    echo "Failed to Login";
}

?>