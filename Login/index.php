<?php
include_once('config.php');


$username = $_POST['user'];
$password = $_POST['pass'];

 if(isset($_POST['create'])){

    $sql="SELECT username, pass FROM 'UserAccounts' ";
    $result=$db->query($sql);
    // if ($row['username'] == $username && $row['pass'] == $password){
    //     echo "You are logged in";
    // }else{
    //     echo 'Incorrect Info';
    // }
    if ($result->num_rows > 0) {
        // output data of each row
        while($row = $result->fetch_assoc()) {
            echo 'Good';
        }
    } else {
        echo "0 results";
    }

 }

?>