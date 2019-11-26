<?php
require "header.php";
// include_once('config.php');
// session_start();

// if(isset($_POST['user']) && isset($_POST['pass'])){
//     $username = $_POST['user'];
//     $password = $_POST['pass'];

//     $query="select username , pass from `UserAccounts`";
//     $query += "where username = :user LIMIT 1";
//     $stmt = $db->prepare($query);
//     $stmt->execute(array(":user" =>$username));
//     $result = $stmt->fetch(sqli::FETCH_ASSOC);
//     if($results  > 0){
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

// if($_SERVER["REQUEST_METHOD"] == "POST") {
    
//     $myusername = mysqli_real_escape_string($db,$_POST['username']);
//     $mypassword = mysqli_real_escape_string($db,$_POST['password']); 
    
//     $sql = "SELECT id FROM `UserAccounts` WHERE username = '$myusername' and pass = '$mypassword'";
//     $result = mysqli_query($db,$sql);
//     $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
//     // $active = $row['active'];
    
//     $count = mysqli_num_rows($result);
    
     
//     if($count == 1) {
//        session_register("myusername");
//        $_SESSION['login_user'] = $myusername;
       
//        header("location: LandingPage.php");
//     }else {
//        echo "Your Login Name or Password is invalid";
//     }
//  }
?>

    <main>
        <p>You are logged out!</p>
        <p>You are logged in!</p>
    </main>

<?php 
    require "footer.php";
?>