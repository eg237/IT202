<?php
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
    $username = $_POST['username']
    $password = $_POST['pass']

    // $username = stripcslashes($username);
    // $password = stripcslashes($password);
$result = "SELECT * FROM `UserAccounts` WHERE username = '$username' and pass = '$password' LIMIT 1"; 
    or die("Failed to query Database " . mysqli_error());
$row = mysqli_fetch_array($result);
if ($row['username'] == $username && $row['pass'] == $password) {
    echo "Login Successful Welcome " .$row['username'];
}else{
    echo "Failed to Login";
}
// $error=''; //Variable to Store error message;
// if(isset($_POST['create'])){
//  if(empty($_POST['username']) || empty($_POST['password'])){
//  $error = "Username or Password is Invalid";
//  }
//  else
//  {
//  //Define $user and $pass
//  $username=$_POST['username'];
//  $password=$_POST['password'];
//  //Establishing Connection with server by passing server_name, user_id and pass as a patameter
//  $conn = mysqli_connect("localhost", "root", "");
//  //Selecting Database
//  $db = mysqli_select_db($conn, "test");
//  //sql query to fetch information of registerd user and finds user match.
//  $query = mysqli_query($conn, "SELECT * FROM userpass WHERE pass='$pass' AND user='$user'");
 
//  $rows = mysqli_num_rows($query);
//  if($rows == 1){
//  header("Location: welcome.php"); // Redirecting to other page
//  }
//  else
//  {
//  $error = "Username of Password is Invalid";
//  }
//  mysqli_close($conn); // Closing connection
//  }
// }

?>