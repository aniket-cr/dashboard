<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>User Profile</title>
<?php
session_start();
ob_start();
?>
<script language="javascript" src="ajaxProfile.js">
</script>
<script language="javascript">
function initialDisplay()
{
	var email = '<?php echo $_SESSION['email']; ?>';
	console.log(email);
	initialDisplayArg(email);
}
window.onload = initialDisplay();
function editName()
{
	var email = '<?php echo $_SESSION['email'] ?>';
	var name = document.getElementById("nameField").value;
	editNameArg(email,name);
	return true;
}

function editContact()
{
	var email = '<?php echo $_SESSION['email'] ?>';
	var contact = document.getElementById("contactField").value;
	editContactArg(email,contact);
	return true;
}

function editAddress()
{
	var email = '<?php echo $_SESSION['email'] ?>';
	var address = document.getElementById("addressField").value;
	console.log(address);
	editAddressArg(email,address);
	return true;
}

</script>
</head>

<body>
<input type="text" name="email" id="emailField"/><br>
<input type="text" name="name" id="nameField"/>
<button onClick="return editName();">save</button><br>
<input type="text" name="contact" id="contactField"/>
<button onClick="return editContact();">save</button><br>
<input type="text" name="address" id="addressField"/>
<button onClick="return editAddress();">save</button>
</body>
</html>
