 <?php

$db_user = "root";
$db_pass = "";
$db_name = "UserAccounts";

$db = new PDO('mysql:host=sql1.njit.edu;dbname=' . $db_name . ';charset=utf8', $db_user, $db_pass);
$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

// $host="sql2.njit.edu";//your msql host [sql1, sql2, sql3]
// $database="eg237";//ucid
// $username="eg237";//ucid
// $password="";//mysql password (not ucid password)

?>