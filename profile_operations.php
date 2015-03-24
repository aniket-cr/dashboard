<?php
include_once('config.php');
$connect = mysqli_connect($servername,$username,$password,$dbname);
$emailID = $_REQUEST['emailID'];
$edit = $_REQUEST['edit_option'];
if($edit == 0)
{
	$query = "SELECT emailID,name,contact,address FROM user WHERE emailID='" . $emailID . "';";
	$result = mysqli_query($connect,$query);
	$result = mysqli_fetch_array($result);
	foreach($result as $key => $value)
	{
		if(is_null($value))
		{
			$result[$key] = "";
		}
	}
	echo json_encode($result);
}
else if($edit == 1) //edit the name
{
	$name = $_REQUEST['name'];
	$query = "UPDATE user SET name='" . $name . "' WHERE emailID='" . $emailID . "';";
	$result = mysqli_query($connect,$query);
	$query = "SELECT name FROM user WHERE emailID='" . $emailID . "';";
	$result = mysqli_query($connect,$query);
	$result = mysqli_fetch_array($result);
	foreach($result as $key => $value)
	{
		echo "<br/>" . $result[$key] . "<br/>";
		if(is_null($value))
		{
			echo "<br/>" . $result[$key] . " is null<br/>";
			$result[$key] = "";
		}
	}
	echo json_encode($result);
}
else if($edit == 2) //edit the contact
{
	$contact = $_REQUEST['contact'];
	$query = "UPDATE user SET contact='" . $contact . "' WHERE emailID='" . $emailID . "';";
	$result = mysqli_query($connect,$query);
	$query = "SELECT contact FROM user WHERE emailID='" . $emailID . "';";
	$result = mysqli_query($connect,$query);
	$result = mysqli_fetch_array($result);
	foreach($result as $key => $value)
	{
		if(is_null($value))
		{
			echo "<br/>" . $result[$key] . " is null<br/>";
			$result[$key] = "";
		}
	}
	echo json_encode($result);
}
else if($edit == 3) //edit the address
{
	$address = $_REQUEST['address'];
	$query = "UPDATE user SET address='" . $address . "' WHERE emailID='" . $emailID . "';";
	$result = mysqli_query($connect,$query);
	$query = "SELECT address FROM user WHERE emailID='" . $emailID . "';";
	$result = mysqli_query($connect,$query);
	$result = mysqli_fetch_array($result);
	foreach($result as $key => $value)
	{
		if(is_null($value))
		{
			echo "<br/>" . $result[$key] . " is null<br/>";
			$result[$key] = "";
		}
	}
	echo json_encode($result);
}
mysqli_close($connect);
?>