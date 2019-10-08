<?php
ini_set('display_errors',1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
function getName(){
	if(isset($_GET['name'])){
		echo "<p>Hello, " . $_GET['name'] . "</p>";
	}
}
?>
<html>
<head></head>
<body><?php getName();?>
<form mode="GET" action="#">
<input name="name" type="text" placeholder="Enter your name"/>

<!-- add password field-->
<div>
	<label for ="username">Username:</label>
	<input type ="text" id="username"
name="username">
</div>

<!-- add confirm password field-->
<div>
	<label for = "password">New Password:</label>
	<input type ="password" id = "pass" name="password">
</div>
<div>
	<label for = "password">Confirm Password:</label>
	<input type = "password" id = "pass2" name="password2">
<!-- ensure passwords match before sending the form
		AND/OR
	validate password matches confirmation on php side
-->
<script>
var pass = document.getElementById("pass")
  , pass2 = document.getElementById("pass2");

function validatePassword(){
  if(pass.value != pass2.value) {
    pass2.setCustomValidity("Passwords Don't Match");
  } else {
    pass2.setCustomValidity('');
  }
}

pass.onchange = validatePassword;
pass2.onkeyup = validatePassword;
</script>
<!-- change form submit type to post, adjust php checks for change in type-->

<input type="submit" value="Submit"/>
</form>
</body>
</html>

<?php
if(isset($_GET)){
	echo "<br><pre>" . var_export($_GET, true) . "</pre><br>";
}
?>
