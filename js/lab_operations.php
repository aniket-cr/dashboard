<?php
	include_once('config.php');
	$emailID = $_REQUEST['emailID'];
	$add_lab = $_REQUEST['add_lab'];
	$connect = mysqli_connect($servername,$username,$password,$dbname);
	if($add_lab == 1) //a new lab has to be added
	{
		$name = $_REQUEST['name'];
		$description = $_REQUEST['description'];
		$query = "SELECT max(labID) as c FROM labs;";
		echo $query;
		$result = mysqli_query($connect,$query);
		if(mysqli_num_rows($result) == 0)
		{
			$id = 1;
		}
		else
		{
			echo "in else";
			$result = mysqli_fetch_array($result);
			$id = $result['c'] + 1;
		}
		$query = "INSERT INTO labs(labID,universityID,admin,name,description) 
					VALUES($id,1,'$emailID','$name','$description');";
		echo $query;
		$result = mysqli_query($connect,$query);
	}
	
	if($add_lab == 0) //display all labs
	{
		$query = "SELECT * FROM labs;";
		$result = mysqli_query($connect,$query);
		$json = array();
		while($res = mysqli_fetch_array($result))
		{
			$json[] = $res;
		}
		echo json_encode($json);
	}
?>