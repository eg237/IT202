 <?php

$servername="sql2.njit.edu";
$db_user = "eg237";
$db_pass = "LL9acXZx";
$db_name = "eg237";

$db=mysqli_connect($servername, $db_user, $db_pass, $db_name);


//try{
//$conn = new PDO('mysql:host=$servername;dbname=' . $db_name . ';charset=utf8', $db_user, $db_pass);
//$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
//echo "Connection Successful";
// }
// catch(PDOExeption $e){
//     echo "Connection Failed: " . $e->getMessage(); 
// }

// $host="sql2.njit.edu";//your msql host [sql1, sql2, sql3]
// $database="eg237";//ucid
// $username="eg237";//ucid
// $password="";//mysql password (not ucid password)

?>
