<?php
include_once('config.php');


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

if(isset($_POST['user']) && isset($_POST['pass'])){
    $username = $_POST['user'];
    $password = $_POST['pass'];

    $query="select username , pass from `UserAccounts`";
    $query += "where username = :user LIMIT 1";
    $stmt = $db->prepare($query);
    $stmt->execute(array(":user" =>$username));
    $result = $stmt->fetch(sqli::FETCH_ASSOC);
    if($results && count($results) > 0){
        //$hash = password_hash($pass, PASSWORD_BCRYPT);
        if(password_verify($pass, $results['pass'])){
            echo "Welcome, " . $results["user"];
            echo "[" . $results["user"] . "]";
            //header("Location: samplelandingpage.html");
        }
        else{
            echo "Invalid password";
        }
    }
    else{
            echo "Invalid username";
    }
}

?>