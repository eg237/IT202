<?php
    include_once('config.php')
    $username = $_POST['username']
    $password = $_POST['password']

    // $username = stripcslashes($username);
    // $password = stripcslashes($password);
// $servername="sql2.njit.edu";
// $db_user = "eg237";
// $db_pass = "LL9acXZx";
// $db_name = "eg237";

// $db=mysqli_connect($servername, $db_user, $db_pass, $db_name);

// if($db){
//     echo "Connected";
// }else{
//     echo "Not Connected";
// }

$result = mysqli_query("SELECT * FROM `UserAccounts` WHERE username = '$username' and pass = '$password'") 
    or die("Failed to query Database " . mysqli_error());
$row = mysqli_fetch_array($result);
if ($row['username'] == $username && $row['pass'] == $password) {
    echo "Login Successful Welcome " .$row['username'];
}else{
    echo "Failed to Login";
}

?>