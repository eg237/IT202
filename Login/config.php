<?php

$db_user = "root";
$db_pass = "";
$db_name = "UserAccounts";

$db = new PDO('mysql:host=sql.njit.edu;dbname=' . $db_name . ';charset=utf8', $db_user, $db_pass);
$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
?>