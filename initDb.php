<?
ini_set('display_errors',1);
init_set('display_startup_errors',1);
error_reporting(E_ALL);

require('conf.php');
echo $host;
$conn_string = "mysql:host=$host;dbname=$database;charset=utf8mb4";

try{
	$db = new PDO($conn_string, $username, $password);
	echo "Connected";
}
catch(Exception $e){
	echo $e->getMessage();
	exit("Something went wrong");
}
?>
