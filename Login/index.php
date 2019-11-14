<?php
include_once('config.php');
session_start();


// $username = $_POST['user'];
// $password = $_POST['pass'];

//  if(isset($_POST['create'])){

//     $sql="SELECT * FROM 'UserAccounts' WHERE username='$username' and pass='$password'";
//     $result=mysqli_query($sql);
//     $row = mysqli_fetch_array($result);
//     if ($row['username'] == $username && $row['pass'] == $password){
//         echo "You are logged in";
//     }else{
//         echo 'Incorrect Info';
//     }

//  }

// if(isset($_POST['user']) && isset($_POST['pass'])){
//     $username = $_POST['user'];
//     $password = $_POST['pass'];

//     $query="select username , pass from `UserAccounts`";
//     $query += "where username = :user LIMIT 1";
//     $stmt = $db->prepare($query);
//     $stmt->execute(array(":user" =>$username));
//     $result = $stmt->fetch(sqli::FETCH_ASSOC);
//     if($results && count($results) > 0){
//         // $hash = password_hash($pass, PASSWORD_BCRYPT);
//          if(password_verify($password, $results['pass'])){
//             echo "Welcome, " . $results["user"];
//             echo "[" . $results["user"] . "]";
//             header("Location: LandingPage.html");
//         }
//         else{
//             echo "Invalid password";
//         }
//     }
//     else{
//             echo "Invalid username";
//     }
// }

if($_SERVER["REQUEST_METHOD"] == "POST") {
    // username and password sent from form 
    
    $myusername = mysqli_real_escape_string($db,$_POST['username']);
    $mypassword = mysqli_real_escape_string($db,$_POST['password']); 
    
    $sql = "SELECT id FROM `UserAccounts` WHERE username = '$myusername' and passcode = '$mypassword'";
    $result = mysqli_query($db,$sql);
    $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
    $active = $row['active'];
    
    $count = mysqli_num_rows($result);
    
    // If result matched $myusername and $mypassword, table row must be 1 row
      
    if($count == 1) {
       session_register("myusername");
       $_SESSION['login_user'] = $myusername;
       
       header("location: LandingPage.php");
    }else {
       echo "Your Login Name or Password is invalid";
    }
 }


?>