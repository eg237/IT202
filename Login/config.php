 <?php

$servername="sql2.njit.edu";
$db_user = "eg237";
$db_pass = "LL9acXZx";
$db_name = "eg237";

//$conn =mysqli_connect($servername, $db_user, $db_pass, $db_name);
$conn = new mysqli_connect($servername, $db_user, $db_pass, $db_name);
if(!$conn){
    die("Connection Failed: ".mysqli_connect_error());
}else{
    $stmt = $conn->prepare("Insert into Registration(firstname, lastname, email, password) value(?,?,?,?)");
    $stmt->bind_param("ssss", $firstname, $lastname, $email, $password);
    $stmt->execute();
    echo "Successful Registration";
    $stmt->close();
    $conn->close();
}
//$db = new PDO('mysql:host=sql1.njit.edu;dbname=' . $db_name . ';charset=utf8', $db_user, $db_pass);
//$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

// $host="sql2.njit.edu";//your msql host [sql1, sql2, sql3]
// $database="eg237";//ucid
// $username="eg237";//ucid
// $password="";//mysql password (not ucid password)

?>