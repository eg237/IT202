<html>
<head>
<script>
function myValidation(inputEle, checkValue){
	let name = inputEle.name;
	let vid = "validation." + name;
	let vele = document.getElementById(vid);
	let value = inputEle.value;
	if(value === checkValue){
		if(vele){
			vele.remove();
		}
	}
	else{
		if(!vele){
			vele = document.createElement("span");
			vele.id = vid;
			document.body.appendChild(vele);
		}
		vele.innerText = name + " has an invalid value";
	}
	return false;
}
</script>
</head>

<body>
<form onsubmit="return false;">
<input type="text" name="test" placeholder="Trying it out" 
	onchange="myValidation(this, '');"/>
<input name="email" type="email" placeholder = "Email"/> 
<input name="emailconfirm" type="email" placeholder = "Confirm Email"/>
<input name="password" type="password" placeholder = "Password"/>
<input name="passwordconfirm" type="password" placeholder = "Confirm PAssword"/>
<input name="username" type = "text" palceholder = "Username" />

<input type="submit" value="Submit"/>
</form>
</body>
</html>