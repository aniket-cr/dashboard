<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Edit labs</title>
<?php
session_start();
ob_start();
?>
<script language="javascript" src="ajaxLab.js">
</script>
<script language="javascript">
function addLab()
{
	var name = document.getElementById("nameField").value;
	var description = document.getElementById("descriptionField").value;
	var emailID = "<?php echo $_SESSION['email']; ?>";
	addLabArg(emailID,name,description);
	displayLabsArg(emailID);
}
function displayLabs()
{
	var emailID = "<?php echo $_SESSION['email']; ?>";
	displayLabsArg(emailID);
}
window.onload = displayLabs();
</script>
</head>

<body>
<?php
//add lab option
?>
Lab name : <input type="text" name="name" id="nameField"/><br>
Description : <textarea name="description" id="descriptionField"></textarea>
<button onClick="addLab();">add</button>
<?php
//display all labs

?>
<div id="display_labs">
</div>
</body>
</html>